<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['group_name ', 'description'];
    public $timestamps = false;

    public function student()
    {
      return $this->hasMany('App\Models\Student');
    }

    public function mark()
    {
      return $this->hasManyThrough(
          'App\Models\Mark', 'App\Models\Student',
          'group_id', 'student_id', 'id'
      );
    }

}
