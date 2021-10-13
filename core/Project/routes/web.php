<?php

Route::namespace('Core\Project\Controllers\Web')->prefix('admin')->name('admin.')->group(function () {
    #*** Ex: START: Project ***#
    // Route::resource('projects', 'ProjectController')->except([
    //    'store', 'update', 'destroy'
    // ]);
    #*** END: Project ***#
});
