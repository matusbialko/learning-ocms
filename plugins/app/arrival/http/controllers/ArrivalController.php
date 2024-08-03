<?php namespace App\Arrival\Http\Controllers;

use Backend\Classes\Controller;
use App\Arrival\Models\Arrival;
use App\Arrival\Http\Resources\ArrivalResource;
use Input;
use Response;

class ArrivalController extends Controller
{
    public function index()
    {
        return Response::json(Arrival::all(), 200);
    }
    public function store()
    {
        $data = request()->all();
        $arrival = ArrivalResource::create($data);
        return Response::json($arrival, 201);
    }

    public function getArrivals()
    {
        return Response::json(Arrival::all(), 200);
    }
    public function postArrival()
    {
        $data = request()->all();
        $arrival = new ArrivalResource($data);
        return Response::json($arrival, 201);
    }
}