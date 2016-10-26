<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project_Holder extends Model
{
    //
    protected $fillable = [
        'project_id', 'holder', 
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
