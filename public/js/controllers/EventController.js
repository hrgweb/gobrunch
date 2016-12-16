app.controller('EventController', ['$scope', '$http', 'timeZone', function($scope, $http, timeZone){

	$scope.errors = {};
	$scope.isError = false;
	$scope.userEvents = {};
	$scope.isEdit = false;
	$scope.eventButtonText = 'Create Event';
	$scope.roomLayoutID = 0;
	$scope.noOfSeats = 0;
	$scope.isNoOfSeatsMax = false;
	$scope.eventID = 0;
	$scope.inputs = {
		IDSessionReadiness: false,
		IDSessionType: false,
		IDRoomLayout: 0,
		IDPlace: 0,
		EventName: '',
		Description: '',
	};

	$scope.displayEventHappen = function() {
		timeZone.displayEventDate();
	};

	$scope.dislayGmtDateTime = function(date, time) {
		var displayTime = timeZone.eventDateTimeHandler(date, time);

		return Date.parse(displayTime);
	};

	var getMyEventList = function() {
		$http.get('/event/getMyEventList').then(function(response) {
			$scope.userEvents = response.data.events;

			// console.log($scope.userEvents);
		});
	}; getMyEventList();

	$scope.getLayoutID = function($event) {
		var layoutID = $event.currentTarget.attributes[1].value,
			numberSeat = Math.abs($event.currentTarget.attributes[2].value);

		$scope.inputs.IDRoomLayout = layoutID;

		// check if room is > than the room layout in db
		if ($scope.isEdit === true && numberSeat > $scope.noOfSeats) {
			$scope.isNoOfSeatsMax = true;
			alert('This room does not support the number of attendees registered for your event. Try a bigger room');
		} else {
			$scope.isNoOfSeatsMax = false;
			$scope.inputs.IDRoomLayout = layoutID;
		}
	};

	$scope.getPlaceID = function($event) {
		$scope.inputs.IDPlace = $event.currentTarget.attributes[1].value;
	};

	$scope.createYourEventModal = function() {
		createAndUpdateToggle(false, 'Create Event');

		$scope.inputs = {
			IDSessionReadiness: false,
			IDSessionType: false,
			IDRoomLayout: 0,
			IDPlace: 0,
			SessionName: '',
			Description: '',
			DateOfEvent: timeZone.currentDate(),
			TimeOfEvent: timeZone.currentTime()
		};

		// date/time toggle 
		readinessToggle($scope.inputs.IDSessionReadiness);
	};

	var readinessToggle = function(status) {
		if (status === true) {
			$('input#datep, input#eventDate').attr('disabled', 'disabled');
			$('input#timep, input#eventTime').attr('disabled', 'disabled');
		} else {
			$('input#datep, input#eventDate').removeAttr('disabled');
			$('input#timep, input#eventTime').removeAttr('disabled');
		}
	};

	$scope.rightNowClicked = function() {
		readinessToggle($scope.inputs.IDSessionReadiness);
	};

	var createAndUpdateToggle = function(isEdit, buttonText) {
		$scope.isEdit = isEdit;
		$scope.eventButtonText = buttonText;
	};

	$scope.createAndUpdateToggleAction = function(inputs) {
		if ($scope.isEdit === false) {
			$scope.createEvent(inputs);
		} else {
			$scope.updateEvent(inputs);
		}
	};

	var getUserTimezone = function() {
		$http
			.get('event/getUserTimezone')
			.then(function(response) {
				$scope.userTimezone = response.data.timezone;
				$scope.readinessDate = response.data.readiness;
			});
	}; getUserTimezone();

	var removeBorderForLayoutAndPlace = function() {
		$('div#owl-demo').find('img').removeAttr('style');
		$('div#owl-content').find('div.slide-title').removeAttr('style');
	};

	$scope.createEvent = function(inputs) {
		if (inputs.IDRoomLayout === 0 || inputs.IDPlace === 0) {
			alert('Either you haven`t select room layout or place');
		} else {
			var time = $('input#eventTime').val(),
				date = $('input#eventDate').val(),
				readiness = $('input#readinessDate').val();

			// DateOfEvent - value
			inputs.DateTimeOfEvent = (inputs.IDSessionReadiness === false) ? timeZone.eventTime(date, time) : readiness;

			$http({
				method: 'POST',
				url: '/event/store',
				data: inputs
			})
			.then(function(response) {
				var data = response.data;

				if (data.success) {
					$scope.isError = false;
					$scope.eventID = data.eventID;

					$('input#sessionIDForJoined').val(data.sessionID); // store the value of session id

					$('div#myModal').modal('hide');
					$('div#modal-goto-event').modal('show');

					// add the result to the events
					// $scope.userEvents.push(data.event);
					getMyEventList();

					// update next events
					getAllEventList();


					// enable date and time 
					$('input#eventDate').removeAttr('disabled');
					$('input#eventTime').removeAttr('disabled');

					// remove border for layout and place
					removeBorderForLayoutAndPlace();
				}
			}, function(error) {
				$scope.errors = error.data;
				$scope.isError = true;
			});
		}
	};

	$scope.redirectToEventPage = function() {
		var sessionID = $scope.sessionID;

		$http
			.get('/event/isUserJoined/' + sessionID)
			.then(function(response) {
				console.log(response);
			}, function(error) {
				console.log(error);
			});
	};

	$scope.editEvent = function(event) {
		$scope.isEdit = true;
		$scope.noOfSeats = Math.abs(event.NumberOfSeats);
		createAndUpdateToggle(true, 'Update Event');

		// 1. Right now 2.Scheduled - eventReadiness
		// 1. Public 2.Private - eventType

		$scope.inputs = {
			IDEvent: event.IDEvent,
			IDSession: event.IDSession,
			IDRoomLayout: event.IDRoomLayout,
			IDPlace: event.IDPlace,
			EventName: event.EventName,
			Description: event.Description,
			IDSessionReadiness: (event.IDSessionReadiness == 2) ? false : true,
			IDSessionType: (event.IDSessionType == 1) ? false : true,
			DateOfEvent: event.DateOfEvent,
			TimeOfEvent: event.TimeOfEvent
		};

		// date/time toggle 
		readinessToggle($scope.inputs.IDSessionReadiness);

		// console.log($scope.inputs);
	};

	$scope.updateEvent = function(inputs) {
		var time = $('input#eventTime').val(),
			date = $('input#eventDate').val(),
			readiness = $('input#readinessDate').val();

		if ($scope.isNoOfSeatsMax) {
			alert('This room does not support the number of attendees registered for your event. Try a bigger room');
		} else {
			// DateOfEvent - value
			inputs.DateTimeOfEvent = (inputs.IDSessionReadiness === false) ? timeZone.eventTime(date, time) : readiness;

			$http({
				method: 'PUT',
				url: '/event/update/' + inputs.IDEvent,
				data: inputs
			})
			.then(function(response) {
				$scope.isError = false;

				var data = response.data;
				if (data.event && data.session) {
					$scope.eventID = data.eventID;

					$('div#myModal').modal('hide');
					$('div#modal-goto-event').modal('show');

					// add the result to the events
					// $scope.userEvents.push(data.event);
					getMyEventList();

					// update next events
					getAllEventList();

					// remove border for layout and place
					removeBorderForLayoutAndPlace();

					// console.log(response.data);

					// enable date and time 
					$('input#eventDate').removeAttr('disabled');
					$('input#eventTime').removeAttr('disabled');

					// remove border for layout and place
					removeBorderForLayoutAndPlace();
				}
			}, function(error) {
				$scope.errors = error.data;
				$scope.isError = true;
			});

			// console.log(inputs);
		}
	};

	$scope.deleteEventModal = function(event) {
		$scope.inputs = event;

		// console.log($scope.inputs);
	};

	$scope.deleteEvent = function() {
		var eventID = $scope.inputs.IDEvent;

		$http.delete('/event/remove/' + eventID, { params: { sessionID: $scope.inputs.IDSession } })
			.then(function(response) {

				var data = response.data;
				if (data.event && data.session) {
					$('div#modal-delete').modal('hide');

					// add the result to the events
					// $scope.userEvents.push(data.event);
					getMyEventList();
				}
			});

		// console.log('event: ' + eventID + ', session: ' + sessionID);
	};

	/**
	 * Next Events
	 */
	$scope.allEvents = {};
	$scope.isSuccess = false;
	$scope.sortByTimeOfEvent = 'TimeOfEvent';
	$scope.eventText = 'Join';
	$scope.userID = 0;

	var getUserID = function() {
		$http.get('user/getUserID').then(function(response) {
			$scope.userID = response.data;
		});
	}; getUserID();

	var getAllEventList = function() {
		$http.get('/event/getAllEventList').then(function(response) {
			$scope.allEvents = response.data.data;

			// console.log($scope.allEvents);
		});
	}; getAllEventList();

	$scope.joinEvent = function(event, $event) {
		// var isSuccess = false;

		$http({
			method: 'POST',
			url: '/event/joinEvent',
			data: { IDSession: event.IDSession, IDUserType: '' }
		}).then(function(response) {
			$scope.isSuccess = (response.data.success) ? true : false;
		}, function(error) {
			console.log(error);
		});

		console.log($scope.isSuccess);
		$event.currentTarget.innerHTML = ($scope.isSuccess === true) ? 'Enter' : 'Join';
	};
	
	$scope.eventPagination = function($event) {
		var href = $event.target.attributes[1].value,
			pageNumber = href.split('page=')[1];

		$http
			.get('/event/eventPagination/?page=' + pageNumber)
			.then(function(response) {
				$scope.allEvents = response.data.data;
			});
	};


}]);