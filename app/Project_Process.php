<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project_Process extends Model
{
    //
    protected $fillable = [
        'project_id', 'state', 'money', 'investor', 'investe_time',
    ];

    public function project()
    {
    return $this->belongsTo(Project::class);
    }
}
