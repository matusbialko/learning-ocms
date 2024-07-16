<?php namespace App\IsLate;

use Backend;
use DateTime;
use Log;
use System\Classes\PluginBase;
use App\Arrival\Models\Arrival;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'IsLate Plugin',
            'description' => 'Hooks into the Arrival plugin',
            'author'      => 'Me :D',
            'icon'        => 'icon-clock'
        ];
    }

    public function boot()
    {
        Arrival::extend(function($model) {
            $model->bindEvent('model.afterCreate', function() {
                $current_time = new DateTime();
                Log::info('Bind event');
                return $current_time->format('H') >= 8;
            });
        });
    }
}
?>