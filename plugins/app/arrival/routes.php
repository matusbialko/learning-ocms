<?php
use App\Arrival\Http\Controllers\ArrivalController;

Route::group(['prefix' => 'api/v1', 'middleware' => 'auth'], function () {
    Route::get('arrivals', [ArrivalController::class, 'index']);  
    Route::post('arrivals', [ArrivalController::class, 'store']);
});
?>