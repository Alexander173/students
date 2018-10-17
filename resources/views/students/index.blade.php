@extends('layouts.app')

@section('content')
    @include('otherComponents.forms.filter')

    @if(Session::has('message'))
        <div class="alert alert-danger">
            <p class="text-center font-italic">{{ Session::get('message') }} </p>
        </div>
    @endif

    @if(isset($students))
        @component('otherComponents.table.students', ['students' => $students,
            'avg_groups' => $avg_groups,
            'avg_students' => $avg_students])
        @endcomponent
    @endif
    <div class="text-center">
        <a class="btn btn-primary" href="{{ route('students.create') }}">
            Добавить студента
        </a>
    </div>
@endsection
