<?php

namespace Modules\Preorder\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        if (isset($request->by) && $request->by == 'batch') {
            return [
                'id' => $this->id,
                'transcation' => '#' . $this->getTransaction->id,
                'amount' => $this->getTransaction->amount,
                'start_production_date' => $this->getProductionBatch->start_production_date,
                'delivery_date' => $this->delivery_date,
                'input_tracking_number' => $this->when($request->edit == 1, function () {
                    $input = '<input
                type="text"
                class="form-control"
                name="tracking_number[]"/>';
                    $input .= '<input
                type="hidden"
                class="form-control"
                value="' . $this->id . '"
                name="production_id[]"/>';
                    return $input;
                }),
                'tracking_number' => $this->tracking_number,
            ];
        }
        return parent::toArray($request);
    }
}
