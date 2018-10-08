@extends('layouts.app')

@section('content')
    @include('otherComponents.errors.validError')

    @component('otherComponents.forms.editStudent', ['students' => $students, 'student' => $student])
    @endcomponent

@endsection