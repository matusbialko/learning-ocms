<?php namespace App\Islate;

use System\Classes\PluginBase;

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
}
?>