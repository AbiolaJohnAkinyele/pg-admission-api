<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'dept_new';

    protected $fillable = ['department'];

    public $timestamps = false;
}
