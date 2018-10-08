<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['subject_name'];
    public $timestamps = false;

    public function mark()
    {
        return $this->hasMany('App\Models\Mark');
    }
}
