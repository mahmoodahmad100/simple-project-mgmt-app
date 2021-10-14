app.controller('reportCtrl', function($scope, reportService) {
  let service = reportService;

  if(route_resource == 'index')
  {
    service.index()
      .then(function(response) {
        $scope.collection = response.data['data'];
        dataTables_init();
      }, function(response) {
        handle_api_response(response);
      });
  }
});
