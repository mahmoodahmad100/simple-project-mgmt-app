<?php

Route::namespace('Core\Tracker\Controllers\Web')->prefix('admin')->name('admin.')->group(function () {
    #*** Ex: START: Project ***#
    Route::resource('projects', 'ProjectController')->except([
       'store', 'update', 'destroy'
    ]);
    #*** END: Project ***#

    #*** Ex: START: Record ***#
    Route::resource('records', 'RecordController')->except([
        'store', 'update', 'destroy'
    ]);
    #*** END: Record ***#

    #*** START: Dashboard ***#
    Route::get('/', 'DashboardController@index')->name('index');
    #*** END: Dashboard ***
});
