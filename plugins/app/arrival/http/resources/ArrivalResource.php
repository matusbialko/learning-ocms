<?php namespace App\Arrival\Http\Resources;

    use Illuminate\Http\Resources\Json\JsonResource;
    use LibUser\Userapi\Http\Resources\UserResource;

    class ArrivalResource extends JsonResource {

        public function toArray($request) {
            return [
                "id" => $this->id,
                "user" => new UserResource($this->user),
                "name" => $this->name,
                "arrived_at" => $this->arrived_at
            ];
        }
        
    }