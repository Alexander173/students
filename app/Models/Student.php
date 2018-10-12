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

    public function image()
    {
        return $this->hasOne('App\Models\Image');
    }

    public function scopeFilter($query)
    {
        if (request('name') && (request()->name)) {
            return $quert = $query->Name(request('name'));
        }

        if (request('group_id') && (request()->group_id)) {
            return $query = $query->Group();
        }
    }

    public function scopeGroup($query)
    {
        return $query->where('group_id', request('group_id'));
    }

    public function scopeName($query, $name)
    {
        $name && $query->where('first_name', 'like', "%{$name}%");
    }
}
