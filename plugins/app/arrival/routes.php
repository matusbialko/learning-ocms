<?php
use App\Arrival\Models\Arrival;
use App\Islate\Models\IsLate;

Route::group(['prefix' => 'api/v1'], function () {    
    Route::get('arrivals', function() {
        return Arrival::get();
    });

    Route::post('arrivals', function() {
        return Arrival::create([
            'name' => post('name'),
            'is_late' => IsLate::getIsLateAttribute(new DateTime())
        ]);
    });
});
?>