<?php

Route::namespace('Core\Tracker\Controllers\Web')->prefix('admin')->name('admin.')->group(function () {
    #*** Ex: START: Tracker ***#
    // Route::resource('trackers', 'TrackerController')->except([
    //    'store', 'update', 'destroy'
    // ]);
    #*** END: Tracker ***#
});
