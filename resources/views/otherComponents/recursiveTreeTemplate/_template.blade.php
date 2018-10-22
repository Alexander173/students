<ul class="list-group list-group-flush pl-3">
    @foreach ($categories as $category)
        <li class="list-group-item justify-content-between align-items-center m-0 p-2">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <a class="text-dark" href="{{ route('categories.show', $category->name) }}"> {{ $category->name }} </a>
            <span class="badge badge-primary badge-pill"> {{ $category->children->count() }} </span>
            {{-- <button type="button" class="btn btn-sm btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button> --}}
            @if (isset($category['children']))
                @include('otherComponents.recursiveTreeTemplate._template', ['categories' => $category['children']])
            @endif
        </li>
    @endforeach
</ul>

