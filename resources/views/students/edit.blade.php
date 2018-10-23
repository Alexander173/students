@extends('layouts.app')

@section('content')
    @include('otherComponents.errors.validate')

    @component('otherComponents.forms.editStudent', ['groups' => $groups, 'student' => $student])
    @endcomponent

@endsection