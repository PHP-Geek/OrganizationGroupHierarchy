
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

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	    <ul class="nav navbar-nav">
		<li class=""> 
		    <a href="{{url('/home')}}"> Home
			<span class="arrow"></span>
		    </a>
		</li>
		<li class="dropdown">
		    <a class=" dropdown-toggle" type="button" data-toggle="dropdown">Session
			<span class="caret"></span></a>
		    <ul class="dropdown-menu">
			<li><a href="{{url('/reviewer/monitor-session')}}">Monitor Live Session</a></li>
			<li><a href="{{url('/reviewer/show-session')}}">Manage Session</a></li>
			<li><a href="{{url('/reviewer/set-device-parameter')}}">Set Device Parameters</a></li>
		    </ul>
		</li>
		<li class="dropdown">
		    <a class="dropdown-toggle font-red-sunglo" type="button" data-toggle="dropdown">Reporting 
			<span class="caret"></span></a>
		    <ul class="dropdown-menu">
			<li class="dropdown-submenu">
			    <a class="test" href="#">Manage Report</a>
			    <ul class="dropdown-menu">
				<li><a href="#">Word Clouds</a></li>
				<li><a href="#">Bar Graphs</a></li>
				<li><a href="#">VADI Path Diagrams</a></li>
				<li><a href="#">Customized Reports</a></li>
				<li><a href="#">Interact Report Definition</a></li>
				<li><a href="#">Q&A Report</a></li>
			    </ul>
			</li>
			<li class="submenu">
			    <a class="test" href="#">Re-Run Reports</a>
			</li>
			<li class="dropdown-submenu">
			    <a class="test" href="#">Tool Bar</a>
			    <ul class="dropdown-menu">
				<li><a href="#">Favorite Report </a></li>
				<li><a href="#">Single Page Report</a></li>
				<li><a href="#">Reports by Demographics</a></li>
				<li><a href="#">Analytics</a></li>

			    </ul>
			</li>
		    </ul>
		</li>

	    </ul>

	</div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
