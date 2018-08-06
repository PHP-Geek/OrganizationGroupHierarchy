@extends('./layouts.admin')
@section('content')

<div class="page-wrapper-row full-height">
    <div class="page-wrapper-middle">
	<!-- BEGIN CONTAINER -->
	<div class="page-container">
	    <!-- BEGIN CONTENT -->
	    <div class="page-content-wrapper">
		<!-- BEGIN CONTENT BODY -->
		<!-- BEGIN PAGE HEAD-->

		<!-- END PAGE HEAD-->
		<!-- BEGIN PAGE CONTENT BODY -->
		<div class="page-content">
		    <div class="container">
			<!-- BEGIN PAGE BREADCRUMBS -->
			<ul class="page-breadcrumb breadcrumb">
			    <li>
				<a href="{{url('/home')}}">Home</a>
				<i class="fa fa-circle"></i>
			    </li>
			    <li>
				<span>Profile</span>
				<i class="fa fa-circle"></i>
			    </li>
			    <li>
				<span>Edit Profile</span>

			    </li>
			</ul>
			<!-- END PAGE BREADCRUMBS -->
			<!-- BEGIN PAGE CONTENT INNER -->

			<div class="page-content-inner">
			    <div class="mt-content-body">
				<form action="" id="profileForm" name="profileForm" method="post">
				    <div class="row">
					<div class="col-md-12 col-sm-12">
					    <div class="portlet light">
						<div class="portlet-title">
						    <div class="caption caption-md">
							<i class="icon-bar-chart font-dark hide"></i>
							<span class="caption-subject font-red-sunglo uppercase bold">Personal Detail</span>
						    </div>

						</div>
						<div class="portlet-body form">
						    {{csrf_field()}}
						    <div class="form-body">
							<div class="row">
							    <div class="col-md-6">
								<div class="form-group">
								    <label>First Name </label>
								    <div class="input-group">
									<span class="input-group-addon">
									    <i class="fa fa-user"></i>
									</span>
									<input type="text" class="form-control" placeholder="First Name" name="firstName" id="firstName" value="{{ isset($userProfileArray) ? $userProfileArray->firstName:'' }}"> </div>
								</div>
							    </div>
							    <div class="col-md-6">
								<div class="form-group">
								    <label>Last Name</label>
								    <div class="input-group">
									<span class="input-group-addon">
									    <i class="fa fa-user"></i>
									</span>
									<input type="text" class="form-control" placeholder="Last Name" name="lastName" id="lastName" value="{{ isset($userProfileArray) ? $userProfileArray->lastName:'' }}"> </div>
								</div>
							    </div>
							</div>
							<div class="row">
							    <div class="col-md-6">
								<div class="form-group">
								    <label>Email</label>
								    <div class="input-group">
									<span class="input-group-addon">
									    <i class="fa fa-envelope"></i>
									</span>
									<input type="text" class="form-control" placeholder="Email" name="email" id="email" value="{{ isset($userProfileArray) ? $userProfileArray->email:'' }}" readonly="true"> </div>
								</div>
							    </div>
							    <div class="col-md-6">
								<div class="form-group">
								    <label>Phone</label>
								    <div class="input-group">
									<span class="input-group-addon">
									    <i class="fa fa-phone"></i>
									</span>
									<input type="text" class="form-control" placeholder="Phone" name="contactNo" id="contactNo" value="{{ isset($userProfileArray) ? $userProfileArray->phone:'' }}"> </div>
								</div>
							    </div>
							</div>
							<div class="row">
							    <div class="col-md-6">
								<div class="form-group">
								    <label>Username</label>
								    <div class="input-group">
									<span class="input-group-addon">
									    <i class="fa fa-user"></i>
									</span>
									<input type="text" class="form-control" placeholder="Username" name="userName" id="userName" value="{{ isset($userProfileArray) ? $userProfileArray->userName:'' }}" readonly="true"/> 
								    </div>
								</div>
							    </div>
							    <div class="col-md-6">
								<div class="form-group">
								    <label>Dob</label>
								    <div class="">
									<div class="input-group date bs-datetime">
									    <span class="input-group-addon">
										<i class="fa fa-calendar"></i>
									    </span>
									    <input type="text" class="form-control" placeholder="DOB" name="dateOfBirth" id="dateOfBirth" value="{{ isset($userProfileArray) ? date('m/d/Y', strtotime($userProfileArray->dateOfBirth)):'' }}">
									</div>
								    </div>
								</div>
							    </div>
							</div>
						    </div>
						</div>
					    </div>
					</div>
				    </div>
				    <div class="row">
					<div class="col-md-12 col-sm-12">
					    <div class="portlet light">
						<div class="portlet-title">
						    <div class="caption caption-md">
							<i class="icon-bar-chart font-dark hide"></i>
							<span class="caption-subject font-red-sunglo uppercase bold">Address Info</span>
						    </div>

						</div>
						<div class="portlet-body form">
						    <div class="row">
							<div class="col-md-6">
							    <div class="form-group">
								<label>Address</label>
								<div class="input-group">
								    <span class="input-group-addon">
									<i class="fa fa-home"></i>
								    </span>
								    <input type="text" class="form-control" placeholder="Address" name="address" id="address" value="{{ isset($userProfileArray) ? $userProfileArray->address:'' }}"> 
								</div>
							    </div>
							</div>
							<div class="col-md-6">
							    <div class="form-group">
								<label>Address1</label>
								<div class="input-group">
								    <span class="input-group-addon">
									<i class="fa fa-phone"></i>
								    </span>
								    <input type="text" class="form-control" placeholder="Address1" name="address1" id="address1" value="{{ isset($userProfileArray) ? $userProfileArray->address1:'' }}"> </div>
							    </div>
							</div>

						    </div>
						    <div class="row">
							<div class="col-md-6">
							    <div class="form-group">
								<label>Country</label>
								<div class="input-group">
								    <span class="input-group-addon">
									<i class="fa fa-user"></i>
								    </span>
								    <select class="form-control" id='country_id' name='country_id'>
									<option value="" disabled="disabled" selected="selected">Select Country</option>
									@foreach($countriesArray as $country)
									<option {{(isset($userProfileArray->country_id) && $country->id==$userProfileArray->country_id)?'selected="selected"':''}} value="{{$country->id}}">{{$country->countryName}}</option>
									@endforeach
								    </select>
								</div>
							    </div>
							</div>
							<div class="col-md-6">
							    <div class="form-group">
								<label>State</label>
								<div class="input-group">
								    <span class="input-group-addon">
									<i class="fa fa-phone"></i>
								    </span>
								    <select class="form-control" id='stateId' name='stateId'>
								    </select ></div>
							    </div>
							</div>

						    </div>
						    <div class="row">
							<div class="col-md-6">
							    <div class="form-group">
								<label>City</label>
								<div class="input-group">
								    <span class="input-group-addon">
									<i class="fa fa-user"></i>
								    </span>

								    <input type="text" class="form-control" placeholder="City" name="city" id="city" value="{{ isset($userProfileArray) ? $userProfileArray->city:'' }}"> 
								</div>
							    </div>
							</div>
							<div class="col-md-6">
							    <div class="form-group">
								<label>Pin Code</label>
								<div class="input-group">
								    <span class="input-group-addon">
									<i class="fa fa-phone"></i>
								    </span>
								    <input type="text" class="form-control" placeholder="Pin Code" name="pinCode" id="pinCode" value="{{ isset($userProfileArray) ? $userProfileArray->pinCode:'' }}"> </div>
							    </div>
							</div>

						    </div>
						    <div class="row">
							<div class="col-sm-12">
							    <button type="submit" id="editSuperadminBtn" class="btn blue btn-green">Submit</button>
							    <button type="button" class="btn default">Cancel</button>
							</div>
						    </div>
						    <div class="margin-bottom-10"></div>
						</div>
					    </div>
					</div>
				    </div>
				</form>
			    </div>
			</div>

		    </div>
		</div>
	    </div>
	</div>
    </div>
</div>
<script>
    var stateEditID = "{{$userProfileArray->state}}";</script>
<script src="{{ url('js/common/editProfile.js') }}"></script>
@endsection
