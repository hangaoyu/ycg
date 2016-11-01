<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityType extends Model
{
    protected $fillable = [
        'type_name'
    ];

    public function items()
    {
        return $this->hasMany(ActivityItem::class);
    }
}
