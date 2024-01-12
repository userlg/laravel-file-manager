<?php

use App\Http\Controllers\Web\FileManagerController;
use Illuminate\Support\Facades\Route;

Route::controller(FileManagerController::class)->group(function () {
    Route::get('filemanager', 'index')->name('filemanager.index');
});
