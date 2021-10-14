app.controller('projectCtrl', function($scope, projectService) {
  let service = projectService;

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
  else if(route_resource == 'edit' || route_resource == 'show')
  {
    service.show(id)
      .then(function(response) {
        $scope.payload = response.data['data'];
      }, function(response) {
        handle_api_response(response);
      });
  }

  $scope.get_module_url = function (id, page = 'edit') {
    return get_module_url(id, page);
  }

  $scope.submitForm = function() {
    if ($scope.payload.id == null) {
      $scope.storeForm();
    } else {
      $scope.updateForm();
    }
  }

  $scope.storeForm = function() {
    service.store($scope.payload)
      .then(function(response) {
        handle_api_response(response, true, false);
      }, function(response) {
        handle_api_response(response);
      });
  };

  $scope.updateForm = function() {
    service.update($scope.payload.id, $scope.payload)
      .then(function(response) {
        handle_api_response(response, true, false);
      }, function(response) {
        handle_api_response(response);
      });
  };

  $scope.handle_show_delete_modal = function(id, title = null, message = null) {
    $scope.id = id;
    title     = title == null ? delete_title : title;
    message   = message == null ? delete_message : message;

    show_delete_modal(title, message);
  };

  $(`${delete_selector} .confirm-delete`).click(function (e) {
    e.preventDefault();
    e.stopPropagation();
    $scope.destroy($scope.id);
  });

  $scope.destroy = function(id, is_list = true) {
    service.destroy(id)
    .then(function(response) {
      $(delete_selector).modal('hide');
      if (is_list) {
        data_table.row($(`#payload-${id}`)).remove().draw();
      }
    }, function(response) {
      handle_api_response(response);
    });
  }

});
