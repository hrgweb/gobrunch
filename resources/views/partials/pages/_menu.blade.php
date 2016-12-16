<div class="overlay-content">
	<a href="{{ url('lobby') }}">LOBBY</a>
	<a href="{{ url('office') }}">MYOFFICE</a>
	<a href="{{ url('account') }}">MY ACCOUNT</a>
	<a href="{{ url('about') }}">ABOUT</a>
	<a href="{{ url('contact') }}">CONTACT</a>
	<a href="{{ action('UsersController@logout') }}">SIGN OUT</a>
	{{-- <a href="{{ action('UsersController@logout') }}" 
       onclick="event.preventDefault();
                document.getElementById('form-logout').submit();">
        LOG OUT
    </a>

    {!! Form::open(['action' => 'UsersController@logout', 'id' => 'form-logout']) !!}
    {!! Form::close() !!} --}}
</div>