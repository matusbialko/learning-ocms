<?php namespace App\Arrival\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Arrival\Models\Arrival;
use App\Arrival\Http\Resources\ArrivalResource;
use Input;
use Response;
use LibUser\Userapi\Models\User;

class ArrivalController extends Controller
{
    public function index()
    {
        return Response::json(Arrival::all(), 200);
    }
    public function store()
    {
        $data = request()->all();
        $user = auth()->user();
        $data['user_id'] = $user->id;
        $data['user_name'] = $user->name;
        $arrival = Arrival::create($data);
        return Response::json(new ArrivalResource($arrival), 201);
    }
}