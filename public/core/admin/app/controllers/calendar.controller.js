app.controller('calendarCtrl', function($scope, projectService) {

  if(route_resource == 'index')
  {
    projectService.index()
      .then(function(response) {
        $scope.collection = response.data['data'];

        let events = [];

        for (let i = 0; i < $scope.collection.length; i++) {
          events.push({
            title: $scope.collection[i].name,
            start: '2021-10-01',
            url: records_create_route + '?project_id=' + $scope.collection[i].id
          });
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
