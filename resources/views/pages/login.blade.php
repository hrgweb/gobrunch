@extends('layouts.app')

@section ('title')
	<title>Brunch - Login</title>
@endsection

@section ('content')
	<!-- Header start -->
    <header class="account-header">
		<!-- Navigation start -->
		<nav class="navbar navbar-default">
			<div class="container">
				<!-- Brand Logo start -->
				<a href="{{ url('/') }}" class="navbar-brand"><img src="images/logo.png"></a>
				<!-- Brand Logo End -->
				
				
				<div class="navbar-header" onclick="openNav()">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>
				</div>
				
				<div id="myNav" class="overlay">
					<div class="menu-logo">
						<a href="index.html"><img src="images/logo.png" /></a>
					</div>
					
					<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					
					@include ('partials/pages._menu')
				</div>
				
			</div>
		</nav>
		<!-- Navigation End -->
    </header>
	<!-- Header start -->
	
	<!-- Account Page start -->
	<div class="accoutn-page" ng-controller="UserController">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<form class="change-password max-width-center" ng-submit="signIn()">
					{{-- {!! Form::open(['action' => 'UsersController@signin', 'class' => 'change-password max-width-center', 'role' => 'form']) !!} --}}

						{{-- @include ('errors._errors') --}}
						@include ('errors._login')
						
						<div class="form-group">
							<input type="text" name="email" class="form-control" placeholder="Email" ng-model="user.email">
						</div>
						
						<div class="form-group">
							<input type="password" name="password" class="form-control" placeholder="Password" ng-model="user.password">
						</div>
						
						<div class="row">
							<div class="col-md-6">
								<a href="{{ url('contact') }}" class="login-link">Need Help? Contact us</a>
							</div>
							
							<div class="col-md-6 text-right">
								<a href="#" class="login-link">Forgot your password?</a>
							</div>
						</div>
						
						
						<div class="form-group">
							<input type="submit" class="btn btn-update" value="Login"/>
						</div>	
					
					{{-- {!! Form::close() !!} --}}
					</form>
				</div>
				
			</div>
		</div>
	</div>
	<!-- Account Page End -->
@endsection

@section ('footer')
	<script src="{{ asset('js/controllers/UserController.js') }}"></script>
@endsection
