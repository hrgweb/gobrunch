<style type="text/css">
	ul#errors {
		background: #D1515E;
		color: #fff;
		padding-left: 3em;
	}
</style>

<ul class="alert alert-warning hidden" id="errors">
	<script id="list-errors" type="text/x-handlebars-template">
		@{{#if SessionName}}
			<li>@{{ SessionName }}</li>
		@{{/if}}

		@{{#if Description}}
			<li>@{{ Description }}</li>
		@{{/if}}

		@{{#if DateOfEvent}}
			<li>@{{ DateOfEvent }}</li>
		@{{/if}}

		@{{#if TimeOfEvent}}
			<li>@{{ TimeOfEvent }}</li>
		@{{/if}}
	</script>
</ul>	
