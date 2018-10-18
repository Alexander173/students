@extends('layouts.app')

@section('content')
    <div class="container">
        @include('otherComponents.errors.validate')

        @component('otherComponents.forms.createMark', ['student' => $student, 'subjects' => $subjects])
        @endcomponent
    </div>
@endsection