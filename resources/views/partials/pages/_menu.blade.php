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
				<a href="{{ url('/') }}"><img src="images/logo.png" /></a>
			</div>
			
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			
			<div class="overlay-content">
				@if (Auth::check())
					<a href="{{ url('lobby') }}">LOBBY</a>
					<a href="{{ url('office') }}">MYOFFICE</a>
					<a href="{{ url('account') }}">MY ACCOUNT</a>
					<a href="{{ action('UsersController@logout') }}">SIGN OUT</a>
				@else
					<a href="{{ url('about') }}">ABOUT</a>
					<a href="{{ url('contact') }}">CONTACT</a>
				@endif
			</div>
		</div>
	</div>
</nav>