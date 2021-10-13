<?php

namespace Core\Tracker\Resources;

use Illuminate\Http\Resources\Json\JsonResource as Resource;

class RecordResource extends Resource
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
            'id'         => $this->id,
            'project_id' => $this->project_id,
            'time'       => $this->time,
            'comment'    => $this->comment,
            'via'        => $this->via,
            $this->mergeWhen($request->route()->getName() == 'api.v1.records.show', [

            ])
        ];
    }
}
