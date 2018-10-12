@extends('layouts.app')

@section('content')
    <div class="container">
        @if(isset($student))
            @component('otherComponents.aboutStudent', ['student' => $student, 'avg_student' => $avg_student])
            @endcomponent
        @endif
        <div class="row justify-content-between">
            <a class="btn btn-secondary" href="{{ route('students.edit', $student->id) }}">
                Редактировать студента
            </a>
            <a class="btn btn-secondary" href="{{ route('students.mark.edit', [$student->id, $student->mark->first()]) }}">
                Изменить оценки
            </a>

            <a class="btn btn-secondary" href="{{ route('students.mark.create', $student->id) }}">
                Добавить оценок
            </a>
        </div>
    </div>
@endsection
