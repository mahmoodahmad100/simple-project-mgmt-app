@extends($global['base']['namespace'] . 'layouts.master')

@section('content')
    <div class="section-header">
        <h1>Dashboard</h1>
    </div>

    <div class="row" ng-controller="reportCtrl">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-info">
                    <i class="fas fa-building" aria-hidden="true"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Projects</h4>
                    </div>
                    <div class="card-body">
                        @{{ collection.projects.count }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <!-- Report Service -->
    <script src="{{ URL::to('core/admin/app/services/report.service.js') }}"></script>
    <!-- Report Controller -->
    <script src="{{ URL::to('core/admin/app/controllers/report.controller.js') }}"></script>
@endsection