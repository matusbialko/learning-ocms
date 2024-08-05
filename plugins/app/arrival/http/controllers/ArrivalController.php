<?php namespace App\Arrival\Http\Controllers;

use Illuminate\Routing\Controller;
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

    public function index()
    {
        return Response::json(Arrival::all(), 200);
    }
    public function store()
    {
        $data = request()->all();
        $arrival = Arrival::create($data);
        return Response::json(new ArrivalResource($arrival), 201);
    }
}