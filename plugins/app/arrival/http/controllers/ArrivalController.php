<?php namespace App\Arrival\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Arrival\Models\Arrival;
use App\Arrival\Http\Resources\ArrivalResource;
use Input;
use Event;
use Response;
use LibUser\Userapi\Models\User;

class ArrivalController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        if ($user->id) {
            return Arrival::where('user_id', $user->id)->get();
        } else {
            $response = Response::json(Arrival::all(), 200);
            return Event::fire('app.arrival.returnResponse', [$response]);
        }
    }
    public function store()
    {
        $data = request()->all();
        $user = auth()->user();
        $data['name'] = $user->name;
        $data['user_id'] = $user->id;
        $arrival = Arrival::create($data);
        return Response::json(new ArrivalResource($arrival), 201);
    }
}