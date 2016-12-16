var Event = {
	init: function(config) {
		this.events();

		$.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } }); // ajaxSetup
	},
	events: function() {
		this.joinEnterButtonToggle();
		this.eventPagination();
	},
	joinEnterButtonToggle: function() {
		var self = this;

		$('div.next-events').on('click', 'a#eventJoin', function(e) {
			var link = $(this),
				linkText = $.trim(link.text().toLowerCase());

			switch(linkText) {
				case 'join':
					self.joinButtonClick(link);
					
					return false;
				case 'enter':
					// self.redirectToEventPage(link);
					return true;
					// break;
			}

			// e.preventDefault();
		});
	},
	joinButtonClick: function(link) {
		var isJoined = false,
			sessionID = link.data('session-id');

		// check if user join already an event
		$.ajax({
			url: 'event/isUserJoined/' + sessionID,
			type: 'GET',
		})
		.done(function(data) {
			isJoined = (parseInt(data, 10) === 1) ? true : false;
		});


		var linkBtn = link,
			joinData = { 
				IDSession: linkBtn.data('session-id'),
			};

		// post to sessionregistered
		if (! isJoined) {
			$.ajax({
				url: 'event/joinEvent',
				type: 'POST',
				data: joinData
			});
		}

		// change the text to 'Enter' and background to yellow
		linkBtn.text('Enter').css('background', '#debc05');
	},
	redirectToEventPage: function(link) {
		alert('test');
	},
	inviteUser: function() {
		$('body').on('click', 'div.friend-info-btn img', function() {
			console.log($(this));
		});
	},
	applyCssToFirstLinkOfPagination: function(ul) {
		ul.find('a').eq(1).css({
			background: '#005d68',
			color: '#fff'
		});
	},
	eventPagination: function() {
		var ul = $('ul.pagination');

		// set css to first link
		this.applyCssToFirstLinkOfPagination(ul);

		ul.on('click', 'a', function(e) {
			e.preventDefault();

			ul.find('a').removeAttr('style');
			$(this).css({
				background: '#005d68',
    			color: '#fff'
			});
		});
	}
};

Event.init({});