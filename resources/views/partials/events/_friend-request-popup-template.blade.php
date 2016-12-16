<style>
	#modal-friend-request .modal-header { background: #337AB7; }
</style>

<div class="modal fade" id="modal-friend-request" {{-- ng-click="cancelRequest() --}}>
	<div class="modal-dialog">

		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Friend Request</h4>
			</div>

			{{-- <pre>@{{ friendRequest | json }}</pre> --}}

			<div class="request-wrapper">
				<div class="list-of-request" ng-repeat="request in friendRequest">
					<div class="modal-body">
						<p style="margin: 2em 0;"><b>@{{ request.Name }}</b> wants to be your friend?</p>

						<div class="user-avatar pull-left col-xs-4 col-sm-4 col-md-4 col-lg-4" style="padding: 0;">
							<img ng-src="{{ asset('images') }}/@{{ request.UserPic }}" class="img-responsive img-circle" alt="Image">
						</div>

						<div class="user-detail pull-right col-xs-8 col-sm-8 col-md-8 col-lg-8">
							<hgroup>
								<h4>@{{ request.Name }}</h4>
								<h5>@{{ request.Company }}</h5>
								<h5>@{{ request.Title }}</h5>
								<h5>@{{ request.Gender }}</h5>
							</hgroup>
						</div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-primary" id="eventAccept" ng-click="acceptRequest(request)">Accept</button>
						<button type="button" class="btn btn-danger" id="eventDecline" ng-click="declineRequest(request)">Decline</button>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>