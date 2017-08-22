<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hirdetes extends Model
{
    public $timestamps = false;

    protected $fillable = ['id','story'];
}
