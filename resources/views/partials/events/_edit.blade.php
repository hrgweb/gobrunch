{{-- Popup start --}}
<!-- Button trigger modal -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				{!! Form::open(['action' => 'EventsController@store', 'role' => 'form', 'class' => 'popupform', 'id' => 'popup']) !!}
					@include ('partials.events._input')
				{!! Form::close() !!}
				
				<div class="form-group text-center">
					<input type="submit" value="Create" class="btn btn-blue" id="btnPopup" />
				</div>
				
			</div>
			<div class="modal-footer">
			
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal