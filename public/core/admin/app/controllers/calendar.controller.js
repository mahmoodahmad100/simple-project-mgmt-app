app.controller('calendarCtrl', function($scope, projectService) {

  if(route_resource == 'index')
  {
    projectService.index()
      .then(function(response) {
        $scope.collection            = response.data['data'];
        $scope.not_assigned_projects = [];

        let events = [];

        for (let i = 0; i < $scope.collection.length; i++) {

          if ($scope.collection[i].deadline != null) {
            events.push({
              title: $scope.collection[i].name,
              start: $scope.collection[i].deadline,
              url: records_create_route + '?project_id=' + $scope.collection[i].id
            });
          } else {
            $scope.not_assigned_projects.push($scope.collection[i]);
          }

        }

        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            headerToolbar: {
              left: 'prev,next today',
              center: 'title',
              right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            events: events
        });
        calendar.render();
        
      }, function(response) {
        handle_api_response(response);
      });
  }
});
