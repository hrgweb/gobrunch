app.service('timeZone', function(){

	var d = new Date();

	var getFullDate = function() {
		var year = d.getFullYear(),
		    month = d.getMonth() + 1,
		    month = (month < 10) ? '0' + month : month;
		    day = d.getDate();
		    day = (day < 10) ? '0' + day : day;

		return year + '-' + month + '-' + day;
	};

	var getFullTime = function() {
		var hour = d.getHours(),
		    min = d.getMinutes(),
		    min = (min < 10) ? '0' + min : min,
			sec = d.getSeconds();

		return hour + ':' + min + ':' + sec;
	};

	this.currentDate = function() {
		return getFullDate();
	};

	this.currentTime = function() {
		return getFullTime();
	};

    this.dateTimeForSql = function() {
    	return getFullDate() + ' ' + getFullTime();
    };

	this.gmtHandler = function() {
		var gmtRe = /GMT([\-\+]?\d{4})/; // Look for GMT, + or - (optionally), and 4 characters of digits (\d)
		var d = new Date().toString();
		var tz = gmtRe.exec(d)[1]; // timezone, i.e. -0700

		return tz.substring(0, tz.length-2);
	};

	this.timezoneHandler = function() {
		var tzRe = /\(([\w\s]+)\)/; // Look for "(", any words (\w) or spaces (\s), and ")"
		var d = new Date().toString();
		var tz = tzRe.exec(d)[1]; // timezone, i.e. "Pacific Daylight Time"

		return tz;
	};

	this.timeHandler = function(time) {
		return time.substring(0, 2);
	};

	this.eventTime = function(setDate, setTime) {
		var gmt = parseInt(this.gmtHandler(), 10),
			time = parseInt(this.timeHandler(setTime, 10)),
			tmpResult = (gmt * -1) + time;

			if (tmpResult < 0 && tmpResult < gmt) {
				result = tmpResult + 24;
			} else {
				result = tmpResult;
			}

			// check if result < 10
			result = (result < 10) ? '0' + result : result;

			// ":47:59"
			var leftTime = setTime.substring(2, time.length);

		return setDate + ' ' + result + leftTime;
	};

	this.eventDateTimeHandler = function(setDate, setTime) {
		var gmt = parseInt(this.gmtHandler(), 10),
			time = parseInt(this.timeHandler(setTime, 10)),
			tmpResult = gmt + time,

			result = 0,
			daylight = '',

			// date
			tmpDate = parseInt(setDate.substring(8, 10), 10),
			dateLeftOver = setDate.substring(0, setDate.length-2);

		// check if tmpResult is less than 12 then set daylight to AM
		if (tmpResult < 12) {
			result = tmpResult;
			tmpDate = (tmpDate < 10) ? '0' + tmpDate : tmpDate; // we add 0 at beggining if less than 10
		} else {
			if (tmpResult >= 24) {
				result = tmpResult - 24;
				tmpDate++; // add 1 day
				tmpDate = (tmpDate < 10) ? '0' + tmpDate : tmpDate; // we add 0 at beggining if less than 10
			} else {
				result = tmpResult;
				tmpDate = (tmpDate < 10) ? '0' + tmpDate : tmpDate; // we add 0 at beggining if less than 10
			}

			// if result is < 10 then add 0 at beginning
			result = (result < 10) ? '0' + result : result;
		}

		// ":47:59"
		var leftTime = setTime.substring(2, time.length),
			date = dateLeftOver + tmpDate;

		return date + ' ' + result + leftTime; // + ' ' + daylight;
	};


});