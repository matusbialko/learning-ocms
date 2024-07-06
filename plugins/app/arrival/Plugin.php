<?php namespace App\Arrival;

use Backend;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{

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
            'app.arrival.some_permission' => [
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