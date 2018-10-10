<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\StudentRequest;

class StudentsController extends Controller
{
    protected $students;
    protected $avg_groups;
    protected $avg_students;

    public function __construct()
    {
        GroupController::groupsAvg($this->avg_groups);
        $this->students = Student::all();
    }

    public function index()
    {
        $this->studentsAvg();

        return view('students.index', ['students' => $this->students,
            'avg_groups' => $this->avg_groups,
            'avg_students' => $this->avg_students
            ]);
    }

    public function show(Student $student)
    {
        return view('students.show', ['student' => $student]);
    }

    public function create()
    {
        return view('students.create', ['students' => $this->students]);
    }

    public function store(StudentRequest $request)
    {
        Student::create($request->all());
        return redirect('students/');
    }

    public function edit(Student $student)
    {
        return view('students.edit',['student' => $student,'students' => $this->students]);
    }
    public function update(StudentRequest $request, Student $student)
    {
        $student->update($request->all());
        return redirect('students/');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect('students/');
    }

    public function studentsAvg()
    {
        $students = Student::with('mark')->get();

        foreach ($students as $student) {
            $this->avg_students[$student->id]['avg'] = $student->mark->avg('mark');
            foreach ($student->mark->groupBy('subject_id') as $mark) {
                $this->avg_students[$student->id][$mark->first()->subject->subject_name] = $mark->avg('mark');
            }
        }
    }
}
