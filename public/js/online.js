var Online = {
	init: function(config) {
		// variables
		this.body = config.body;
		this.template = config.template;
		this.container = config.container;

		// bootstrap events
		this.events();

		// ajaxSetup
		$.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
	},
	events: function() {
		this.onLoad();
		this.addFriend();
		this.acceptFriendRequest();
		this.declineFriendRequest();
	},
	onLoad: function() {
		this.configWhoseOnline();
		this.configFriendRequest();
		this.getFriendRequest();
		this.listOfFriendRequest();
	},
	configWhoseOnline: function() {
		var self = this;

		setTimeout(this.listOfWhoseOnline.call(self), 0);
		setInterval(function() {
			self.listOfWhoseOnline();
		}, 5000);
	},
	listOfWhoseOnline: function() {
		var self = this;

		this.whoseOnline().then(function(data) {
			var container = $('div#onlineDiv');
			self.attachTemplate(container, container.find('div#onlineRow'), $('#online-template').html(), data);
		}, function(error) {
			console.log(error);
		});
	},
	whoseOnline: function() {
		var self = this;

		return $.ajax({
			url: 'user/whoseOnline',
			type: 'GET',
			dataType: 'JSON',
		}).promise();
	},
	modalHeightAndMargin: function(data, container) {
		var modalBodyHeight = 0,
			modalBodyMarginTop = 0;

		if (data.length === 1) {
			modalBodyHeight = 385;
			modalBodyMarginTop = 13;
		} else {
			modalBodyHeight = 600;
			modalBodyMarginTop = 3;
		}

		container.css({
			'height': modalBodyHeight + 'px',
			'marginTop': modalBodyMarginTop + 'em'
		});
	},
	configFriendRequest: function() {
		var self = this;

		setTimeout(this.listOfFriendRequest.call(self), 0);
		/*self.timerFriendRequest = setInterval(function() {
			self.listOfFriendRequest();
		}, 5000);*/
	},
	listOfFriendRequest: function() {
		var self = this;

		this.getFriendRequest().then(function(data) {
			var container = $('div#modal-friend-request'),
				content = container.find('div.modal-content');

			if (data.length > 0) {
				container.modal('show');
				self.attachTemplate(container, content, $('#friend-request-template').html(), data);
				self.modalHeightAndMargin(data, content);
			} else {
				container.modal('hide');
			}
		}, function(error) {
			console.log(error);
		});
	},
	getFriendRequest: function() {
		return $.ajax({
			url: 'user/friendRequest',
			type: 'GET',
			dataType: 'JSON',
		}).promise();
	},
	acceptFriendRequest: function() {
		var self = this;

		this.body.on('click', 'button#eventAccept', function(e) {
			e.preventDefault();

			self.friendID = $(this).data('friend-id');

			$.ajax({
				url: 'user/acceptFriend/' + self.friendID,
				type: 'GET',
			})
			.done(function(data) {
				console.log(data);
			})
			.fail(function(error) {
				console.log(error);
			});

			self.removeFriendRequestDivIfAccepted($(this));
		});
	},
	removeFriendRequestDivIfAccepted: function(acceptButton) {
		var self = this;

		self.disablFriendRequestButton('disable');
		acceptButton.text('Accepted').closest('div.list-of-request').delay(1000).slideUp('fast', function() {
			self.disablFriendRequestButton('enable');
			$(this).remove();

			var requestDiv = $('div.list-of-request');

			//  if friend request div is only 1 then ajust the div modal content height
			if (requestDiv.length === 1) {
				self.modalHeightAndMargin();
			}
			if (requestDiv.length === 0) $('div#modal-friend-request').modal('hide');
		});
	},
	disablFriendRequestButton: function(toggleStatus) {
		if (toggleStatus === 'disable') {
			$('button#eventAccept').attr('disabled', 'disabled');
			$('button#eventDecline').attr('disabled', 'disabled');
		} else {
			$('button#eventAccept').removeAttr('disabled');
			$('button#eventDecline').removeAttr('disabled');
		}
	},
	declineFriendRequest: function() {
		var self = this;

		$('div#modal-friend-request').on('click', function(e) {
			e.preventDefault();

			setTimeout(self.timerFriendRequest, 7000);
		});
	},
	isAddedFriendAlready: function(id) {
		var self = this;

		$.ajax({
			url: 'user/isAddFriendAlready/' + id,
			type: 'GET',
			dataType: 'JSON',
		})
		.done(function(data) {
			self.isAlreadyAddedAsFriend = data;	
		})
		.fail(function(error) {
			console.log(error);
		});
	},
	addFriend: function() {
		var self = this;

		this.body.on('click', 'div.friend-info-btn img', function(e) {
			e.preventDefault();

			var hoverDiv = $(this).closest('div.friend-hover-info'),
				tmpCurrentUserID = hoverDiv.data('user-one');
			// console.log('user1: ' + tmpCurrentUserID);

			self.userOne = tmpCurrentUserID;
			self.userTwo = hoverDiv.data('user-two');

			var twoOrigVal = self.userTwo;
			// console.log('user1: ' + self.userOne + ' => ' + 'user2: ' + self.userTwo);

			if (self.userOne > self.userTwo) {
				self.userOne = self.userTwo;
				self.userTwo = tmpCurrentUserID;
			}
			// console.log('user1: ' + self.userOne + ' => ' + 'user2: ' + self.userTwo);

			var data = {
				IDUserOneID: self.userOne,
				IDUserTwoID: self.userTwo,
				IDConnectionStatus: 1,
				// ActionUserID: tmpCurrentUserID,
			};

			// check if user already added as friend
			// self.isAddedFriendAlready(twoOrigVal);
			// console.log(self.isAlreadyAddedAsFriend);

			// prepare for posting through ajax
			$.ajax({
				url: 'user/addFriend',
				type: 'POST',
				dataType: 'JSON',
				data: data
			})
			.done(function(data) {
				console.log(data);
			})
			.fail(function(error) {
				console.log(error);
			});
		});
	},
	attachTemplate: function(container, containerTarget, tmp, data) {
		// Remove all tr
		// this.container.find('div#onlineDiv').remove();
		containerTarget.remove();

		// var template = Handlebars.compile( this.template ),
		var template = Handlebars.compile( tmp ),
			// context = this.list,
			html = template(data);

		container.append(html);
	},
	errorTemplate: function(error) {
		var template = Handlebars.compile( $('#list-errors').html() ),
			html = template(error.responseJSON),
			ulErrors = $('ul#errors');

		ulErrors.find('li').remove();
		ulErrors.removeClass('hidden').append(html);

		// Enable all input, textarea in form
		this.disableElementsInForm(false);
	},
};

Online.init({
	body: $('body'),
	template: $('#online-template').html(),
	container: $('div#inviteFriendCarousel'),
});

