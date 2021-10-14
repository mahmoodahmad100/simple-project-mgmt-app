<?php

namespace Core\General\Controllers\API\V1;

use Core\Tracker\Models\Project;

class ReportController extends \Core\Base\Controllers\API\Controller
{
    /**
     * Init.
     *
     * @codeCoverageIgnore
     * @return void
     */
    public function __construct()
    {
        //
    }
    
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
