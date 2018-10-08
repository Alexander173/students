@extends('layouts.app')

@section('content')

    @if(isset($subjects))
        @component('otherComponents.table.subjects', ['subjects' => $subjects])
        @endcomponent
    @endif
    <div class="text-center">
        <a class="btn btn-primary" href="{{ route('subjects.create') }}">
            Добавить Предмет
        </a>
    </div>
@endsection
