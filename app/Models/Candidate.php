<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
     protected $table = 'new';

    protected $fillable = [
        'numeration',
        'nationality',
        'Surname',
        'Other_names',
        'email',
        'Telephone'
    ];

    public $timestamps = false;

    // relationship
    public function admission()
    {
        return $this->hasOne(Admission::class, 'user_id', 'id');
    }
}
