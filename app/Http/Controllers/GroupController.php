<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Http\Requests\GroupRequest;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::with('mark')->get();
        $subjects = $groups->first()->mark->first()->subject->all();

        GroupController::groupsAvg($avg_groups);

        return view('groups.index', ['groups' => $groups, 'avg_groups' => $avg_groups, 'subjects' => $subjects]);
    }

    public function create()
    {
        $this->authorize('create', Group::class);

        return view('groups.create');
    }

    public function store(GroupRequest $request)
    {
        Group::create($request->all());

        return redirect('groups/');
    }

    public function edit(Group $group)
    {
        $this->authorize('edit', Group::class);

        return view('groups.edit', ['group' => $group]);
    }

    public function update(GroupRequest $request, Group $group)
    {
        $group->update($request->all());

        return redirect('groups/');
    }

    public function destroy(Group $group)
    {
        $this->authorize('destroy', Group::class);

        $group->delete();

        return redirect('groups/');
    }

    public static function groupsAvg(&$avg_groups)
    {
        $groups = Group::with('mark')->get();

        foreach ($groups as $group) {
            $avg_groups[$group->id]['avg_group'] = $group->mark->avg('mark');

            foreach ($group->mark->groupBy('subject_id') as $subject_id => $mark) {
                $avg_groups[$group->id][$subject_id] = $mark->avg('mark');
            }
        }
    }
}
