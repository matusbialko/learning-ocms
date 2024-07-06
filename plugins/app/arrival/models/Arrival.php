<?php namespace App\Arrival\Models;

use Model;

class Arrival extends Model
{
    public $table = 'app_arrival_arrivals';
    protected $fillable = ['name', 'arrival_date'];
}
?>