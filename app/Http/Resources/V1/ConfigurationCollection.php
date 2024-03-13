<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ConfigurationCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "success" => true,
            "module" => "Sections",
            "action" => "Consulta sections",
            "items" => $this->collection,
            "meta" => [
                "organization" => config('global.organization', 'ATSU'),
                "authors" => config('global.authors', 'Jorge Usuga'),
            ],
        ];
    }
}
