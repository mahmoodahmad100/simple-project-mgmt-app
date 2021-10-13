<?php

Route::group(['prefix' => 'api', 'middleware' => []], function () {
    # V1
    Route::namespace('Core\Tracker\Controllers\API\V1')->prefix('v1')->name('api.v1.')->group(function () {
        #*** START: Project ***#
        Route::apiResource('projects', 'ProjectController');
        #*** END: Project ***#

        #*** START: Record ***#
        Route::apiResource('records', 'RecordController');
        #*** END: Record ***#
    });
});
