<?php namespace App\Arrival\Models;

use Model;
use DateTime;
use Log;

class Arrival extends Model
{
    use \October\Rain\Database\Traits\Validation;
    public $rules = [
        'name' => 'required|min:1'
    ];

    public $table = 'app_arrival_arrivals';
    protected $fillable = [
        'name',
        'arrived_at', 
        'is_late'
    ];
    public $timestamps = false;

    public function afterCreate()
    {
        $this->arrived_at = new DateTime();
        Log::info('Creating arrival entry');
    }
}
?>