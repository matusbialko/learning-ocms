<?php namespace App\Arrival\Models;

use Model;

class Arrival extends Model
{
    use \October\Rain\Database\Traits\Validation;
    public $rules = [
        'name' => 'required|min:1'
    ];

    public $table = 'app_arrival_arrivals';
    protected $fillable = [
        'name',
        'arrived_at'
    ];
    public $belongsTo = [
        'user' => ['RainLab\User\Models\User']
    ];

    public function getIsLateAttribute()
    {
        return now()->format('H') >= 8;
    }

    public function beforeCreate()
    {
        $this->arrived_at = now();
    }
}
?>