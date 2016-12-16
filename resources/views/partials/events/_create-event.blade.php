<style type="text/css">
	select#timezone {
		background: #005d68;
	    color: #fff;
	    padding: 0.3em 0.5em;
	    border-radius: 0.3em;
	    border: 2px solid transparent;
	}
	select#timezone:hover,
	select#timezone:focus {
		cursor: pointer;
		border: 2px solid #04525B;
	}
	select#timezone option {
		background: #fff;
		color: #005d68;
	}
	select#timezone option:hover,
	select#timezone option:focus { 
		background: #DCDBDB; 
	}
</style>

<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				{!! Form::open(['action' => 'EventsController@store', 'role' => 'form', 'class' => 'popupform', 'id' => 'popup', 'novalidate']) !!}
					
					{{-- <pre>@{{ inputs | json }}</pre> --}}

					@include ('partials.events._input')
				{!! Form::close() !!}
				
				<div class="form-group text-center">
					<input type="submit" ng-value="eventButtonText" class="btn btn-blue" id="btnPopup" ng-click="createAndUpdateToggleAction(inputs)"/>
				</div>
			</div>
			<div class="modal-footer">
			
			</div>
		</div>
	</div>
</div>
