<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Http\Requests\GroupRequest;

use Gate;

class GroupController extends Controller
{
    protected $groups;
    public $avg_groups;

    public function __construct()
    {
        $this->groups = Group::all();
    }

    public function index()
    {
        $groups = Group::with('mark')->get();

        GroupController::groupsAvg($this->avg_groups);

        return view('groups.index', ['groups' => $groups, 'avg_groups' => $this->avg_groups]);
    }

    public function create()
    {
        return view('groups.create');
    }

    public function store(GroupRequest $request)
    {
        if (GroupController::checkAuth()) {
            return back()->with(['message' => 'У вас нет прав']);
        }

        Group::create($request->all());

        return redirect('groups/');
    }

    public function edit(Group $group)
    {
        return view('groups.edit', ['group' => $group]);
    }

    public function update(GroupRequest $request, Group $group)
    {
        if (GroupController::checkAuth()) {
            return back()->with(['message' => 'У вас нет прав']);
        }

        $group->update($request->all());

        return redirect('groups/');
    }

    public function destroy(Group $group)
    {
        if (GroupController::checkAuth()) {
            return back()->with(['message' => 'У вас нет прав']);
        }

        $group->delete();

        return redirect('groups/');
    }

    public static function groupsAvg(&$avg_groups)
    {
        $groups = Group::with('mark')->get();

        foreach ($groups as $group) {
            $avg_groups[$group->id]['avg_group'] = $group->mark->avg('mark');

            foreach ($group->mark->groupBy('subject_id') as $mark) {
                $avg_groups[$group->id][$mark->first()->subject->subject_name] = $mark->avg('mark');
            }
        }
    }

    public function checkAuth()
    {
        return Gate::denies('editEntity', Group::class);
    }
}
