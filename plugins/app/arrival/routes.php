<?php
use App\Arrival\Models\Arrival;


Route::group(['prefix' => 'api'], function () {    
    Route::get('arrivals', function() {
        return Arrival::get();
    });

    Route::post('arrivals', function() {
        if (!isset($_POST['name'])) die('Name is missing');

        $arrived_at = new DateTime();
        $is_late = $arrived_at->format('H') >= 8;
        return Arrival::create([
            'id' => rand(0, 1000),
            'name' => $_POST['name'],
            'arrived_at' => $arrived_at,
            'is_late' => $is_late
        ]);
    });
});
?>