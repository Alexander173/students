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

    public function scopeAverage($query, $avg_students)
    {
        if (request('average') && (request()->average)) {

            if (request('average') == 3) {
                foreach ($avg_students as $key => $value) {
                    if ($avg_students[$key]['avg'] <= 3) {
                        $array[] = $key;
                    }
                }
                return $query->whereIn('id', $array);
            }

            if (request('average') == 4) {
                foreach ($avg_students as $key => $value) {
                    if (($avg_students[$key]['avg'] > 3) && ($avg_students[$key]['avg'] < 4.5)) {
                        $array[] = $key;
                    }
                }
                return $query->whereIn('id', $array);
            }

            if (request('average') == 5) {
                foreach ($avg_students as $key => $value) {
                    if ($avg_students[$key]['avg'] >= 4.5) {
                        $array[] = $key;
                    }
                }
                    return $query->whereIn('id', $array);
            }
        }

        return $query;
    }

    public function scopeGroups($query)
    {
        if (request('group_id') && (request()->group_id)) {
            return $query->where('group_id', request('group_id'));
        }
        return $query;
    }

    public function scopeName($query, $name)
    {
        if (request('first_name') && (request()->first_name)) {
            return $query->where('first_name', 'LIKE', "%{$name}%")
                            ->orWhere('last_name', 'LIKE', "%{$name}%")
                            ->orWhere('patronymic', 'LIKE', "%{$name}%");
        }
        return $query;
    }
}
