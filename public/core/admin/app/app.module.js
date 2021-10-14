var app = angular.module('adminApp', ['ngSanitize']);

// define constants for the app
let access_token = Cookies.get('access_token') ? Cookies.get('access_token') : sessionStorage.getItem('access_token');
app.constant('backend', {
  BASE_PATH: SYSTEM_BASE_PATH,
  get ADMIN_BASE_URL(){
    return this.BASE_PATH + '/admin'
  },
  get API_BASE_URL(){
    return this.BASE_PATH + '/api/v1/'
  },
  API_CONFIG: {
    headers: {
      Accept: 'application/json',
      'api-key': API_KEY,
      Authorization: access_token ? 'Bearer ' + access_token : null
    }
  }
});


// Main Controller
app.controller('mainCtrl', function($scope, $window, userService, backend) {

});
