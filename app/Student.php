<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'avatar'];

    protected $hidden   = ['created_at', 'updated_at'];
}