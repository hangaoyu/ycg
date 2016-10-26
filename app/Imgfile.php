<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imgfile extends Model
{
    //
    protected $fillable = [
        'type_id', 'imgsrc', 'desr','is_check',
    ];

}
