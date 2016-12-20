var Register = {
	init: function(config) {
		// variables
		this.template = config.template;
		this.container = config.container;

		// bootstrap events
		this.events();

		// ajaxSetup
		$.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
	},
	events: function() {
		this.sex = 'Male';
		this.countryID = 0;
		this.avatar = '';

		this.selectGender();
		this.avatarClick();
		this.avatarChange();
		this.nextStep();
		this.register();
		this.onLoad();
		this.selectCountry();
		this.update();
	},
	onLoad: function() {
		this.date = new Date();
		this.getGender();

		// console.log('date: ' + this.getFullDate());
		// console.log('time: ' + this.getFullTime());
		// console.log(this.dateTimeForSql());
	},
	getGender: function() {
		var self = this;

		$.ajax({
			url: 'getByGender/' + self.sex,
			type: 'GET',
			data: { Gender: $('input[name=Gender]').val() }
		})
		.done(function(data) {
			self.list = data;
			
			self.attachTemplate(self.list);
		})
		.fail(function(error) {
			console.log(error);
		});
	},
	selectGender: function() {
		var self = this;

		$('input[name=Gender]').on('click', function() {
			self.sex = (self.sex === 'Male') ? 'Female' : 'Male';
			$(this).val(self.sex);
			self.getGender(self.sex);
		});
	},
	selectCountry: function() {
		var self = this;

		$('select').on('change', function(e) {
			e.preventDefault();

			var country = $('select[name=Country]').val();

			$.ajax({
				url: 'country/' + country,
				type: 'GET',
				data: { Country: country }
			})
			.done(function(data) {
				self.countryID = data;
			})
			.fail(function(error) {
				console.log(error);
			});
		});
	},
	avatarClick: function() {
		var self = this;

		$('body div#usertype').on('click', 'img', function() {
			// When camera icon clicked
			if ($(this).attr('id') === 'camera') {
				self.imgType = 'camera';
				$('input[id=chooseAvatar]').trigger('click');
			} else { // When user avatar icon clicked
				self.imgType = 'user';
				self.avatar = $(this).data('name');
				$('div#avatarName').find('span').text(self.avatar);
			}
			// style the img when clicked
			$('body div#usertype').find('img').removeAttr('style');
			$(this).css({
				border: '5px solid gold',
				borderRadius: '50%'
			});
		});
	},
	avatarChange: function() {
		var self = this;

		$('body input[id=chooseAvatar]').on('change', function(e) {
			self.avatar = this.files[0];
			$('div#avatarName').find('span').text(self.avatar.name);

			// check if image chosen is an image
			self.isImage = (self.avatar.type.match('image.*')) ? true : false;
		});
	},
	nextStep: function() {
		$('input.next-step').on('click', function() {
			var step1 = $('div.step1');
			var step2 = $('div.step2');

			if (step1.is(':visible')) {
				step1.hide();
				step2.show();
			}
		});
	},

	/*=============== Working with Timezone & GMT ===============*/ 

	getFullDate: function() {
		var d = this.date;

		var year = d.getFullYear(),
		    month = d.getMonth() + 1,
		    month = (month < 10) ? '0' + month : month;
		    day = d.getDate();
		    day = (day < 10) ? '0' + day : day;

		return year + '-' + month + '-' + day;
	},
	getFullTime: function() {
		var d = this.date;

		var hour = d.getHours(),
		    min = d.getMinutes(),
		    min = (min < 10) ? '0' + min : min,
			sec = d.getSeconds();

		return hour + ':' + min + ':' + sec;
	},
	dateTimeForSql: function() {
    	return this.getFullDate() + ' ' + this.getFullTime();
    },
	gmtHandler: function(){
		var time = new Date().toTimeString().split(" "),
			gmt = time[1].toUpperCase().replace("GMT","");

		gmt = gmt.substring(0, gmt.length - 2);

		return gmt;
	},
	timezoneHandler: function() {
		var nome = "",
			time = new Date().toTimeString().split(" ");

		for (var i = 2; i < time.length; i++) {
			if(i != time.length + 1 && i > 2){
				nome += " ";
			}
			nome += time[i];
		}
		nome = nome.replace("(","").replace(")","");

		return nome;
	},

    /*=============== End of Timezone & GMT ===============*/ 

	register: function() {
		var self = this;

		$('form.register-form').on('submit', function(e) {
			e.preventDefault();

			// disable form input elements
			self.disableElementsInForm(true);

			// Create a new FormData object.
			var data = new FormData();

			data.append('Name', $('input[name=Name]').val());
			data.append('Title', $('input[name=Title]').val());
			data.append('Company', $('input[name=Company]').val());
			data.append('IDCountry', self.countryID);
			data.append('email', $('input[name=email]').val());
			data.append('password', $('input[name=password]').val());
			data.append('Gender', $('input[name=Gender]').val());
			data.append('ImgType', self.imgType);
			data.append('LastLoginDate', self.dateTimeForSql());
			data.append('GMT', self.gmtHandler());
			data.append('UTCTimeZone', self.timezoneHandler());

			// check if user didn't choose a country which use default
			if ($('select').val() == 'Country') {
				alert('Please select your country!');
			} else { // check if user choose a country which is not the default
				// check if user choose a valid image or user avatar is not empty
				if (self.isImage || self.avatar.length > 0) {
					// check if user choose camera icon
					if (self.imgType == 'camera') {
						data.append('UserPic', self.avatar);
						data.append('isImage', 1);
					} else { // check if user choose user icon
						data.append('UserPic', self.avatar);
						data.append('isImage', 0);
					}
					
					// disable button
					self.updateValueAndDisableUserButton('insert', true);

					// prepare for posting through ajax
					$.ajax({
						url: 'register',
						type: 'POST',
						dataType: 'JSON',
						cache: false,
						contentType: false,
						processData: false,
						data: data
					})
					.done(function(data) {
						$('ul#errors').remove(); // hide ul#errors
						if (data.success) window.location.href = 'lobby';
						
						// console.log(data);
					})
					.fail(function(error) {
						self.errorTemplate(error);
						self.updateValueAndDisableUserButton('insert', false);
					});
				} else {
					alert('Not a valid image file. Please select your avatar or upload a valid image file.');
				}
			}
		});	
	},
	update: function() {
		var self = this,
			span = $('div#avatarName').find('span');

		// variables
		self.imgType = 'user';
		self.currentAvatar = span.text();
		self.avatarInDb = span.data('pic-db');
		self.countryID = $('select[name=Country]').data('country-id');

		// when update button is clicked
		$('form.update-profile').on('submit', function(e) {
			e.preventDefault();

			// disable form input elements and update button
			self.disableElementsInForm(true);

			// variables
			self.currentAvatar = span.text();

			// Create a new FormData object.
			var data = new FormData();

			data.append('Name', $('input[name=Name]').val());
			data.append('Title', $('input[name=Title]').val());
			data.append('Company', $('input[name=Company]').val());
			data.append('IDCountry', self.countryID);
			// data.append('email', $('input[name=email]').val());
			// data.append('password', $('input[name=password]').val());
			data.append('Gender', $('label#gender').data('gender'));
			data.append('ImgType', self.imgType);

			// check if user didn't choose a country which use default
			if ($('select').val() == 'Country') {
				alert('Please select your country!');
			} else { // check if user choose a country which is not the default

				// check if avatar in db != to the current avatar and user upload image
				if (self.avatarInDb != self.currentAvatar && self.isImage) {
					data.append('UserPic', self.avatar);
					data.append('isImage', 1);
				} 
				// user only pick the default image or user icon
				else {
					data.append('UserPic', self.currentAvatar);
					data.append('isImage', 0);
				}

				// disable update button
				self.updateValueAndDisableUserButton('update', true);

				// prepare for posting through ajax
				$.ajax({
					url: 'user/update',
					type: 'POST',
					dataType: 'JSON',
					cache: false,
					contentType: false,
					processData: false,
					data: data
				})
				.done(function(data) {
					$('ul#errors').remove(); // hide ul#errors
					if (data.success) window.location.href = 'account';
				})
				.fail(function(error) {
					self.updateValueAndDisableUserButton('update', false);
					self.errorTemplate(error);
				});
			}
		});
	},
	attachTemplate: function(data) {
		// Remove all tr
		this.container.find('ul#avatars').remove();

		var template = Handlebars.compile( this.template ),
			// context = this.list,
			html = template(data);

		this.container.append(html);
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
	disableElementsInForm: function(readonly) {
		$('form[role=form]').find('input, textarea', 'radio', 'checkbox').attr('readonly', readonly);
	},
	updateValueAndDisableUserButton: function(options, isDisable) {
		var update = $('input#update'),
			insert = $('input[type=submit]');

		switch(options) {
			case 'update':
				return (isDisable) ? update.val('Updating Account...').attr('disabled', 'disabled') : update.val('Update').removeAttr('disabled');
			case 'insert':
				return (isDisable) ? insert.val('Inserting Account...').attr('disabled', 'disabled') : insert.val('Login').removeAttr('disabled');
		}
	}
};

Register.init({
	template: $('#user-type').html(),
	container: $('div#usertype'),
});