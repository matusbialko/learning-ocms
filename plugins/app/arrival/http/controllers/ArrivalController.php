<?php namespace App\Arrival\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Arrival\Models\Arrival;
use App\Arrival\Http\Resources\ArrivalResource;
use Input;
use Event;
use Response;
use LibUser\Userapi\Models\User;
use LibUser\Userapi\Http\Resources\UserResource;

class ArrivalController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        Event::fire('app.arrival.logUser', [$user]);
        $arrivals = Arrival::where('user_id', auth()->user()->id)->get();
        return ArrivalResource::collection($arrivals);
    }
    public function store()
    {
        $data = request()->all();
        $user = auth()->user();
        $data['name'] = $user->name;
        $data['user_id'] = $user->id;
        $arrival = Arrival::create($data);
        return new ArrivalResource($arrival);
    }
}