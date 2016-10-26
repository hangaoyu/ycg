<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    //
    protected $fillable = [
        'id', 'production', 'healthy','phone','postcode','email','address',
    ];
}
