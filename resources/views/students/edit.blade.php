@extends('layouts.app')

@section('content')
    @include('otherComponents.errors.validate')

    @component('otherComponents.forms.editStudent', ['students' => $students, 'student' => $student])
    @endcomponent

@endsection