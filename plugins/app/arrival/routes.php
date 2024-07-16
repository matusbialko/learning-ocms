<?php
use App\Arrival\Models\Arrival;

Route::group(['prefix' => 'api/v1'], function () {    
    Route::get('arrivals', function() {
        return Arrival::get();
    });

    Route::post('arrivals', function() {
        return Arrival::create([
            'name' => post('name')
        ]);
    });
});
?>