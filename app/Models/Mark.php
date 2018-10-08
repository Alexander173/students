<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    protected $fillable = ['student_id', 'subject_id', 'mark'];
    public $timestamps = false;

    public function student()
    {
        return $this->belongsTo('App\Models\Student');
    }

    public function subject()
    {
        return $this->belongsTo('App\Models\Subject');
    }
}
