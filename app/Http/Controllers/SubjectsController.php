<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Http\Requests\SubjectRequest;

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
        return view('subjects.create');
    }

    public function store(SubjectRequest $request)
    {
        Subject::create($request->all());
        return redirect('subjects/');
    }

    public function edit(Subject $subject)
    {
        return view('subjects.edit', ['subject' => $subject]);
    }

    public function update(SubjectRequest $request, Subject $subject)
    {
        $subject->update($request->all());
        return redirect('subjects/');
    }

    public function destroy(Subject $subject)
    {
        $subject->delete();
        return redirect('subjects/');
    }
}
