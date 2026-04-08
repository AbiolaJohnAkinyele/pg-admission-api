<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'fieldofinterest5';

    protected $fillable = ['fac', 'dept', 'degree', 'field'];

    public $timestaps = false;

    public function faculty(){
        return $this->belongsTo(Faculty::class, 'fac');
    }

    public function department(){
        return $this->belongsTo(Department::class, 'dept');
    }

    public function degree() {
        return $this->belongsTo(Degree::class, 'degree');
    }

    public function specialization() {
        return $this->belongsTo(Specialization::class, 'field');
    }
}
