<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use kalnoy\nestedset\src\NodeTrait;

class Category extends Model
{
    protected $guarded = [];

    use NodeTrait;
}
