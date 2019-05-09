<?php

namespace Modules\Preorder\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RajaOngkirResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'query'  => $this->query,
            'status'  => (isset($this->status))? $this->status : null  ,
            'results'  => (isset($this->results))? $this->results : null
        ];
    }
}
