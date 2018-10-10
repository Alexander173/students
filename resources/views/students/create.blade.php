@extends('layouts.app')

@section('content')
    @include('otherComponents.errors.validError')

    @component('otherComponents.forms.createStudent', ['students' => $students])
    @endcomponent

@endsection