@extends($global['base']['namespace'] . 'layouts.master')

@section('content')
    <div class="section-header">
        <h1>
            Project Details
            <a class="btn btn-success" href="{{ route($global['module']['routes']['create']) }}">
                <i class="fas fa-plus" aria-hidden="true"></i>
            </a>
        </h1>
    </div>

    <div class="section-body" ng-controller="projectCtrl">
        <h2 class="section-title">@{{ payload.name }}</h2>
        <p class="section-lead">@{{ payload.description }}</p>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Records List</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-md dataTables-init">
                                <caption class="d-none">records list</caption>
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Comment</th>
                                        <th scope="col">Via</th>
                                        {{-- <th scope="col">Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr ng-repeat="record in payload.records track by record.id" id="record-@{{ record.id }}">
                                        <td>@{{ record.id }}</td>
                                        <td>@{{ record.time }}</td>
                                        <td>@{{ record.comment }}</td>
                                        <td>@{{ record.via }}</td>
                                        {{-- <td>
                                            <a class="btn btn-info"
                                               href="@{{ get_module_url(record.id, '') }}">
                                                <i class="fas fa-search" aria-hidden="true"></i>
                                            </a>
                                            <a class="btn btn-primary"
                                               href="@{{ get_module_url(record.id) }}">
                                                <i class="fas fa-pencil-alt" aria-hidden="true"></i>
                                            </a>
                                            <a class="btn btn-danger"
                                               ng-click="handle_show_delete_modal(record.id)"
                                               href="#"
                                            >
                                                <i class="fas fa-trash-alt" aria-hidden="true"></i>
                                            </a>
                                        </td> --}}
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

    <!-- Project Service -->
    <script src="{{ URL::to('core/admin/app/services/project.service.js') }}"></script>
    <!-- Project Controller -->
    <script src="{{ URL::to('core/admin/app/controllers/project.controller.js') }}"></script>
@endsection
