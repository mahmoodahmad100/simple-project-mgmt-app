@extends($global['base']['namespace'] . 'layouts.master')

@section('content')
    <div class="section-header">
        <h1>
            New Unit
            <a class="btn btn-success" href="{{ route($global['module']['routes']['index']) }}">
                <i class="fas fa-list-ul" aria-hidden="true"></i>
            </a>
        </h1>
    </div>

    <div class="section-body" ng-controller="unitCtrl">
        <h2 class="section-title">New Unit</h2>
        <p class="section-lead">create new unit</p>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>The Form</h4>
                    </div>
                    <div class="card-body">
                        @include($global['module']['path'] .'._form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!-- Unit Service -->
    <script src="{{ URL::to('core/admin/app/services/unit.service.js') }}"></script>
    <!-- Unit Controller -->
    <script src="{{ URL::to('core/admin/app/controllers/unit.controller.js') }}"></script>
@endsection