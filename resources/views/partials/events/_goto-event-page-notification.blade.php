<style>
	#modal-goto-event .modal-dialog { margin-top: 12em; z-index: 9999; }
	#modal-goto-event .modal-content p { margin-top: 1em; }
</style>
<div class="modal fade" id="modal-goto-event">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Redirect To Event Page</h4>
			</div>
			<div class="modal-body">
				<input type="hidden" id="sessionIDForJoined">

				<p>Would you like to go to the event now?</p>
			</div>
			<div class="modal-footer">
				<a href="{{ url('event') }}/@{{ eventID }}" role="button" class="btn btn-primary" ng-click="redirectToEventPage()">Yes</a>
				<a href="#" role="button" class="btn btn-danger" data-dismiss="modal">No</a>
			</div>
		</div>
	</div>
</div>