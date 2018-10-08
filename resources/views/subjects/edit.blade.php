@extends('layouts.app')

@section('content')
    @include('otherComponents.errors.validError')

    @component('otherComponents.forms.editSubject', ['subject' => $subject])
    @endcomponent

@endsection