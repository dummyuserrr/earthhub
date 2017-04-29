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
		<script type="text/javascript" src="/js/actions.js"></script>
		<script type="text/javascript" src="/js/validator.js"></script>
		<script type="text/javascript" src="/js/validator.min.js"></script>
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
		      <a class="navbar-brand" href="/" style="margin-top: -3px"><span><image src="/earthhub.png" style="height: 35px; width: 35px; margin-top: -5px"></image></span>EarthHUB</a>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav">
		        <li><a href="/">Home</a></li>
		        <li><a href="/news">News</a></li>
		        <li><a href="/aboutus">About Us</a></li>
		      </ul>
		    <ul class="nav navbar-nav navbar-right">
		      <li><a href="/register"><span class="glyphicon glyphicon-user"></span> Register</a></li>
		      <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		    </ul>
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
				@yield('login')
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
