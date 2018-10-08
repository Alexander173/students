<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['student_id', 'img_src'];
    public $timestamps = false;

    public function student()
    {
      return $this->belongsTo('App\Models\Student');
    }
}
