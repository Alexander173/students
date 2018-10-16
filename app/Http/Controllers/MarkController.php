<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;
use App\Models\Mark;
use App\Models\Subject;

use Gate;

class MarkController extends Controller
{
    public function create(Student $student)
    {
        $subjects = Subject::all();

        return view('mark.create', ['student' => $student, 'subjects' => $subjects]);
    }

    public function store(Request $request, Student $student)
    {
        if (MarkController::checkAuth()) {
            return back()->with(['message' => 'У вас нет прав']);
        }

        foreach ($request->Create as $subject_id => $subject_marks) {
            foreach ($subject_marks as $mark) {
                if ($mark > 1) {
                    Mark::create(['student_id' => $student->id, 'subject_id' => $subject_id, 'mark' => $mark]);
                }
            }
        }
        return redirect('students/' . $student->id);
    }

    public function edit(Student $student, Mark $marks)
    {
        $marks = Mark::where('student_id', $student->id)->get();

        return view('mark.edit', ['student' => $student, 'marks' => $marks]);
    }

    public function update(Request $request, Student $student, Mark $marks)
    {
        if (MarkController::checkAuth()) {
            return back()->with(['message' => 'У вас нет прав']);
        }

        foreach ($request->Update as $mark_id => $mark) {
           Mark::where('id', $mark_id)->update(['mark' => $mark]);
        }

        return redirect('students/' . $student->id);
    }

    public function destroy(Student $student, Mark $mark)
    {
        if (MarkController::checkAuth()) {
            return back()->with(['message' => 'У вас нет прав']);
        }

        $mark->delete();

        return redirect('students/' . $student->id);
    }

    public function checkAuth()
    {
        return Gate::denies('editEntity', Mark::class);
    }
}
