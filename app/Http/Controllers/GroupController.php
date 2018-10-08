<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
Use App\Http\Requests\GroupRequest;

class GroupController extends Controller
{
    protected $groups;

    public function __construct()
    {
        $this->groups = Group::all();
    }

    public function index()
    {
        return view();
    }

    public function create()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
