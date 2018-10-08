<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Http\Requests\GroupRequest;

class GroupController extends Controller
{
    protected $groups;

    public function __construct()
    {
        $this->groups = Group::all();
    }

    public function index()
    {
        $groups = Group::with('mark')->get();

        foreach ($groups as $group) {
            $avg_groups[$group->id]['avg_group'] = $group->mark->avg('mark');
            foreach ($group->mark as $mark) {
                $avg_groups[$group->id][$mark->subject->subject_name] = $mark->
                where('subject_id', $mark->subject_id)->avg('mark');
            }
        }

        return view('groups.index',['groups' => $groups, 'avg_groups' => $avg_groups]);
    }

    public function create()
    {
        return view('groups.create');
    }

    public function store(GroupRequest $request)
    {
        Group::create($request->all());
        return redirect('groups/');
    }
    public function edit(Group $group)
    {
        return view('groups.edit', ['group' => $group]);
    }

    public function update(GroupRequest $request, Group $group)
    {
        $group->update($request->all());
        return redirect('groups/');
    }

    public function destroy(Group $group)
    {
        $group->delete();
        return redirect('groups/');
    }
}
