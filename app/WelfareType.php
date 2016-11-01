<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WelfareType extends Model
{
    protected $fillable = [
        'type_name'
    ];
    public function items()
    {
        return $this->hasMany(WelfareItem::class);
    }
}
