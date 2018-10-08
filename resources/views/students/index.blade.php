@extends('layouts.app')

@section('content')
    @include('otherComponents.forms.filter')

    @if(isset($students))
        @component('otherComponents.table.students', ['students' => $students])
        @endcomponent
    @endif

@endsection
