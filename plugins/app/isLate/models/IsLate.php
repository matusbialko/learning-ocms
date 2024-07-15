<?php namespace App\Islate\Models;

use Model;
use DateTime;

class IsLate extends Model
{
    public static function getIsLateAttribute($arrivalTime)
    {
        return $arrivalTime->format('H') >= 8;
    }
}
?>