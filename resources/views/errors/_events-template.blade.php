<style type="text/css">
	ul#list-error {
		background: #D1515E;
		color: #fff;
		padding-left: 1em;
		border-radius: 4px;
	}
</style>

<ul class="alert alert-danger" id="list-error" ng-show="isError">
	<li ng-repeat="error in errors track by $index" style="margin-left: 2em">@{{ error[0] }}</li>
</ul>