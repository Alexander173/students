@extends('layouts.app')

@section('content')
    <div class="container">
        @if(isset($student))
            @component('otherComponents.aboutStudent', ['student' => $student, 'avg_student' => $avg_student])
            @endcomponent
        @endif
        <div class="row justify-content-between">
            <a class="btn btn-dark" href="{{ route('students.edit', $student->id) }}">
                Редактировать студента
            </a>

            @if ($student->mark->first() == null)
                <a class="btn btn-warning" href="{{ route('students.mark.create', $student->id) }}">
                Изменить оценки
                </a>
            @else
                <a class="btn btn-warning" href="{{ route('students.mark.edit', [$student->id, $student->mark->first()]) }}">
                    Изменить оценки
                </a>
            @endif

            <a class="btn btn-success" href="{{ route('students.mark.create', $student->id) }}">
                Добавить оценок
            </a>
        </div>
    </div>
@endsection
