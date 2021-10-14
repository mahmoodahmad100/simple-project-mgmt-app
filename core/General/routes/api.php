<?php

Route::group(['prefix' => 'api', 'middleware' => []], function () {
    # V1
    Route::namespace('Core\General\Controllers\API\V1')->prefix('v1')->name('api.v1.')->group(function () {
        #*** START: Report ***#
        Route::get('reports', 'ReportController@index');
        #*** END: Report ***#
    });
});
