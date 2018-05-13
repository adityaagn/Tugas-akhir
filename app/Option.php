<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $guarded = [];
    protected $connection = 'mysql';
    public $timestamps = false;
}
