app.controller('OnlineController', ['$scope', '$http', '$interval', function($scope, $http, $interval){

	$scope.whoseOnline = {};
	$scope.friendList = {};
	$scope.friendRequest = {};
	$scope.friendRequestCount = 0;
	$scope.friendID = 0;
	$scope.isOnline = false;
	$scope.dateOfEvent = true;
	$scope.sendRequest = true;
	$scope.inviteIcon = true;
	$scope.micIcon = false;
	$scope.cameraIcon = false;
	$scope.notifications = {};
	$scope.notificationsCount = 0;

	// Whose Online
	var	whoseOnlineFn = function() {
		$http.get('/user/whoseOnline').then(function(response) {
			$scope.whoseOnline = response.data;

			// console.log($scope.whoseOnline);
		});
	}; //,
	// timerWhoseOnline = $interval(whoseOnlineFn, 7000);
	whoseOnlineFn();

	// Friend Request
	var friendRequestFn = function() {
		$http.get('/user/friendRequest').then(function(response) {
			$scope.friendRequest = response.data;
			$scope.friendRequestCount = $scope.friendRequest.length;
			heightAndPositionForModal();
		});
	}; //,
	// timerFriendRequest = $interval(friendRequestFn, 7000);
	friendRequestFn();

	// Cancel the Friend Request
	$scope.cancelRequest = function() {
		$interval.cancel(timerFriendRequest);
	};

	var removeFriendRequestAfterAcceptOrDecline = function(request) {
		var newArray = $scope.friendRequest.filter(function(val, index, array) {
			return val !== request;
		});

		$scope.friendRequest = newArray;
		$scope.friendRequestCount = $scope.friendRequest.length;
		heightAndPositionForModal();
	};

	var updateRequestStatus = function(url, request) {
		var tmpUserOne = request.IDUserOneID,
			userOne = tmpUserOne,
			userTwo = request.IDUserTwoID,
			actionUser = request.ActionUserID;

		// console.log('user1: ' + userOne);
		// console.log('user2: ' + userTwo);
		// console.log('action: ' + actionUser);

		if (actionUser === userTwo) {
			userOne = userTwo;
			userTwo = tmpUserOne;
		}

		var data = {
			friendID: request.IDUserFriend,
			user_one: userOne,
			user_two: userTwo
		};

		// console.log('user1: ' + userOne);
		// console.log('user2: ' + userTwo);

		$http.put(url, data).then(function() {
			removeFriendRequestAfterAcceptOrDecline(request);
		});
	};

	// Accept Friend Request
	$scope.acceptRequest = function(request) {
		request.IDUserFriend = request.IDUserFriend; // set the IDUserFriend

		updateRequestStatus('/user/acceptFriend/' + $scope.friendID, request);
	};

	// Decline Friend Request
	$scope.declineRequest = function(request) {
		$scope.friendID = request.IDUserFriend;
		
		updateRequestStatus('/user/declineFriend/' + $scope.friendID, request);
	};

	// Height and Position for Friend Request Popup
	var heightAndPositionForModal = function() {
		var modal = $('div#modal-friend-request'),
			height = modal.find('div.modal-content'),
			content = modal.find('div.request-wrapper');

		switch($scope.friendRequestCount) {
			case 2: 
				modal.modal('show');
				height.css('marginTop', '2em');
				content.css('height', '600px');
				break;
			case 1: 
				modal.modal('show');
				height.css('marginTop', '13em');
				content.css({
					height: '310px',
					overflow: 'hidden'
				});
				break;
			case 0: 
				modal.modal('hide');
				// $interval.cancel(timerFriendRequest);
				break;
			default:
				modal.modal('show');
				break;
		}
	};

	/**
	 * WHOS ONLINE
	 */
	
	$scope.sendFriendRequest = function(online) {
		var tmpUserOne = $('input#userOne').val(),
			userOne = tmpUserOne,
			userTwo = online.id;

		if (userOne > userTwo) {
			userOne = userTwo;
			userTwo = tmpUserOne;
		}

		var data = {
			IDUserOneID: userOne,
			IDUserTwoID: userTwo,
			ActionUserID: tmpUserOne,
			IDConnectionStatus: 1
		};

		$http({
			method: 'POST',
			url: '/user/addFriend',
			data: data
		}).then(function(response) {
			// Check if is already added as friend
			if (response.data.isFriend) $('div#modal-errors').modal('show');
		});
	};

	/**
	 * FRIENDS
	 */
	var	friendsPromiseFn = function() {
		$http.get('/user/friendList').then(function(response) {
			$scope.friendList = response.data;

			// console.log($scope.friendList);
		});
	}; //,
	// timerFriendsPromise = $interval(friendsPromiseFn, 7000);
	friendsPromiseFn();

	/**
	 * Notification
	 */
	var notifyUser = function() {
		$http.get('/user/notifyUser').then(function(response) {
			$scope.notifications = response.data;
			$scope.notificationsCount = $scope.notifications.length;
			
			if ($scope.notificationsCount > 0) $('div#modal-send-notification').modal('show');
		}, function(error) {
			console.log(error);
		});
	}; //,
	// timerNotifyUser = $interval(notifyUser, 7000);
	notifyUser();

	$scope.removeSendNotification = function(notify) {
		$http.put('user/isSenderNotified/' + notify.NotificationID).then(function(response) {
			// if data.result return true
			if (response.data.result) {
				var newArray = $scope.notifications.filter(function(val, index, array) {
					return val !== notify;
				});

				$scope.notifications = newArray;
				$scope.notificationsCount = $scope.friendRequest.length;

				// check if there are no notification then hide
				if ($scope.notificationsCount <= 0) $('div#modal-send-notification').modal('hide');
			}
		}, function(error) {
			console.log(error);
		});
	};


	/**
	 * Dialog Icons
	 */
	$scope.inviteObj = {};
	$scope.eventList = {};
	$scope.eventListCounter = 0;

	$scope.getEventList = function() {
		if ($scope.eventListCounter === 0) {
			$scope.eventListCounter++;

			$http
				.get('event/getSelectEventList')
				.then(function(response) {
					$scope.eventList = response.data;
				});
		}
	};

	$scope.chooseEvent = function(invite) {
		var sessionID = invite.IDSession;

		$http
			.get('/event/getDateOfSession/' + sessionID)
			.then(function(response) {
				var data = response.data[0];

				$scope.inviteObj.concat = {
					IDSession: sessionID,
					SessionName: data.SessionName,
					DateOfSession: data.DateOfSession,
					GMT: data.GMT
				};
			});
	};

	$scope.sendInvitation = function(online) {
		$scope.inviteObj = {
			UserThatInvitedID: online.id,
			UserThatInvitedName: online.Name
		};

		$http
			.get('/event/getUserEventsCount')
			.then(function(response) {
				if (response.data.count > 0) // Check if the user currently logged in has sessions
					$('div#modal-invite').modal('show'); // popup invite user
				else 
					alert('Please create an event first. You don\' have any sessions created yet');
			}, function(error) {
				console.log(error);
			});
	};

	$scope.inviteUser = function(inviteObj) {
		$http({
			method: 'POST',
			url: '/event/inviteUser',
			data: $scope.inviteObj
		}).then(function(response) {
			if (response.data.success) $('div#modal-invite').modal('hide');
		});
	};

	/*=============== pusher ===============*/ 
	$scope.inviteDetails = {};

	var pusher;

	var initPusher = function() {
		// Pusher.logToConsole = true;

		pusher = new Pusher('5621d1511b98346e743e', {
			encrypted: true
		});
	}; //initPusher();


	/*var notifyInvitedUser = function(data) {
		// $scope.inviteDetails = data.invitation;
		
		// Get all the invitations
		$http
			.get('/event/getAllInvitation')
			.then(function(response) {
				console.log(response.data);
			});
		console.log(data);
	};

	var notifyInvitedUserRealTime = function(channelName) {
		var channel = pusher.subscribe(channelName);

		channel.bind('App\\Events\\NotifyUserContainer', notifyInvitedUser);
	}; notifyInvitedUserRealTime('invite-event');
	
	var whoseOnlineRealTimeFn = function(channelName) {
		var channel = pusher.subscribe(channelName);

		channel.bind('App\\Events\\WhoseOnline', function(data) {
			$scope.$apply(function() {
				$scope.whoseOnline = data.onlineUsers;
			});

			// console.log($scope.whoseOnline);
			console.log(data);
		});
	}; whoseOnlineRealTimeFn('online-users');

	var friendsPromiseRealTimeFn = function(channelName) {
		var channel = pusher.subscribe(channelName);

		channel.bind('App\\Events\\FriendList', function(data) {
			$scope.$apply(function() {
				$scope.friendList = data.friendList;
			});

			// console.log($scope.friendList);
			console.log(data);
		});
	}; friendsPromiseRealTimeFn('friend-list');*/



}]);
