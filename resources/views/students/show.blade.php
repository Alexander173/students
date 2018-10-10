@extends('layouts.app')

@section('content')
    <div class="container">
        @if(isset($students))
            @component('otherComponents.aboutStudent', ['student' => $student])
            @endcomponent
        @endif
        <div class="row justify-content-between">
            <div class="">
                <a class="btn btn-primary" href="{{ route('students.edit', $student->id) }}">
                    Редактировать студента
                </a>
            </div>
            <div class="">
                <a class="btn btn-primary" href="{{ route('students.edit', $student->id) }}">
                    Изменить оценки
                </a>
            </div>
            <div class="">
                <a class="btn btn-primary" href="{{ route('students.edit', $student->id) }}">
                    Добавить оценок
                </a>
            </div>
        </div>
    </div>
@endsection
