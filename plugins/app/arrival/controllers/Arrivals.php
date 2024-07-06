<?php namespace App\Arrival\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use App\Arrival\Models\Arrival;

class Arrivals extends Controller
{
    public $implement = ['Backend\Behaviors\ListController', 'Backend\Behaviors\FormController'];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('App.Arrival', 'arrival', 'arrivals');
    }
}

?>