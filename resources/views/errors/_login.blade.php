<style type="text/css">
	 ul#error-list {
		background: #D1515E;
		color: #fff;
		padding-left: 3em;
		border-radius: 4px;
	} 
</style>

<ul class="alert alert-danger" id="error-list" ng-show="isError">
	<li>@{{ errorMessage }}</li>
</ul>	
