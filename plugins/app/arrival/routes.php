<?php
use App\Arrival\Models\Arrival;

Route::get('api/arrivals', function() {
    return Arrival::get();
});
?>