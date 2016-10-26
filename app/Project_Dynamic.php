<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project_Dynamic extends Model
{
    //
    protected $fillable = [
        'project_id', 'dynamic_desrc', 'dynamic_type'
    ];

    public function project(){
        return $this->belongsTo(Project::class);
    }
}
