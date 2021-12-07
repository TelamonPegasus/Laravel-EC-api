<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'email' => $this->email,
            'orders' => OrderResource::collection($this->orders()),
            'created_at' => $this->created_at->format(config('app.date_format')),
            'updated_at' => $this->updated_at->format(config('app.date_format'))
        ];
    }
}
