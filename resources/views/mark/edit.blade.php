@extends('layouts.app')

@section('content')
    <div class="container">
        @include('otherComponents.errors.validError')

        @component('otherComponents.forms.editMark', ['student' => $student, 'marks' => $marks])
        @endcomponent
    </div>
@endsection