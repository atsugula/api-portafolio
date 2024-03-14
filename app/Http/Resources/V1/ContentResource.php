<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class ContentResource extends JsonResource
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
            'id' => $this->id,
            'section_id' => $this->section_id,
            'title' => $this->title,
            'sub_title' => $this->sub_title,
            'body' => $this->body,
            'button' => $this->button,
            'slide' => $this->slide,
            'slide_url' => $this->slide_url,
            'slide_title' => $this->slide_title,
            'slide_description' => $this->slide_description,
            'section' => $this->section,
        ];
    }
}
