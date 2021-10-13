<?php

namespace Core\Tracker\Controllers\API\V1;

use Core\Tracker\Models\Project;

class ReportController extends \Core\Base\Controllers\API\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return $this->sendResponse([
            'projects' => [
                'count' => Project::count()
            ]
        ]);
    }
}
