@extends('./layouts.common')
@section('content')

<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <div class="row">
        <form class="login-form" action="" enctype='multipart/form-data' method="post">
            <h3 class="form-title sbold font-white text-center">Upload audio file (.flac)</h3>
            <div class="form-group">
                @if(isset($error) && $error !='' && $error != NULL)
                <div class="alert alert-danger">{{$error}}</div>
                @endif
                @if(isset($success) && $success !='' && $success != NULL)
                <div class="alert alert-success">{{$success}}</div>
                @endif
                {{csrf_field()}}
                <input type="file" name="fileName" id="fileName"/>
                <button type="submit" class="btn green pull-right"> Convert </button>
            </div>
        </form>
    </div>
    <!-- END LOGIN FORM -->

</div>

<br/><br/>
<div class="row margin-top-20">
    <div class="col-sm-offset-2 col-sm-8">
        @if(isset($transcriptionData) && $transcriptionData!=null)
        <textarea readonly="readonly" class="form-control" rows="6">
            <?php echo json_encode($transcriptionData); ?>
        </textarea>
        @endif
    </div>
</div>
@endsection
