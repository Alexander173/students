<ul>
    @foreach ($categories as $category)
        <li>
            <div class="d-flex align-items-center">                
                <a class="text-dark mr-2" href="#"> {{ $category->name }} </a>
                <span class="badge badge-primary badge-pill mr-5"> {{ $category->children->count() }} </span>
                
                <div class="mr-2">
                    <form method="post" action="{{ route('categories.destroy', $category->id) }}">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn-sm btn btn-secondary" href="{{ route('categories.destroy', $category->id) }}">
                            <span class="fa fa-trash" aria-hidden="true"></span>
                        </button>
                    </form>
                </div>

                <div class="">
                    <form method="post" action="{{ route('categories.edit', $category->id) }}">
                        @csrf
                        {{ method_field('PUT') }}
                        <button type="submit" class="btn-sm btn btn-secondary" href="{{ route('categories.destroy', $category->id) }}">
                            <span class="fa fa-pencil-square-o" aria-hidden="true"></span>
                        </button>
                    </form>
                </div>
           </div>
            @if (isset($category['children']))
                @include('otherComponents.recursiveTreeTemplate._template', ['categories' => $category['children']])
            @endif
        </li>
    @endforeach
</ul>