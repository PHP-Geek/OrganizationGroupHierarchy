<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Template;
use App\TemplateField;
use App\Traits;
use Auth;
use App\Project;
use App\ProjectSession;

class DemographicController extends Controller {

    /**
     * listing of all the demographic templates
     */
    function templates() {
        $data = [];
        //get the traits
        $data['traitArray'] = Template::where([
                    ['companyId', '=', Auth::user()->companyId],
                    ['templateStatus', '!=', '-1'],
                    ['templateType', '=', 'demographic']
                ])->get();
        return view('admin.demographics.templates')->with($data);
    }

    /**
     * create the demographic template
     * @param Request $request
     */
    function createTemplate(Request $request) {
        $data = [];
        if ($request->method() == 'POST') {
            $rules = array(
                'templateTitle' => 'required',
            );
            $validator = Validator::make($request->all(), $rules);
            if (!$validator->fails()) {
                //validate the template fields
                $templateFieldArray = [];
                for ($i = 0; $i < count($request->templateFieldControl); $i++) {
                    if ($request->templateFieldLabel[$i] == '' || $request->templateFieldControl[$i] == '') {
                        return response()->json(['code' => '0', 'message' => 'Field Label is required in row ' . $i]);
                    } else {
                        $templateFieldArray[] = [$request->templateFieldLabel[$i], $request->templateFieldControl[$i], json_decode($request->templateFieldValue[$i]), $request->required[$i]];
                    }
                }
                $templateObj = new Template();
                //save the template data
                $templateId = $templateObj->add('demographic', $request);
                if ($templateId > 0) {
                    //save the template fields
                    if (count($templateFieldArray) > 0) {
                        foreach ($templateFieldArray as $templateField) {
                            $templateFieldObj = new TemplateField();
                            $templateFieldObj->templateId = $templateId;
                            $templateFieldObj->templateFieldLabel = $templateField[0];
                            $templateFieldObj->templateFieldName = str_replace(array(' ', '@', '-', '.', ',', '+', '=', '/', '\\', '!', '#', '$', '%', '^', '&', '*'), '_', $templateField[0]);
                            $templateFieldObj->templateFieldControl = $templateField[1];
                            $templateFieldObj->templateFieldValue = json_encode($templateField[2]);
                            $templateFieldObj->required = $templateField[3];
                            $templateFieldObj->templateFieldStatus = '1';
                            $templateFieldObj->save();
                        }
                    }
                    return response()->json(['code' => '1', 'message' => 'Success']);
                }
            } else {
                return response()->json(['code' => '0', 'message' => 'Template Title is required']);
            }
            return response()->json(['code' => '0', 'message' => 'Something went wrong']);
        }
        return view('admin.demographics.createTemplate')->with($data);
    }

    /**
     * listing of the templates
     */
    function index() {
        $data['projectArray'] = Project::where('companyId', Auth::user()->companyId)->get();
        $data['templateArray'] = Template::where([
                    ['companyId', '=', Auth::user()->companyId],
                    ['templateStatus', '=', '1'],
                    ['templateType', '=', 'demographic']
                ])->get();
        return view('admin.demographics.index')->with($data);
    }

    /**
     * make the grid as per trait template and selected session
     * @param Request $request
     */
    function makeSessionTemplateGrid(Request $request) {

        if ($request->method() == 'POST') {
            $rules = array(
                'projectId' => 'required',
                'sessionId' => 'required'
            );
            $validator = Validator::make($request->all(), $rules);
            if (!$validator->fails()) {
                $projectSessionObj = new ProjectSession();
                if ($projectSessionObj->validateProjectSession($request->sessionId, $request->projectId) == FALSE) {
                    return '0';
                }
                //get the session participants
                $sessionArray = ProjectSession::find($request->sessionId);
                $templateId = $sessionArray->templateId;

                //get the the template fields
                $templateFieldArray = TemplateField::where([
                            ['templateId', '=', $templateId],
                            ['templateFieldStatus', '=', '1']
                        ])->get();
                if (count($templateFieldArray) == 0) {
                    return 'No Template Selected for Session';
                }
                // $sessionParticipantArray = $sessionArray->sessionParticipants;

                $userListArray = $sessionArray->lists->listUser;
                //list users loops
                $traitGrid = [];
                foreach ($userListArray as $key => $listUser) {
                    $traitRec = Traits::where([
                                ['templateId', '=', $templateId],
                                ['sessionId', '=', $request->sessionId],
                                ['listUserId', '=', $listUser->id],
                                ['status', '=', '1']
                            ])->pluck('traitValue', 'templateField');
                    $traitGrid[$key]['participantDetail'] = $listUser;
                    $traitGrid[$key]['traitArray'] = $traitRec;
                    foreach ($templateFieldArray as $key1 => $templateField) {
                        array_push($traitGrid[$key], $templateField);
                    }
                }
                return view('admin.demographics.partials.grid', compact('traitGrid', 'templateFieldArray', 'sessionArray', 'templateId'));
            }
        }
        return '0';
    }

    /**
     * save the trait
     * @param Request $request
     */
    function save(Request $request) {
        if ($request->method() == 'POST') {
            $traitObj = new Traits();
            Traits::where('sessionId', $request->sessionId)->where('templateId', $request->templateId)->delete();
            if ($traitObj->addTraitForSessionParticipants($request) == '1') {
                \Session::flash('success', [$request->projectId, $request->sessionId, $request->templateId]);
                return redirect('/admin/traits');
            }
        }
        \Session::flash('error', 'Something went wrong');
        return redirect('/admin/traits');
    }

    /**
     * create the traits/demographics
     * @param Request $request
     */
    function create(Request $request) {
        $data = [];
        if ($request->method() == 'POST') {
            if (count($request->col_names) > 0) {
                foreach ($request->col_names as $col) {
                    if (is_array($request->$col)) {
                        $value = implode('|', $request->$col);
                    } else {
                        $value = $request->$col;
                    }
                    $traitObj = new Traits();
                    $traitObj->templateId = $request->templateId;
                    $traitObj->templateField = $col;
                    $traitObj->traitValue = $value != null ? $value : '';
                    $traitObj->save(); //save the trait
                }
                if ($traitObj->id > 0) {
                    return response()->json(['code' => '1', 'message' => 'Success']);
                }
            }
            return response()->json(['code' => '0', 'message' => 'Something went wrong']);
        }
        $data['templateArray'] = Template::where([
                    ['companyId', '=', Auth::user()->companyId],
                    ['templateStatus', '=', '1'],
                    ['templateType', '=', 'demographic']
                ])->get();
        return view('admin.demographics.create')->with($data);
    }

}
