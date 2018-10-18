@extends('layouts.app')

@section('content')
    @include('otherComponents.errors.validate')

    @component('otherComponents.forms.editGroup', ['group' => $group])
    @endcomponent

@endsection