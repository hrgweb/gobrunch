<style>
	#modal-invite-notification .modal-dialog { margin-top: 12em; }
</style>
<div class="modal fade" id="modal-invite-notification">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Invitation Form</h4>
			</div>
			<div class="modal-body">
				<p>
					<b>@{{ inviteDetails.UserWhoInviteName }}</b>,  invited you to join his event "@{{ inviteDetails.concat.SessionName }}" that would take place on "@{{ inviteDetails.concat.DateOfSession }} @{{ inviteDetails.concat.GMT }}". Do you want to accept his invitation?
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" ng-click="">Accept Invitation</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Decline Invitation</button>
			</div>
		</div>
	</div>
</div>