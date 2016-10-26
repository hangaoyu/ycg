<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'logo', 'name', 'desrc', 'body', 'register_id', 'person', 'create_at', 'type', 'address', 'capital', 'state'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function dynamics()
    {
        return $this->hasMany(Project_Dynamic::class);
    }

    public function holders()
    {
        return $this->hasMany(Project_Holder::class);
    }

    public function processes()
    {
        return $this->hasMany(Project_Process::class);
    }
}