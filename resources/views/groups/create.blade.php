@extends('layouts.app')

@section('content')
    @include('otherComponents.errors.validError')

    @component('otherComponents.forms.createGroup')
    @endcomponent

@endsection