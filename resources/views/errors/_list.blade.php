<style type="text/css">
	ul#errors {
		background: #D1515E;
		color: #fff;
		position: absolute;
		top: 12em;
		padding-left: 15em;
		padding-right: 2em;
	}
</style>

<ul class="alert alert-warning hidden" id="errors">
	<script id="list-errors" type="text/x-handlebars-template">
		@{{#if Name}}
			<li>@{{ Name }}</li>
		@{{/if}}

		@{{#if Title}}
			<li>@{{ Title }}</li>
		@{{/if}}

		@{{#if Company}}
			<li>@{{ Company }}</li>
		@{{/if}}

		@{{#if Country}}
			<li>@{{ Country }}</li>
		@{{/if}}

		@{{#if email}}
			<li>@{{ email }}</li>
		@{{/if}}

		@{{#if password}}
			<li>@{{ password }}</li>
		@{{/if}}
	</script>
</ul>	
