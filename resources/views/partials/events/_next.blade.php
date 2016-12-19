<style type="text/css">
	.event-list img {
		width: 65px;
		height: 65px;
	}
	.date-month,
	.time-gmt { 
		display: flex;
		align-items: center;
		height: 3.5em;
		font-size: 0.9em;
	}
</style>

<div class="row event-list" ng-repeat="event in allEvents">
	{{-- <pre>@{{ event }} | @{{ event.DateOfEvent | json }}</pre> --}}
	<pre>@{{ dislayGmtDateTime(event.DateOfEvent, event.TimeOfEvent) | date:'longDate' }}</pre>

	<div class="col-md-5">
		<div class="event-header">
			<h2>@{{ event.EventName }}</h2>
			<p>@{{ event.Description }}</p>
		</div>
	</div>
	
	<div class="col-md-1">
		<img ng-src="{{ asset('images') }}/@{{ event.UserPic }}" class="img-circle" alt="" />
	</div>
	
	<div class="col-md-2">
		<div class="date-month">
			<p><b>@{{ dislayGmtDateTime(event.DateOfEvent, event.TimeOfEvent) | date:'longDate' }}</b></p>
		</div>
	</div>
	
	<div class="col-md-2">
		<div class="time-gmt">
			<p>
				<b>
					@{{ dislayGmtDateTime(event.DateOfEvent, event.TimeOfEvent) | date:'EEEE' }}@ <br>
					@{{ dislayGmtDateTime(event.DateOfEvent, event.TimeOfEvent) | date:'mediumTime' }}
				</b>
			</p>
		</div>
	</div>
	
	{{-- <pre>@{{ event.IDUser }} @{{ userID }}</pre> --}}

	<div class="col-md-2">
		<a 
			href="{{ url('event')}}/@{{ event.IDEvent }}" 
			ng-class="{'nxt-btn-enter': event.IDUser==userID}" 
			id="eventJoin" 
			data-session-id="@{{ event.IDSession }}" 
			class="btn btn-blue btn-justify"
		>
			@{{ event.IDUser == userID ? 'Enter' : 'Join' }}
		</a>
	</div>
</div>

