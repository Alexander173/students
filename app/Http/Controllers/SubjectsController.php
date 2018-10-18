<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Http\Requests\SubjectRequest;

use Gate;

class SubjectsController extends Controller
{
    protected $subjects;

    public function __construct()
    {
        $this->subjects=Subject::all();
    }

    public function index()
    {
        return view('subjects.index', ['subjects' => $this->subjects]);
    }
    public function create()
    {
        $this->authorize('create', Subject::class);

        return view('subjects.create');
    }

    public function store(SubjectRequest $request)
    {
        Subject::create($request->all());

        return redirect('subjects/');
    }

    public function edit(Subject $subject)
    {
        $this->authorize('edit', Subject::class);

        return view('subjects.edit', ['subject' => $subject]);
    }

    public function update(SubjectRequest $request, Subject $subject)
    {
        $subject->update($request->all());

        return redirect('subjects/');
    }

    public function destroy(Subject $subject)
    {
        $this->authorize('destroy', Subject::class);

        $subject->delete();

        return redirect('subjects/');
    }
}
