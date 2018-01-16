<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Character extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
            'guid'  => $this->guid,
            'name'  => $this->name,
            'race'  => $this->race,
            'class' => $this->class,
            'level' => $this->level,
        ];
    }
}
