@include ('errors._events')

<div class="form-group">
	<input type="text" name="eventName" class="form-control" placeholder="Name of the Event" id="eventName" ng-model="inputs.EventName">
</div>

<div class="form-group">
	<textarea rows="4" name="description" class="form-control" placeholder="Description" ng-model="inputs.Description"></textarea>
</div>

<div class="form-inline">
	<div class="form-group">
		<label class="inlinelabel">Right Now</label>
		<label class="switch">
			<input type="checkbox" name="eventReadiness" ng-model="inputs.IDSessionReadiness" ng-click="rightNowClicked()"/>
			<div class="slider round"></div>
		</label>
	</div>
</div>

<div class="form-inline">
	
	<div class="form-group pos-relative">
		{{-- <pre>@{{ inputs | json }}</pre> --}}

		<label class="inlinelabel">Scheduled</label>
		<!-- 
		<div class="datepicker_box" style="display:inline-block;">
			<input type="text" class="form-control" id="datepicker"/>
			<div id="display_cal"></div>
		</div> -->
		<input type="date" id="eventDate" class="datecontrol form-control" ng-value="inputs.DateOfEvent"/>
		<label for="datep"><img class="calender-icon" id="datepickerbtn" src="images/calender.png" /></label>
	</div>
	
	<div class="form-group">
		<input type="hidden" ng-value="readinessDate" id="readinessDate">

		<label class="inlinelabel">Time</label>
		<input type="time" class="datecontrol form-control" id="eventTime" ng-value="inputs.TimeOfEvent"/>
	</div>
</div>

<div class="form-inline">
	<div class="form-group">
		<label class="inlinelabel">Timezone: <span style="margin-left: 1em;">@{{ userTimezone }}</span></label>
		{{-- <select id="timezone" ng-model="inputs.IDTimeZone">
			@foreach ($timezones as $timezone)
				<option value="{{ $timezone->IDTimeZone }}">{{ $timezone->TimeZone }} {{ $timezone->GMT }}</option>
			@endforeach
		</select> --}}
	</div>
</div>

<div class="form-inline">
	<div class="form-group">
		<label class="inlinelabel">Public</label>
		<label class="switch">
			<input type="checkbox" name="eventType" ng-model="inputs.IDSessionType"/>
			<div class="slider round"></div>
		</label>
		<label class="inlinelabel">Private</label>
	</div>
</div>

{{-- Sliders for - Layouts && Places --}}
@include ('partials.events._layouts')
@include ('partials.events._places')
@include ('errors._events-template')