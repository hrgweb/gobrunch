app.service('eventService', ['$http', function($http){

	this.getEventListOnInvite = function() {
		return $http.get('event/getSelectEventList');
	};
	
}]);