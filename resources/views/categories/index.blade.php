@extends('layouts.app')

@section('content')
    <div class="container">
    	 <div class="text-left pb-2 pl-3">
	        <a class="btn btn-success btn-sm" href="{{ route('categories.create') }}">
	            Добавить Категорию
	        </a>
	    </div>
        <div class="col-md-3">
            @include('otherComponents.recursiveTreeTemplate._template')
        </div>
    </div>
@endsection
