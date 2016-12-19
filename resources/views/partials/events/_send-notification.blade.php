<style>
	#modal-send-notification .user-avatar {
		display: flex;
		align-items: center;
		justify-content: center;
	}
	#modal-send-notification .modal-header { background: #77b733; }
	#modal-send-notification .user-avatar > img {
		width: 60px;
		height: 60px;
		margin-right: 1em;
		margin-left: -2.5em;
	}
	#modal-send-notification .user-avatar > p {
		margin: 1em 0;
	}
	#modal-send-notification .user-avatar button {
	    position: relative;
	    right: -2.5em;
	}
	.notification-wrapper { overflow-y: scroll; }
	.list-of-notification .modal-body { padding: 1em 1.5em .5em; }
</style>

<div class="modal fade" id="modal-send-notification" ng-click="">
	<div class="modal-dialog">

		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" style="color: #fff;">Notification</h4>
			</div>

			<pre>@{{ notifications | json }}</pre>

			<div class="notification-wrapper">
				<div class="list-of-notification" ng-repeat="notify in notifications">
					<div class="modal-body">
						<div class="user-avatar">
							<img ng-src="{{ asset('images') }}/@{{ notify.UserPic }}" class="img-responsive img-circle pull-left" alt="Image">
							<p class="pull-left"><b>@{{ notify.Name }}</b><br> accepted your friend request?</p>
							<button 
								type="button" 
								class="close" 
								data-dismiss="alert" 
								aria-hidden="true"
								ng-click="removeSendNotification(notify)"
							>
								&times;
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>