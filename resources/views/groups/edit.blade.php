@extends('layouts.app')

@section('content')
    @include('otherComponents.errors.validError')

    @component('otherComponents.forms.editGroup', ['group' => $group])
    @endcomponent

@endsection