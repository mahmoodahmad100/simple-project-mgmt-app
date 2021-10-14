@extends($global['base']['namespace'] . 'layouts.master')

@section('content')
    <div class="section-header">
        <h1>
            Edit Record
            {{-- <a class="btn btn-success" href="{{ route($global['module']['routes']['index']) }}">
                <i class="fas fa-list-ul" aria-hidden="true"></i>
            </a> --}}
        </h1>
    </div>

    <div class="section-body" ng-controller="recordCtrl">
        <h2 class="section-title">Edit Record</h2>
        <p class="section-lead">edit the record</p>

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
    <!-- Record Service -->
    <script src="{{ URL::to('core/admin/app/services/record.service.js') }}"></script>
    <!-- Project Service -->
    <script src="{{ URL::to('core/admin/app/services/project.service.js') }}"></script>
    <!-- Record Controller -->
    <script src="{{ URL::to('core/admin/app/controllers/record.controller.js') }}"></script>
@endsection