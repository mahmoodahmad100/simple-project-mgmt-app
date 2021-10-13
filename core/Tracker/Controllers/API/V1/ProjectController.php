<?php

namespace Core\Tracker\Controllers\API\V1;

use Core\Tracker\Requests\ProjectRequest as FormRequest;
use Core\Tracker\Models\Project as Model;
use Core\Tracker\Resources\ProjectResource as Resource;

class ProjectController extends \Core\Base\Controllers\API\Controller
{
    /**
     * Init.
     * @param FormRequest $request
     * @param Model $model
     * @param string $resource
     */
    public function __construct(FormRequest $request, Model $model, $resource = Resource::class)
    {
        parent::__construct($request, $model, $resource);
    }
}
