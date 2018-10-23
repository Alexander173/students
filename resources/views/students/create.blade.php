@extends('layouts.app')

@section('content')
    @include('otherComponents.errors.validate')

    @component('otherComponents.forms.createStudent', ['groups' => $groups])
    @endcomponent

@endsection