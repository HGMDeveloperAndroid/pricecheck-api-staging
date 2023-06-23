<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Line extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
        ];
    }

}
