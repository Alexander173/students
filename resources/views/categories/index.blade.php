@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-3">
            @include('otherComponents.recursiveTreeTemplate._template')
        </div>
    </div>
@endsection
