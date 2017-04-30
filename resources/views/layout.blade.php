<!DOCTYPE html>
<html lang="en">
	<head>
		<title>EarthHUB</title>
		<meta charset="utf-8">
		<link rel="icon" href="/earthhub.png">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel='stylesheet' href='/css/bootstrap-3.3.7-dist/css/bootstrap.min.css'>
		<link rel='stylesheet' href='/css/sticky-footer.css'>
		<link rel='stylesheet' href='/css/supernice.css'>
		<link rel='stylesheet' href='/css/custom.css'>
		<script type="text/javascript" src="/css/bootstrap-3.3.7-dist/jquery.min.js"></script>
		<script type="text/javascript" src="/css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/js/validator.js"></script>
		<script type="text/javascript" src="/js/actions.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="/" style="margin-top: -3px"><span><image src="/earthhub.png" style="height: 35px; width: 35px; margin-top: -5px"></image></span>Earth<b>HUB</b></a>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav">
		        <li><a href="/">Home</a></li>
		        <li><a href="/aboutus">About Us</a></li>
		      </ul>
		    @if(session('status') == 1)
				<ul class="nav navbar-nav navbar-right">
			      <li><a href="logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
			    </ul>
		    @else
			    <ul class="nav navbar-nav navbar-right">
			      <li><a href="/register"><span class="glyphicon glyphicon-user"></span> Register</a></li>
			      <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			    </ul>
		    @endif
		    </div>
		  </div>
		</nav>
		<div class="container" style="margin-top: 70px">
			<div class="row text-center" style="color:white; font-family:Cooper; font-size:30px">
				The beauty and future of Earth is in our hands
			</div>
			<div class="row" style="margin-top: 15px">
				@yield('index')
				@yield('register')
				@yield('search')
				@yield('post')
				@yield('aboutus')
				@yield('category')
				<div class="col-sm-4">
					<div class="panel panel-default rightnav">
					  <div class="panel-body">
					  	<form method="get" action="/search">
					  	{{ csrf_field() }}
						  <div class="input-group">
						    <input type="text" class="form-control" placeholder="Search" name="q">
						    <div class="input-group-btn">
						      <button class="btn btn-default" type="submit" style="height: 34px">
						        <i class="glyphicon glyphicon-search"></i>
						      </button>
						    </div>
						  </div>
						</form><br>
						<b>Categories:</b>
						<div class="list-group" style="margin-top: 5px">
							<a href="/category/Earth" class="list-group-item ">Earth</a>
							<a href="/category/Energy" class="list-group-item">Energy</a>
							<a href="/category/Man-Made Disasters" class="list-group-item">Man-made Disasters</a>
							<a href="/category/Life" class="list-group-item">Life</a>
							<a href="/category/Pollution" class="list-group-item">Pollution</a>
							<a href="/category/Natural Phenomenons" class="list-group-item">Natural Phenomenons</a>
							<a href="/category/Chemicals" class="list-group-item">Chemicals</a>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>

	</body>
	<br>
	<br>
	<br>
	<footer class="footer text-center">
		CAN'T WIN || Contact US
		<a href="https://www.facebook.com"><image src="/fb-art.png" style="height: 35px; width: 35px; margin-top: -5px"></image></a>
	<footer>
</html>
