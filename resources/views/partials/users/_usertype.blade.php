<style type="text/css">
	ul#avatars { display: flex; }
	ul#avatars img { cursor: pointer; }
	div#avatarName span { color: #a45a3c; }
</style>

<div id="usertype">
	<div class="form-group" id="avatarName">
		<span data-pic-db="{{ $user->UserPic }}">{{ ($user->UserPic) ? $user->UserPic : '' }}</span>
	</div>
	
	<input type="file" name="chooseAvatar" id="chooseAvatar" value="" style="display: none;">

	<script id="user-type" type="text/x-handlebars-template">
		<ul id="avatars" class="list-inline">
			<li><img src="{{ asset('images/camera.png') }}" class="img-responsive" id="camera" alt="Image" id="UserPic"></li>
			@{{#each this}}
					<li><img src="{{ asset('images') }}/@{{ UserImg }}" data-id="@{{ IDUserImg }}" data-name="@{{ UserImg }}" class="img-responsive" alt="Image"></li>
				{{-- <li><span>@{{IDUserImg}}</span> => <b>@{{ UserImg }}</b></li> --}}
			@{{/each}}
		</ul>
	</script>
</div>