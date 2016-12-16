<style type="text/css">
	ul#errors {
		display: block !important;
		background: #D1515E;
		color: #fff;
		padding-left: 3em;
		border-radius: 4px;
	}
</style>

@if (count($errors))
	<ul class="alert alert-warning hidden" id="errors">
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>	
@endif
