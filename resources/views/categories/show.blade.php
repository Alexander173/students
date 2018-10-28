@extends('layouts.app')

@section('content')
    <div class="container">
	    <div class="col-md-6">
	        <div class="tree">
	            @include('otherComponents.recursiveTreeTemplate._template')
	        </div>
    	</div>
    	<div class = "col-md-4">
    		<h1> {{ $category->name }} </h1>
    	</div>
    </div>
@endsection
