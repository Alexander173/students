<ul class="list-group">
    @foreach ($categories as $category)
        <li class="list-group-item justify-content-between m-0 pl-4">
            <a class="text-dark" href="#"> {{ $category->name }} </a>
            <span class="badge badge-primary badge-pill"> {{ $category->children->count() }} </span>
            <div class="">
                <form method="post" action="{{ route('categories.destroy', $category->id) }}">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn-sm btn btn-secondary" href="{{ route('categories.destroy', $category->id) }}">
                        <span class="glyphicon glyphicon-trash">Delete this Glif Will</span>
                    </button>
                </form>
            </div>
            @if (isset($category['children']))
                @include('otherComponents.recursiveTreeTemplate._template', ['categories' => $category['children']])
            @endif
        </li>
    @endforeach
</ul>

