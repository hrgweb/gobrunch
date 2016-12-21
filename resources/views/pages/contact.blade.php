@extends('layouts.app')

@section ('title')
	<title>Brunch - Contact Us</title>
@endsection

@section ('content')
	<!-- Header start -->
    <header class="contact-header">
    	
		@include ('partials/pages._menu')
		
		<div class="container">
			<div class="row">
				<div class="header-tagline">
					<h1>Contact</h1>
				</div>
			</div>
		</div>
    </header>
	<!-- Header start -->
	
	<!-- Contact start-->
	<div class="contact-page">
		<div class="container">
			<div class="col-md-12">
				<h1>Need help using Brunch?</h1>
				<p>support@email.com</p>
			</div>
			
			<div class="col-md-12">
				<h1>Suggestions? Reach THE CEO DIRECTLY</h1>
				<p>email@email.com</p>
			</div>
		</div>
	</div>
	<!-- Contact End-->
@endsection

@section ('footer')
	<script>
		$('body').addClass('contact-bgcolor');
	</script>
@endsection
