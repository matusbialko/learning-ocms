<?php namespace App\Arrival;

use Backend;
use System\Classes\PluginBase;
use RainLab\User\Models\User;
use Event;
use Log;

class Plugin extends PluginBase
{

    public function boot()
    {
        User::extend(function($model){
            $model->hasMany['arrival'] = ['App\Arrival\Models\Arrival'];
        });

        Event::listen('app.arrival.logUser', function(&$user) {
            Log::info($user);
        });
    }
    public function pluginDetails()
    {
        return [
            'name'        => 'Arrivals A1',
            'description' => 'OCMS - lvl 1',
            'author'      => 'Me :D',
            'icon'        => 'icon-user-plus'
        ];
    }

    public function registerPermissions()
    {

        return [
            'app.arrival.arrivals' => [
                'tab' => 'Arrival',
                'label' => 'Arrivals'
            ],
        ];
    }
    public function registerNavigation()
    {

        return [
            'arrival' => [
                'label'       => 'Arrivals',
                'url'         => Backend::url('app/arrival/arrivals'),
                'icon'        => 'icon-user-plus',
                'permissions' => ['app.arrival.*'],
                'order'       => 500,
            ],
        ];
    }
}
?>