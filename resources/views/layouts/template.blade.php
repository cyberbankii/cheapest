<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	@yield('meta')
	
	<title>Cheapest - @yield('title')</title>

	<link rel="stylesheet" href="/bootstrap/css/reset.css">
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/bootstrap/css/font-awesome.min.css">
	<link rel="stylesheet" href="/customs/css/template.css">
	
	@yield('css')

</head>
<body>
	<nav class="navbar navbar-custom" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/"><strong>Cheapest</strong></a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<form class="navbar-form navbar-left" role="search" action="/">
					<div class="form-group">
						<div class="input-group">
					      <input type="text" name="keyword" class="form-control" placeholder="Search">
					      <span class="input-group-btn">
					        <button class="btn btn-default" type="submit">Search</button>
					      </span>
    					</div>
					</div>
					
				</form>
				<ul class="nav navbar-nav navbar-right">
					@if(Auth::guest())
						<li><a href="{{ url('/login') }}"><strong>Login</strong></a></li>
                        <li><a href="{{ url('/register') }}"><strong>Register</strong></a></li>
					@else
						<li>
	                        <a data-toggle="modal" data-target="#inputForm">
	                            <i class="fa fa-plus-square fa-2x"></i>
	                        </a>
	                    </li>
	                    <li>
	                        <a href="/me/{{ Auth::user()->id }}">
	                            <img src="thumbnails/{{ Auth::user()->thumbnail }}" class="img-profile">{{ Auth::user()->name }}</img>
	                        </a>
	                    </li>
						<li>
							<a href="/logout">
								 <i class="fa fa-sign-out fa-2x"></i>
							</a>	
						</li>
					@endif
					
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>

	@extends('modal.create')
	
	@yield('content')

	<script src="/bootstrap/js/jquery-1.12.3.min.js"></script>
	<script src="/bootstrap/js/bootstrap.min.js"></script>
	
	@yield('javascript')
</body>
</html>