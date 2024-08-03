<?php
use App\Arrival\Http\Controllers\ArrivalController;

Route::group(['prefix' => 'api/v1'], function () {    
    Route::get('arrivals', [ArrivalController::class, 'getArrivals']);  
    Route::post('arrivals', [ArrivalController::class, 'postArrival']);
});
?>