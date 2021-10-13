<?php

namespace Core\Tracker\Models;

use Core\Base\Models\Base;

class Record extends Base
{
    /**
     * get the project.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
}
