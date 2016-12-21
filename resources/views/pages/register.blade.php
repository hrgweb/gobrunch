@extends('layouts.app')

@section ('title')
	<title>Brunch - Register</title>
@endsection

@section ('top')
	{{-- @include ('errors._list') --}}
@endsection

@section ('content')
	<!-- Header start -->
    <header class="account-header">
		@include ('partials/pages._menu')
    </header>
	<!-- Header start -->
	
	<!-- Account Page start -->
	<div class="accoutn-page no-margin">
		<div class="container">
			<div class="row">
				<h2 class="register-title">You Are One Step Closer to Experience Your Brunch</h2>
				
				<div class="col-md-12">
					{!! Form::open(['class' => 'change-password register-form', 'role' => 'form', 'enctype' => 'multipart/form-data']) !!}

						<div class="step1" style="display: block;">
							<div class="form-group">
								<input type="text" name="Name" class="form-control" placeholder="Name" />
							</div>
							
							<div class="form-group">
								<input type="text" name="Title" class="form-control" placeholder="Title" />
							</div>
							
							<div class="form-group">
								<input type="text" name="Company" class="form-control" placeholder="Company" />
							</div>
							
							<div class="form-group">
								{{-- <input type="text" name="Country" class="form-control" placeholder="Country" /> --}}
								<select name="Country" class="form-control">
									<option value="Country">Country</option>
	
									@foreach ($countries as $country)
										<option value="{{ ucwords($country->Country) }}">{{ ucwords($country->Country) }}</option>
									@endforeach
								</select>
							</div>
							
							<div class="form-group">
								<input type="button" class="btn btn-update next-step" value="Next" />
							</div>						
						</div>
						
						<div class="step2" style="display: none;">
							<div class="form-group">
								<a href="#" id="goback"><b>GO BACK</b></a>
							</div>

							{{-- error list --}}
							@include ('errors._list')

							<div class="form-group">
								<input type="text" name="email" class="form-control" placeholder="Email" />
							</div>
							
							<div class="form-group">
								<input type="password" name="password" class="form-control" placeholder="Password" />
							</div>
							
							<div class="form-inline">
								<div class="form-group">
									<label class="inlinelabel">Male</label>
									<label class="switch">
										<input type="checkbox" name="Gender" value="Male" />
										<div class="slider round"></div>
									</label>
									<label class="inlinelabel">Female</label>
								</div>
							</div>
							
							{{-- user type --}}
							@include ('partials.users._usertype')
							
							<div class="form-group">
								<input type="submit" class="btn btn-update" value="Login" />
							</div>						
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
	<script src="{{ asset('js/vendor/select2.min.js') }}"></script>
	<script src="{{ asset('js/register.js') }}"></script>
	{{-- <script type="text/javascript">
		var data = [{ id: 0, text: 'enhancement' }, { id: 1, text: 'bug' }, { id: 2, text: 'duplicate' }, { id: 3, text: 'invalid' }, { id: 4, text: 'wontfix' }];

		$('b[role="presentation"]').hide();

		$("select").select2({
		  data: data
		})
	</script> --}}
@endsection