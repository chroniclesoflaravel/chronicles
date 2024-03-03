<?php

Route::group(['prefix' => 'chronicles'], function () {
    Route::view('/', 'chronicles::home')
        ->name('chronicles.index');
});