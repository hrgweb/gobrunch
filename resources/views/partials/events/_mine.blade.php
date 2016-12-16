<div class="my-events">
	<div class="container">

		{{-- IDEvent --}}
		<input type="hidden" ng-model="event.IDEvent" value="@{{ event.IDEvent }}">
		{{-- IDSession --}}
		<input type="hidden" ng-model="event.IDSession" value="@{{ event.IDSession }}">

		<!-- Evets Title -->
		<div class="row title-center">
			<h1>My Events</h1>
		</div>
		<!-- Evets Title End -->

		<!-- My Event List Start -->
		<div class="row event-list" ng-repeat="event in userEvents">
			{{-- <pre>@{{ event.TimeOfEvent | json }}</pre> --}}

			<div class="col-md-5">
				<div class="event-header">
					<h2>@{{ event.EventName }}</h2>
					<p>@{{ event.Description }}</p>
				</div>
			</div>
			
			<div class="col-md-1">
				<img ng-src="{{ asset('images') }}/@{{ event.UserPic }}" class="img-circle" alt="" />
			</div>

			<div class="col-md-6">
				<div class="row">
					<div class="col-md-4">
						<div class="date-month">
							<p><b>@{{ event.FullDateOfEvent }}</b></p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="time-gmt">
							<p style="word-break: break-all;">
								<b>@{{ event.WeekDay }} @ <br> @{{ event.FullTimeOfEvent }}</b>
							</p>
						</div>
					</div>
					
					<div class="col-md-1">
						<a href="#modal-delete" value="@{{ event.IDEvent }}" data-toggle="modal" id="mineDelete" ng-click="deleteEventModal(event)"><span class="glyphicon btn-delete glyphicon-trash"></span></a>
					</div>
					
					<div class="col-md-3">
						<a href='#' data-toggle="modal" data-target="#myModal" class="btn btn-blue btn-justify" id="mineEdit" value="@{{ event.IDEvent }}" ng-click="editEvent(event)">Edit</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
