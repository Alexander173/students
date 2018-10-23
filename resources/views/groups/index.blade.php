@extends('layouts.app')

@section('content')

    @if(isset($groups))
        @component('otherComponents.table.groups', ['groups' => $groups, 'avg_groups' => $avg_groups, 'subjects' => $subjects])
        @endcomponent
    @endif
    <div class="text-center">
        <a class="btn btn-primary" href="{{ route('groups.create') }}">
            Добавить Группу
        </a>
    </div>
@endsection
