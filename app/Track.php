<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $guarded = ['created_at','deleted_at','updated_at'];
}
