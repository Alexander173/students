<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
Use App\Http\Requests\StudentRequest;

class StudentsController extends Controller
{
    protected $students;

    public function __construct()
    {
        $this->students = Student::all();
    }

    public function index()
    {
        return view('students.index',['students' => $this->students]);
    }

    public function create()
    {
        return view('students.create',['students' => $this->students]);
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
}
