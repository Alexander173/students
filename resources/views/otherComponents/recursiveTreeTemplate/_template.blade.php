<ul>
    @foreach ($categories as $category)
        <li>
            <div class="d-flex align-items-center">
                <i class="fa fa-folder mr-2 focus" aria-hidden="true"></i>                
                <form method="get" action="{{ route('categories.show', $category->path) }}">
                    <button type="submit" class="btn btn-sm mr-2"> {{ $category->name }} </button>
                </form>
                <span class="badge badge-success badge-pill mr-5"> {{ $category->children->count() }} </span>
                
                <div class="mr-2">
                    <form method="post" action="{{ route('categories.destroy', $category->id) }}">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn-sm btn btn-dark">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>

                <div class="mr-2">
                    <a class="btn btn-sm btn-info" href="{{ route('categories.edit', $category->id) }}">     
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>           
                </div>

                <div class="">
                    <form method="get" action="{{ route('categories.create') }}">
                        @csrf
                        <button class="btn btn-sm btn-success" type="submit">
                            <input type="hidden" name="category_id" value="{{ $category->id }}">
                            <i class="fa fa-plus-square" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
           </div>
            @if ($category['children']->count() > 0)
                @include('otherComponents.recursiveTreeTemplate._template', ['categories' => $category['children']])
            @endif
        </li>
    @endforeach
</ul>