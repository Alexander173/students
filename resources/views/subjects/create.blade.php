@extends('layouts.app')

@section('content')
    @include('otherComponents.errors.validate')

    @component('otherComponents.forms.createSubject')
    @endcomponent

@endsection