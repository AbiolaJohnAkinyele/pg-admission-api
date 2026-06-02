<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
     protected $table = 'zmain_app';

    protected $fillable = [
        'user_id',
        'state_of_origin',
        'local_govt_area',
        'faculty',
        'department',
        'mode_of_study',
        'field_of_interest'
    ];

    public $timestamps = false;

    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'user_id', 'id');
    }
}
