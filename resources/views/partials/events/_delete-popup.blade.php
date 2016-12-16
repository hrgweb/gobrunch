<style type="text/css">
	#modal-delete .modal-dialog,
	#modal-friend-request .modal-dialog,
	#modal-send-notification .modal-dialog,
	#modal-invite-notification .modal-dialog,
	#modal-goto-event .modal-dialog {
	    width: 450px;
	    margin: 3em auto;
	}
	/*#modal-delete .modal-body,*/
	#modal-friend-request .modal-body,
	#modal-send-notification .modal-body,
	#modal-goto-event .modal-body {
	}
	#modal-delete .modal-content {
		margin-top: 15em;
	    height: auto;
    	overflow: hidden;
    }
	#modal-delete .modal-header,
	#modal-friend-request .modal-header,
	#modal-invite-notification .modal-header,
	#modal-goto-event .modal-header {
		background: #de5555;
    	color: #fff;
	    padding: 15px 30px;
	}
	#modal-delete .modal-body,
	#modal-friend-request .modal-body 
	#modal-invite-notification .modal-body,
	#modal-goto-event .modal-body { padding: 0 30px; }

	#modal-delete .modal-body p,
	#modal-friend-request .modal-body p 
	#modal-invite-notification .modal-body p,
	#modal-goto-event .modal-body p { font-size: 1.1em; }

	#modal-delete .modal-body p { padding-top: 1em; }

	#modal-delete .modal-footer,
	#modal-friend-request .modal-footer,
	#modal-invite-notification .modal-footer,
	#modal-goto-event .modal-footer {
	    background: #f5eded;
	    margin-top: 3em;
	}

</style>

<div class="modal fade" id="modal-delete">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Remove Created Event</h4>
			</div>
			<div class="modal-body">
				<p>Are you sure you want to remove "<em>@{{ inputs.SessionName }}</em>" event?</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" id="eventDeleted" ng-click="deleteEvent()">Delete</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>