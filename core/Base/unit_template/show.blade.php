@extends($global['base']['namespace'] . 'layouts.master')

@section('content')
    <div class="section-header">
        <h1>
            Unit Details
            <a class="btn btn-success" href="{{ route($global['module']['routes']['index']) }}">
                <i class="fas fa-list-ul" aria-hidden="true"></i>
            </a>
        </h1>
    </div>

    <div class="section-body" ng-controller="unitCtrl">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-4">
                <div class="card">
                    <div class="card-header border-bottom-e3eaef">
                        <h4 class="card-title">Unit Info</h4>
                    </div>
                    <div class="card-body">
                        <p class="mb-1" ng-if="payload.id">
                            <strong class="text-capitalize">id</strong> <br>
                            @{{ payload.id }}
                        </p>

                        <p class="mb-1">
                            <strong class="text-capitalize">Name</strong> <br>
                            @{{ payload.name }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
