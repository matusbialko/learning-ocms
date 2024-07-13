<?php
use App\Arrival\Models\Arrival;

Route::get('/', function() {
    return Arrival::get();
});
?>