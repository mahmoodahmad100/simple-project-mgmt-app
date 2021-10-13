<?php

namespace Core\Tracker\Models;

use Core\Base\Models\Base;

class Project extends Base
{
    /**
     * get the records.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function records()
    {
        return $this->hasMany(Recrod::class, 'project_id');
    }
}
