<?php namespace App\Arrival\Http\Resources;

    use Illuminate\Http\Resources\Json\JsonResource;
    use LibUser\Userapi\Http\Resources\UserResource;

    class ArrivalResource extends JsonResource {

        public function toArray($request) {
            $userObj = new UserResource($this->user);
            return [
                "id" => $this->id,
                "user" => $userObj,
                "user_id" => $this->user_id,
                "name" => $this->name,
                "arrived_at" => $this->arrived_at
            ];
        }
        
    }