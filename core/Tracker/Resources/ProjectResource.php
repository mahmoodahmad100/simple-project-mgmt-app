<?php

namespace Core\Tracker\Resources;

use Illuminate\Http\Resources\Json\JsonResource as Resource;

class ProjectResource extends Resource
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
            'id'          => $this->id,
            'name'        => $this->name,
            'description' => $this->description,
            'deadline'    => $this->deadline,
            $this->mergeWhen($request->route()->getName() == 'api.v1.projects.show', [
                'records' => RecordResource::collection($this->records),
            ])
        ];
    }
}
