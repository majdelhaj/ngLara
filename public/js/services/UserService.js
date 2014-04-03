ngLara.service('UserService', []).factory('User', function($http) {

		return {
			// get all users
			getAll: function() {
				return $http.get('/api/users');
			},
			get: function(id) {
				return $http.get('/api/users/'+id);
			},

			// save a user (pass in user data)
			save: function(userData) {
				return $http({
					method: 'POST',
					url: '/api/users',
					headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
					data: $.param(userData)
				});
			},

			// delete a user
			delete: function(id) {
				return $http.delete('/api/users/' + id);
			}
		}

});
	