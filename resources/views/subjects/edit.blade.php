@extends('layouts.app')

@section('content')
    @include('otherComponents.errors.validate')

    @component('otherComponents.forms.editSubject', ['subject' => $subject])
    @endcomponent

@endsection