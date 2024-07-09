<?php
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'api'], function () {
    Route::post('/arrivals', 'App\Arrival\Controllers\Api\Api@store');
    Route::get('/arrivals', 'App\Arrival\Controllers\Api\Api@index');
});
?>