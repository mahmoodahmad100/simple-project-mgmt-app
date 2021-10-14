<?php

Route::namespace('Core\General\Controllers\Web')->prefix('admin')->name('admin.')->group(function () {
    #*** START: Dashboard ***#
    Route::get('/', 'DashboardController@index')->name('index');
    #*** END: Dashboard ***
});
