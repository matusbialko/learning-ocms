<?php namespace App\Arrival\Http\Resources;

    use Illuminate\Http\Resources\Json\JsonResource;

    class ArrivalResource extends JsonResource {

        public function toArray($request) {
            return [
                "id" => $this->id,
                "user_id" => $this->user_id,
                "name" => $this->name,
                "arrived_at" => date($this->arrived_at)
            ];
        }
        
    }