@extends($global['base']['namespace'] . 'layouts.master')

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.css">
@endsection

@section('content')
    <div class="section-header">
        <h1>
            The Calendar
            <a class="btn btn-success" href="{{ route($global['module']['routes']['index']) }}">
                <i class="fas fa-list-ul" aria-hidden="true"></i>
            </a>
        </h1>
    </div>

    <div class="section-body" ng-controller="calendarCtrl">
        <h2 class="section-title">The Calendar</h2>
        <p class="section-lead">All projects in the calendar</p>

        <p class="section-lead">
            The projects that have no deadline: <br>
            <a ng-repeat="payload in not_assigned_projects" 
               href="{{ route('admin.projects.index') }}/@{{ payload.id }}/edit">
                @{{ payload.name }} (click to assign)<br>
            </a>
        </p>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>The Calendar</h4>
                    </div>
                    <div class="card-body">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!-- full calendar -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.js"></script>
    <!-- Project Service -->
    <script src="{{ URL::to('core/admin/app/services/project.service.js') }}"></script>
    <!-- Calendar Controller -->
    <script src="{{ URL::to('core/admin/app/controllers/calendar.controller.js') }}"></script>

    <script>
        var records_create_route = '{{ route('admin.records.create') }}';
        var records_index_route = '{{ route('admin.records.index') }}';
    </script>
@endsection