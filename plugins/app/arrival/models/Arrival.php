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
        'user_id',
        'user_name',
        'arrived_at'
    ];

    public $belongsTo = [
        'user' => ['RainLab\User\Models\User']
    ];

    protected $casts = [
        'arrived_at' => 'datetime'
    ];

    public function getIsLateAttribute()
    {
        return $this->arrived_at->format('H') >= 8;
    }

    public function beforeCreate()
    {
        $this->arrived_at = now();
        $this->getIsLateAttribute();
    }
}
?>