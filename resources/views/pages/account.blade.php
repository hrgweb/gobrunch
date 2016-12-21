@extends('layouts.app')

@section ('title')
	<title>Brunch - My Account</title>

	<style type="text/css">	
		#message {
			background: #7cbb33;
			color: #fff;
			position: absolute;
			top: 75px;
			left: 0;
			right: 0;
			z-index: 111;
		}
	</style>
@endsection

@section ('top')
	@if (session()->has('message'))
		<div class="alert alert-success text-center" id="message">
			<strong>{{ session('message') }}</strong>
		</div>	
	@endif
@endsection

@section ('content')
    <header class="account-header">
		@include ('partials/pages._menu')
    </header>
    
	<!-- Account Page start -->
	<div class="accoutn-page">
		<div class="container">
			<div class="row">
				<div class="col-md-6 max-width-2">
					<h1>Change Your Password</h1>
					{!! Form::open(['action' => 'UsersController@changePassword', 'method' => 'PATCH', 'role' => 'form', 'class' => 'change-password']) !!}

						@include ('errors._errors')

						<div class="form-group">
							<input type="password" name="current_password" class="form-control" placeholder="Your Current Password" />
						</div>
						
						<div class="form-group">
							<input type="password" name="password" class="form-control" placeholder="Your New Password" />
						</div>
						
						<div class="form-group">
							<input type="password" name="password_confirmation" class="form-control" placeholder="Retype Your New Password" />
						</div>
						
						<div class="form-group">
							<input type="submit" id="changepass" class="btn btn-update" value="Update" />
						</div>						
					{!! Form::close() !!}
				</div>
				
				<div class="col-md-6 max-width-2 pull-right">
					<h1>Update Your General Info</h1>
					<form role="form" class="update-profile">

					{!! Form::model($user, ['action' => 'UsersController@update', 'role' => 'form', 'class' => 'update-profile']) !!}
						<div class="form-group">
							{!! Form::text('Name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
						</div>
						
						<div class="form-group">
							{!! Form::text('Title', null, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
						</div>
						
						<div class="form-group">
							{!! Form::text('Company', null, ['class' => 'form-control', 'placeholder' => 'Company']) !!}
						</div>
						
						<div class="form-group">
							{{-- {!! Form::text('Country', $user->country->Country, ['class' => 'form-control', 'placeholder' => 'Country']) !!} --}}

							<label data-country="{{ $user->country->Country }}" class="hidden"></label>
							<select name="Country" class="form-control" data-country-id="{{ $user->IDCountry }}">
								<option value="{{ $user->country->Country }}">{{ $user->country->Country }}</option>

								@foreach ($countries as $country)
									<option value="{{ ucwords($country->Country) }}">{{ ucwords($country->Country) }}</option>
								@endforeach
							</select>
						</div>
						
						<div class="form-inline">
							<label id="gender" data-gender="{{ $user->Gender }}" hidden></label>
							<div class="form-group">
								<label class="inlinelabel">Male</label>
								<label class="switch">
									<input type="checkbox" name="Gender" />
									<div class="slider round"></div>
								</label>
								<label class="inlinelabel">Female</label>
							</div>
						</div>
						

						{{-- user type --}}
						@include ('partials.users._usertype')

						<div class="form-group">
							<input type="submit" id="update" class="btn btn-update" value="Update" />
						</div>						
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
	<!-- Account Page End -->
@endsection

@section ('footer')
	<script src="{{ asset('js/vendor/handlebars.min.js') }}"></script>
	<script src="{{ asset('js/register.js') }}"></script>
	<script type="text/javascript">
		(function() {
		'use strict';

		// slideUp the message 
		$('div#message').delay(4000).slideUp();

		// gender slider switch
		var gender = $('label#gender').data('gender').trim();
		if (gender === 'Female' || gender === 'female') {
			$('input[type=Checkbox]').trigger('click');
		}

		})();
	</script>
@endsection
