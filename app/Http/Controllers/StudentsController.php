<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;

use App\Models\Student;
use App\Models\Subject;
use App\Models\Group;

class StudentsController extends Controller
{
    protected $students;
    protected $avg_groups;
    protected $avg_students;

    public function __construct()
    {
        $this->studentsAvg();
        $this->students = Student::all();
    }

    public function index()
    {
        GroupController::groupsAvg($this->avg_groups);
        $groups = Group::all();

        dump(request());
        $students = Student::with('mark')
                        ->name(request()->first_name)
                        ->groups()
                        ->average($this->avg_students)
                        ->paginate(request()->page_count)
                        ->appends([
                            'group_id' => request()->group_id,
                            'first_name' => request()->first_name,
                            'page_count' => request()->page_count,
                            'average' => request()->average
                        ]);

        return view('students.index', [ 'students' => $students,
                                        'avg_groups' => $this->avg_groups,
                                        'avg_students' => $this->avg_students,
                                        'groups' => $groups
                                        ]);
    }

    public function show(Student $student)
    {
        $subjects = Subject::all();

        return view('students.show', ['student' => $student,
            'avg_student' => $this->avg_students
            ]);
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
        return view('students.edit',['student' => $student, 'students' => $this->students]);
    }

    public function update(StudentRequest $request, Student $student)
    {
        $student->update($request->all());

        return redirect('students/' . $student->id);
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
