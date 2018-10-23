<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;

use App\Models\Student;
use App\Models\Subject;
use App\Models\Group;
use App\User;

class StudentsController extends Controller
{
    protected $students;
    protected $avg_groups;
    protected $avg_students;
    protected $subjects;

    public function __construct()
    {


    }

    public function index()
    {
        GroupController::groupsAvg($this->avg_groups);

        $this->studentsAvg();
        $this->subjects = Subject::all();
        $groups = Group::all();

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
                                        'groups' => $groups,
                                        'subjects' => $this->subjects
                                        ]);
    }

    public function show(Student $student)
    {
        $this->authorize('show', Student::class);

        $this->studentsAvg();
        return view('students.show', ['student' => $student, 'avg_student' => $this->avg_students]);
    }

    public function create()
    {
        $this->authorize('create', Student::class);
        $groups = Group::all();

        return view('students.create', ['groups' => $groups]);
    }

    public function store(StudentRequest $request)
    {
        Student::create($request->all());

        return redirect('students/');
    }

    public function edit(Student $student)
    {
        $this->authorize('edit', Student::class);

        return view('students.edit', ['student' => $student, 'students' => $this->students]);
    }

    public function update(StudentRequest $request, Student $student)
    {
        $student->update($request->all());

        return redirect('students/' . $student->id);
    }

    public function destroy(Student $student)
    {
        $this->authorize('destroy', Student::class);

        $student->delete();

        return redirect('students/');
    }

    public function studentsAvg()
    {
        $students = Student::with('mark')->get();

        foreach ($students as $student) {
            $this->avg_students[$student->id]['avg'] = $student->mark->avg('mark');

            foreach ($student->mark->groupBy('subject_id') as $subject_id => $mark) {
                $this->avg_students[$student->id][$subject_id] = $mark->avg('mark');
            }
        }
    }
}
