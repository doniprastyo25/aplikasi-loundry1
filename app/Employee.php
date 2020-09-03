<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    // protected $fillable = ['name'];
    // protected $guarded = [];
    protected $hidden = ['created_at','updated_at'];
}
