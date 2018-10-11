@extends('layouts.app')

@section('content')
    <div class="container">
        @if(isset($student))
            @component('otherComponents.aboutStudent', ['student' => $student, 'avg_student' => $avg_student])
            @endcomponent
        @endif
        <div class="row justify-content-between">
            <div class="">
                <a class="btn btn-primary" href="{{ route('students.edit', $student->id) }}">
                    Редактировать студента
                </a>
            </div>
            <div class="">
                <a class="btn btn-primary" href="">
                    Изменить оценки
                </a>
            </div>
            <div class="">
                <a class="btn btn-primary" href="">
                    Добавить оценок
                </a>
            </div>
        </div>
    </div>
@endsection
