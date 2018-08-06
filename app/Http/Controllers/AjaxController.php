<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;
use App\Group;
use Auth;
use Hash;
use App\Project;
use App\ProjectSession;
use App\ListUser;
use App\Lists;
use UserRole;
use App\Traits;

class AjaxController extends Controller {

    /**
     * Change user Status
     * @param Request $request
     * @return type
     */
    function changeUserStatus(Request $request) {
        $rules = [
            'id' => 'required',
            'userStatus' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if (!$validator->fails()) {
            $superadminDetailArray = ['userStatus' => $request->userStatus];
            $userObj = new User();
            $userObj->updateUserData($request->id, $superadminDetailArray);
            return response()->json(['code' => '1', 'message' => 'Status Changed Successfully!']);
        }
        return response()->json(['code' => '0', 'message' => 'Error Changing Status!!!']);
    }

    /**
     * validate the user name for unique or email
     * @param type $request
     */
    function validateUserNameOrEmail(Request $request) {
        if ($request->get('type') == 'email') {
            $rules = [
                'email' => 'required|unique:users'
            ];
        } else {
            $rules = [
                'userName' => 'required|unique:users'
            ];
        }
        $validator = Validator::make($request->all(), $rules);
        if (!$validator->fails()) {
            return response()->json(true);
        }
        return response()->json(false);
    }

    /**
     * validate the user name and email for update the data
     * @param Request $request
     * @return type
     */
    function validateEditUserNameOrEmail(Request $request) {
        if ($request->get('type') == 'email') {
            $rules = [
                'email' => 'required|unique:users,email,' . $request->id,
            ];
        } else {
            $rules = [
                'userName' => 'required|unique:users,userName,' . $request->id,
            ];
        }
        $validator = Validator::make($request->all(), $rules);
        if (!$validator->fails()) {
            return response()->json(true);
        }
        return response()->json(false);
    }

    /**
     * validate company name for edit
     * @param Request $request
     * @return type
     */
    function validateEditCompanyName(Request $request) {
        $rules = [
            'companyName' => 'required|unique:companies,companyName,' . $request->id,
        ];
        $validator = Validator::make($request->all(), $rules);
        if (!$validator->fails()) {
            return response()->json(true);
        }
        return response()->json(false);
    }

    /**
     * get the user data by id
     * @param Request $request
     * @return type
     */
    function getUserById(Request $request) {
        $userObj = new User();
        return response()->json($userObj->getUserData($request->id));
    }

    /**
     * Change group status
     * @param Request $request
     * @return type
     */
    function changeGroupStatus(Request $request) {
        $rules = [
            'id' => 'required',
            'groupStatus' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if (!$validator->fails()) {
            $groupDetailArray = ['groupStatus' => $request->groupStatus];
            $groupObj = new Group();
            $groupObj->updateGroupData($request->id, $groupDetailArray);
            return response()->json(['code' => '1', 'message' => 'Status Changed Successfully!']);
        }
        return response()->json(['code' => '0', 'message' => 'Error Changing Status!!!']);
    }

    /**
     * Add new Brand 
     * @param Request $request
     * @return type
     */
    function addBrand(Request $request) {

        if ($request->method() == 'POST') {
            $rules = [
                'brandName' => 'required',
            ];
            $validator = Validator::make($request->all(), $rules);
            if (!$validator->fails()) {
                $brand = new \App\Brand();
                $brand->brandCreatedBy = Auth::user()->id;
                $brand->brandName = $request->brandName;
                $brand->brandSlug = str_slug($request->brandName);
                $brand->brandDescription = $request->brandDescription;
                $brand->brandStatus = 1;
                $brand->created_at = date('Y-m-d h:i:s');
                $brand->save();
                if ($brand->id > 0) {
                    $brandData = ['brandName' => $request->brandName];
                    return response()->json(['code' => '1', 'message' => 'Brand Added Successfully!!!', 'data_array' => $brandData]);
                }
            } else {
                return response()->json(['code' => '-1', 'message' => 'Error Occured', 'data_array' => $validator->errors()->first()]);
            }
        }
        return response()->json(['code' => '0', 'message' => 'Error adding Brand!!!']);
    }

    /**
     * Add categories
     * @param Request $request
     * @return type
     */
    function addCategory(Request $request) {

        if ($request->method() == 'POST') {
            $rules = [
                'categoryName' => 'required',
            ];
            $validator = Validator::make($request->all(), $rules);
            if (!$validator->fails()) {
                $category = new \App\Category();
                $category->categoryCreatedBy = Auth::user()->id;
                $category->companyId = Auth::user()->companyId;
                $category->categoryName = $request->categoryName;
                $category->categorySlug = str_slug($request->categoryName);
                $category->categoryStatus = 1;
                $category->created_at = date('Y-m-d h:i:s');
                $category->save();
                if ($category->id > 0) {
                    $categoryData = ['categoryName' => $request->categoryName];

                    return response()->json(['code' => '1', 'message' => 'Category Added Successfully!!!', 'data_array' => $categoryData]);
                }
            } else {
                return response()->json(['code' => '-1', 'message' => 'Error Occured', 'data_array' => $validator->errors()->first()]);
            }
        }
        return response()->json(['code' => '0', 'message' => 'Error adding Category!!!']);
    }

    /**
     * Change product status
     * @param Request $request
     * @return type
     */
    function changeProductStatus(Request $request) {
        $rules = [
            'id' => 'required',
            'productStatus' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if (!$validator->fails()) {
            $productDetailArray = ['productStatus' => $request->productStatus];
            $productObj = new \App\Product();
            $productObj->updateProductData($request->id, $productDetailArray);
            return response()->json(['code' => '1', 'message' => 'Status Changed Successfully!']);
        }
        return response()->json(['code' => '0', 'message' => 'Error Changing Status!!!']);
    }

    /**
     * Edit framing guide status
     * @param Request $request
     * @return type
     */
    function changeframingGuideStatus(Request $request) {
        $rules = [
            'id' => 'required',
            'status' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if (!$validator->fails()) {
            $framingGuideDetailArray = ['status' => $request->status];

            $framingGuideObj = new \App\Asset();
            $framingGuideObj->updateframingGuideData($request->id, $framingGuideDetailArray);
            return response()->json(['code' => '1', 'message' => 'Status Changed Successfully!']);
        }
        return response()->json(['code' => '0', 'message' => 'Error Changing Status!!!']);
    }

    /**
     * Search company users to add groups
     * @param Request $request
     * @return string
     */
    function searchCompanyUsers(Request $request) {
        $keyword = $request->get('term');
        $query = \App\User::where(function($query) use ($keyword) {
                    $query->orWhere('firstName', 'like', '%' . $keyword . '%');
                    $query->orWhere('lastName', 'like', '%' . $keyword . '%');
                    $query->orWhere('userName', 'like', '%' . $keyword . '%');
                    $query->orWhere('email', 'like', '%' . $keyword . '%');
                })
                ->where('companyId', Auth::user()->companyId)
                ->where('userStatus', '=', '1')
                ->select('users.*')
                ->get();
        if (count($query->toArray()) > 0) {
            $result_array = array_map(function($tag) {
                return [
                    'id' => $tag['id'],
                    'text' => $tag['firstName'] . ' ' . $tag['lastName']
                ];
            }, $query->toArray());
            return response()->json($result_array);
        } else {
            return '0';
        }
        return 'Please Enter 2 or more characters';
    }

    /**
     * Search company users to add groups
     * @param Request $request
     * @return string
     */
    function searchCompanygroupManager(Request $request) {
        $keyword = $request->get('term');
        $userObj = new User();
        $query = $userObj->searchUser($keyword, '8', Auth::user()->companyId);
        if (count($query->toArray()) > 0) {
            $result_array = array_map(function($tag) {
                return [
                    'id' => $tag['id'],
                    'text' => $tag['firstName'] . ' ' . $tag['lastName']
                ];
            }, $query->toArray());
            return response()->json($result_array);
        } else {
            return '0';
        }
        return 'Please Enter 2 or more characters';
    }

    /**
     * get trait
     * @param Request $request
     */
    function getTrait(Request $request) {
        return response()->json(\App\TemplateField::where('templateId', $request->id)->get());
    }

    /**
     * get the template form 
     * @param \App\Template $template
     */
    function getTemplateForm(\App\Template $template) {
        $data['templateFields'] = $template->templateField;
        return view('admin.demographics.partials.form')->with($data);
    }

    /**
     * search the participants by company
     * @return string
     */
    function getCompanyParticipants(Request $request) {
        $keyword = $request->get('term');
        $userObj = new User();
        $data = $userObj->searchParticipants($keyword);
        if (count($data->toArray()) > 0) {
            $result_array = array_map(function($tag) {
                return [
                    'id' => $tag['id'],
                    'text' => $tag['firstName'] . ' ' . $tag['lastName']
                ];
            }, $data->toArray());
            return response()->json($result_array);
        } else {
            return '0';
        }
        return 'Please Enter 2 or more characters';
    }

    /**
     * add participants
     * @param Request $request
     */
    function addParticipant(Request $request) {

        $rules = [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|unique:users',
            'userName' => 'required|unique:users',
            'phone' => 'required',
            'sessionId' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if (!$validator->fails()) {
            $user = new User();
            $userId = $user->addUser($request);
            if ($userId > 0) {
                $profileDetailObj = new \App\Profile();
                $profileDetailObj->extraProperty1 = $request->input('extraProperty1');
                $profileDetailObj->userId = $userId;
                $profileDetailObj->save();
//insert the user roles
                $userRole = new \App\UserRole();
                $userRole->roleId = '7';
                $userRole->userId = $userId;
                $userRole->save();
//add to session
                $sessionParticipantObj = new \App\SessionParticipant();
                $sessionParticipantObj->sessionId = $request->sessionId;
                $sessionParticipantObj->participantId = $userId;
                $sessionParticipantObj->save();
                if ($sessionParticipantObj->id > 0) {
                    return response()->json(['code' => '1', 'message' => 'Success']);
                }
            }
        }
        return response()->json(['code' => '0', 'message' => 'Something went wrong']);
    }

    /**
     * add existing participants to the session
     * @return type
     */
    function addExistingParticipant(Request $request) {
        $rules = [
            'sessionId' => 'required',
            'participantId' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if (!$validator->fails()) {
//add to session
            $sessionParticipantObj = new \App\SessionParticipant();
            if ($sessionParticipantObj->validateSessionParticipants($request->sessionId, $request->participantId)) {
                return response()->json(['code' => '0', 'message' => 'User already exist on this session']);
            }
            $sessionParticipantObj->sessionId = $request->sessionId;
            $sessionParticipantObj->participantId = $request->participantId;
            $sessionParticipantObj->save();
            if ($sessionParticipantObj->id > 0) {
                return response()->json(['code' => '1', 'message' => 'Success']);
            }
        }
        return response()->json(['code' => '0', 'message' => 'Something went wrong']);
    }

    /**
     * remove the user from any session
     * @param Request $request
     */
    function removeSessionUser(Request $request) {
        $rules = [
            'id' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if (!$validator->fails()) {
            //check for session
            $projectSessionObj = new \App\ProjectSession();
            if ($projectSessionObj->validateCompanySession(\App\SessionParticipant::find($request->id)->sessionId) == FALSE) {
                return response()->json(['code' => '0', 'message' => 'Something went wrong']);
            }
            \App\SessionParticipant::where('id', $request->id)->delete();
            return response()->json(['code' => '1', 'message' => 'Success']);
        }
    }

    /**
     * get the sessions by the project
     * @param \App\Http\Controllers\Project $project
     */
    function getSessionByProject(Project $project) {
        $projectObj = new Project();
        if ($projectObj->validateCompanyProject($project->id) == FALSE) {
            return 0;
        }
        return response()->json($project->projectSession);
    }

    /**
     * Search project by company id
     * @param Request $request
     * @return string
     */
    function searchProjects(Request $request) {
        $keyword = $request->get('term');
        $query = \App\Project::where(function($query) use ($keyword) {
                    $query->orWhere('projectTitle', 'like', '%' . $keyword . '%');
                })
                ->where('companyId', Auth::user()->companyId)
                ->where('projectStatus', '=', '1')
                ->select('projects.*');
        if (Auth::check() && in_array('group-manager', array_column(Auth::user()->userRole->toArray(), 'roleSlug'))) {
            $query = $query->whereIn('projects.groupId', \Session::get('myGroups'));
        }
        $query = $query->get();
        if (count($query->toArray()) > 0) {
            $result_array = array_map(function($tag) {
                return [
                    'id' => $tag['id'],
                    'text' => $tag['projectTitle']
                ];
            }, $query->toArray());
            return response()->json($result_array);
        } else {
            return '0';
        }
        return 'Please Enter 2 or more characters';
    }

    /**
     * add list of participants under the list
     * @param $request
     * @return $type
     */
    function addListParticipant(Request $request) {
        $rules = [
            'firstName' => 'required',
            'listId' => 'required',
            'email' => 'required|unique:users',
            'phone' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if (!$validator->fails()) {
            $user = new User();
            $userId = $user->addUser($request);
            if ($userId > 0) {
//insert the user roles
                $userRole = new \App\UserRole();
                $userRole->roleId = '7';
                $userRole->userId = $userId;
                $userRole->save();
//add to session
                $listUserObj = new ListUser();
                $listUserId = $listUserObj->add($request->listId, $userId);
                if ($listUserId > 0) {
                    return response()->json(['code' => '1', 'message' => 'Success']);
                }
            }
        }
        return response()->json(['code' => '0', 'message' => 'Something went wrong']);
    }

    /**
     * get list by list id
     * @param List $list
     */
    function getList(Lists $list) {
        return response()->json($list);
    }

    /**
     * change the list for the session
     */
    function changeSessionList(Request $request) {
        if ($request->method() == 'POST') {
            $rules = [
                'listId' => 'required',
                'sessionId' => 'required'
            ];
            $validator = Validator::make($request->all(), $rules);
            if (!$validator->fails()) {
                $sessionObj = new ProjectSession();
                if ($sessionObj->edit($request->sessionId, ['sessionListId' => $request->listId]) > 0) {
                    return response()->json(['code' => '1', 'message' => 'Success']);
                }
            }
        }
        return response()->json(['code' => '0', 'message' => 'Something went wrong']);
    }

    /**
     * delete list participant
     */
    function deleteListParticipant(Request $request) {
        if ($request->method() == 'POST') {
            $rules = [
                'listUserId' => 'required'
            ];
            $validator = Validator::make($request->all(), $rules);
            if (!$validator->fails()) {
                if (ListUser::where('id', $request->listUserId)->delete()) {
                    Traits::where('listUserId', $request->listUserId)->delete();
                    return response()->json(['code' => '1', 'message' => 'Success']);
                }
            }
        }
        return response()->json(['code' => '0', 'message' => 'Something went wrong']);
    }

    /**
     * add existing user to list
     */
    function addExistingUserToList(Request $request) {
        if ($request->method() == 'POST') {
            $rules = [
                'listId' => 'required',
                'userId' => 'required'
            ];
            $validator = Validator::make($request->all(), $rules);
            if (!$validator->fails()) {
                $listUserObj = new ListUser();
                if ($listUserObj->validateParticipantAndList($request->listId, $request->userId) > 0) {
                    return response()->json(['code' => '0', 'message' => 'Participant already exist on this list']);
                }
                $listUserObj->listId = $request->listId;
                $listUserObj->userId = $request->userId;
                $listUserObj->listUserStatus = '1';
                $listUserObj->save();
                if ($listUserObj->id > 0) {
                    return response()->json(['code' => '1', 'message' => 'Success']);
                }
            }
        }
        return response()->json(['code' => '0', 'message' => 'Something went wrong']);
    }

    /**
     * search groups
     * @param Request $request
     * @return string
     */
    function searchGroups(Request $request) {
        $keyword = $request->get('term');
        $query = \App\Group::where(function($query) use ($keyword) {
                    $query->orWhere('groupName', 'like', '%' . $keyword . '%');
                })
                ->where('companyId', Auth::user()->companyId)
                ->where('groupStatus', '=', '1')
                ->select('groups.*');
//        if (Auth::check() && in_array('group-manager', array_column(Auth::user()->userRole->toArray(), 'roleSlug'))) {
//            $query = $query->whereIn('projects.groupId', \Session::get('myGroups'));
//        }
        $query = $query->get();
        if (count($query->toArray()) > 0) {
            $result_array = array_map(function($tag) {
                return [
                    'id' => $tag['id'],
                    'text' => $tag['groupName']
                ];
            }, $query->toArray());
            return response()->json($result_array);
        } else {
            return '0';
        }
        return 'Please Enter 2 or more characters';
    }

    /**
     * save project assets
     * @param Request $request
     * @return type
     */
    function saveProjectAsset(Request $request) {
        if ($request->method() == 'POST') {
            $rules = [
                'projectId' => 'required',
                'assetType' => 'required',
                'fileName' => 'required'
            ];
            $validator = Validator::make($request->all(), $rules);
            if (!$validator->fails()) {
                \Session::flash('success', 'Uploaded Successfully');
            } else {
                \Session::flash('error', $validator->errors()->all());
                return redirect(url('admin/asset/import'));
            }
        }
        \Session::flash('error', 'Something went wrong');
        return redirect(url('admin/asset/import'));
    }

}
