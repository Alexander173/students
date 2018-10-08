<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['first_name', 'last_name', 'patronymic', 'date_of_birthday', 'group_id'];
    public $timestamps = false;

    public function group()
    {
        return $this->belongsTo('App\Models\Group');
    }

    public function mark()
    {
        return $this->hasMany('App\Models\Mark');
    }

    public function scopeGroup($query, $group_id)
    {
        if ((request()->has('group_id')) && (request()->group_id != null)) {
            return $query->where('group_id', $group_id);
        } else {
            return $query;
        }
    }

    public function scopeName($query, $name)
    {
        if ((request()->has('first_name')) && (request()->first_name != null)) {
            return $query->where('first_name', $name);
        } else {
            return $query;
        }
    }
}
