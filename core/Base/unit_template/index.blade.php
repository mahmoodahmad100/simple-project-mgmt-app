@extends($global['base']['namespace'] . 'layouts.master')

@section('content')
    <div class="section-header">
        <h1>
            Units
            <a class="btn btn-success" href="{{ route($global['module']['routes']['create']) }}">
                <i class="fas fa-plus" aria-hidden="true"></i>
            </a>
        </h1>
    </div>

    <div class="section-body" ng-controller="unitCtrl">
        <h2 class="section-title">Units</h2>
        <p class="section-lead">the list of the units</p>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>The List</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-md dataTables-init">
                                <caption class="d-none">units list</caption>
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr ng-repeat="payload in collection track by payload.id" id="payload-@{{ payload.id }}">
                                        <td>@{{ payload.id }}</td>
                                        <td>@{{ payload.name }}</td>
                                        <td>
                                            <a class="btn btn-info"
                                               href="@{{ get_module_url(payload.id, '') }}">
                                                <i class="fas fa-search" aria-hidden="true"></i>
                                            </a>
                                            <a class="btn btn-primary"
                                               href="@{{ get_module_url(payload.id) }}">
                                                <i class="fas fa-pencil-alt" aria-hidden="true"></i>
                                            </a>
                                            <a class="btn btn-danger"
                                               ng-click="handle_show_delete_modal(payload.id)"
                                               href="#"
                                            >
                                                <i class="fas fa-trash-alt" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('sub-content')
    @include($global['base']['namespace'] . 'layouts.partials._delete-modal')
@endsection

@section('js')
    @include($global['base']['namespace'] . 'layouts.partials._datatables-init')

    <!-- Unit Service -->
    <script src="{{ URL::to('core/admin/app/services/unit.service.js') }}"></script>
    <!-- Unit Controller -->
    <script src="{{ URL::to('core/admin/app/controllers/unit.controller.js') }}"></script>
@endsection
