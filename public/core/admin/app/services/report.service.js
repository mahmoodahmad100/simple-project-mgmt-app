app.factory('reportService', ['$http','backend', function($http, backend) {
  let endpoint = backend.API_BASE_URL + 'reports';
  return {
    index: function () {
      return $http.get(endpoint, backend.API_CONFIG);
    },
  }
}]);
