app.controller('UserController', ['$scope', '$http', 'timeZone', function($scope, $http, timeZone){
	
	$scope.isError = false;
	$scope.errorMessage = '';
	$scope.user = {
		email: '',
		password: ''
	};

	$scope.signIn = function() {
		if ($scope.user.email.length === 0 || $scope.user.password.length === 0) {
			$scope.isError = true;
			$scope.errorMessage = 'Please provide an email and password.';
		} else {
			var user = $scope.user;

			user.concat = {
				LastLoginDate: timeZone.dateTimeForSql(),
				GMT: timeZone.gmtHandler(),
				UTCTimeZone: timeZone.timezoneHandler()
			};

			$http({
				method: 'POST',
				url: '/signin',
				data: user
			}).then(function(response) {
				if (response.data.success) {
					window.location.href = '/lobby';
				} else {
					$scope.isError = true;
					$scope.errorMessage = 'Invalid username or password.';
				}
			});
		}
	};

	

}]);