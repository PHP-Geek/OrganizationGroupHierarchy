<style>
    .clr-bar{
        background: #444d58;
        border-color: #444d58;
        color: #f1f1f1;
    } 
    .clr-bar:hover{
        color: #f1f1f1;

    }
    .navbar-default .navbar-brand,  .navbar-default .navbar-brand:hover {
        color: #f1f1f1;
    }
    .navbar-default .navbar-nav > li > a:focus, .navbar-default .navbar-nav > li > a:hover {
        color: #f1f1f1;
        background-color: transparent;
    }
    .navbar-default .navbar-nav > li > a, .navbar-default .navbar-text {
        color: #f1f1f1;
    }
    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -1px;
    }
    .btn.btn-default.dropdown-toggle{
        background-color: #444d58;
        border-color: #444d58;
        color: #f1f1f1;

    }
    .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:focus, .navbar-default .navbar-nav > .open > a:hover {
        background-color: #444d58;
        color: #f1f1f1;
        border-color:#444d58;
    }
    .clr-yellow{
        color:#F7BB01 !important;
    }
    .btn.btn-default.dropdown-toggle {
        text-align: left;
    }
    /*    .page-header .top-menu, .page-header .top-menu .navbar-nav > li.dropdown-user .dropdown-toggle, .page-header-fixed-mobile .page-header .top-menu {
            background-color: #417D6B;
        }
    */
    .table thead tr th {
        font-size: 14px;
        font-weight: 600;
        white-space: nowrap;
    }
    .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
        white-space: nowrap;
    }
    .clr-green {
        color: #417d6b !important;
    }
    #package {
        text-transform: uppercase;
        transition: all .9s ease 0s;
    }
    .sea-green-bg-products1 {
        background: #fff;
        padding: 10px 0px 116px;
        position: relative;
    }
    .GREY{
        background-color: #EEE !important;
    }
    .text-center{
        text-align: center;
    }
    .font-20{
        font-size: 20px;
    }
    .padding-9 {
        padding: 0px 11px 0px !important;
        margin-bottom: 20px;
    }
    .border-top {
        border-top: 1px solid #000;
    }
    .panel-heading {
        color: #333;
        background-color: #f5f5f5;
        border-color: #ddd;
        padding: 15px 16px !important;
    }
    .font-13 {
        font-size: 13px;
    }
    .panel-heading1 {
        color: #333;
        background-color: #ebebeb;
        border-color: #ddd;
        padding: 15px 16px !important;
    }
    .button-moving {
        position: relative;
        left: 0;
        right: 0;
        bottom: -133px;
        margin: 0px auto;
        text-align: center;
    }
    .margin-45 {
        margin: 0 0 58px 0;
    }

    .margin-top-3{
        margin-top: 3px;
    }
    .card {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0,0,0,.125);
        border-radius: .25rem;
    }
    .card-body {
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1.25rem;
    }
    .portlet.light {
        padding: 12px 20px 15px;
        background-color: #f9f9f9 !important;
    }
    .margin-RT{
	margin-right: 20px !important;
	margin-top: 4px !important;

    }
    .clr-white{
        color:#fff;
    }

</style>
<nav class="navbar navbar-default custom-navbar">
    <div class="container-fluid">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
	    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	    </button>

	</div>
	<?php
	$route = Route::getFacadeRoot()->current()->uri();
	?>
	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	    <ul class="nav navbar-nav">
		<li class="{{ $route == 'home' ? 'active':''}}"> 
		    <a href="{{url('/home')}}"> Home
			<span class="arrow"></span>
		    </a>
		</li>


		<li class="<?php
		if (in_array($route, ['customers', 'customer/view/{id}'])) {

		    echo'active';
		}
		?>"> 
		    <a href="{{url('/customers')}}">Customers
			<span class="arrow"></span>
		    </a>
		</li>
		<li class="{{ $route == 'account-request' ? 'active':''}}"> 
		    <a href="{{url('/account-request')}}">Account Requests
			<span class="arrow"></span>
		    </a>
		</li>
		<li class="<?php
		if (in_array($route, ['vadi-admin/view', 'vadi-admin/edit/{id}'])) {

		    echo'active';
		}
		?>"> 
		    <a href="{{url('/vadi-admin/view')}}">VaDi Admin
			<span class="arrow"></span>
		    </a>
		</li>

		<li class="<?php
		if (in_array($route, ['packages', 'package/add','package/edit/{id}'])) {

		    echo'active';
		}
		?>"> 
		    <a href="{{url('/packages')}}"> Plans & Pricing
			<span class="arrow"></span>
		    </a>
		</li>
	    </ul>

	</div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!-- END HEADER MENU -->

<!-- END HEADER -->
<!--<script>
    $(document).ready(function () {
        $('.dropdown-submenu a.test').on("click", function (e) {
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });


</script>-->