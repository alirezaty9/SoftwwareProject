<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class topBannerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            "id" => $this->id,
            "image" => $this->image,
            "title"=> $this->title,
            "text" => $this->text,
            "priority"=> $this->priority,
            "is_active"=> $this->is_active,
            "type" => $this->type,
        ];
    }
}
