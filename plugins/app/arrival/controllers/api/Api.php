<?php namespace App\Arrival\Controllers\Api;

use Backend\Classes\Controller;
use App\Arrival\Models\Arrival;
use Response;

class Arrivals extends Controller
{
    public function store()
    {
        $data = request()->all();
        $arrival = Arrival::create($data);
        return Response::json($arrival, 201);
    }

    public function index()
    {
        return Response::json(Arrival::all(), 200);
    }
}

?>