<style>
	#modal-invite .modal-dialog { width: 500px; }
	#modal-invite .modal-body { padding: 15px; }
	#modal-invite textarea { text-align: justify; }
</style>
<div class="modal fade" id="modal-invite">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Invite User</h4>
			</div>

			{{-- <pre>@{{ eventList | json }}</pre> --}}

			<div class="modal-body">
				<div class="form-group">
					<select id="input" class="form-control" ng-model="invite.IDSession" ng-mouseenter="getEventList()" ng-change="chooseEvent(invite)">
						<option value="@{{ event.IDSession }}" ng-repeat="event in eventList">@{{ event.SessionName }}</option>
					</select>
				</div>

				{{-- <pre>@{{ inviteObj | json }}</pre> --}}

				<div class="form-group">
					<pre><textarea class="form-control" rows="6">Hi @{{ inviteObj.UserThatInvitedName }},&#13;&#13;I would like to invite you to participate on &#13;my Event "@{{ inviteObj.concat.SessionName }}" that will take place on &#13;"@{{ inviteObj.concat.DateOfSession }} @{{ inviteObj.concat.GMT }}".
					</textarea></pre>
				</div>
			</div>  
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" ng-click="inviteUser(inviteObj)">Invite</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>