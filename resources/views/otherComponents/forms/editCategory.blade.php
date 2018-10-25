<form method="POST" action="{{ route('categories.update', $category) }}">
    <div class="justify-content-md-center">
        <div class="col-md-6 form-group ">
            <input class="form-control" placeholder="Имя" name="name" type="text" value="{{ $category->name }}">
        </div>
        <div class="col-md-6 form-group ">
            <textarea class="form-control" placeholder="Description(maybe null)" name="description" type="text"></textarea> 
        </div>

        <p> Add to parrent's choosen </p>
        <div class="col-md-4 form-group">
            <select class="form-control custom-select" name="parent_id">
                <option selected value="0" type="number">Choose category</option>
                    @foreach ($categories as $is_category)
                        <option value="{{ $is_category->id }}" type="number">
                            {{ $is_category->name }}
                        </option>                       
                    @endforeach
            </select>
        </div>
    </div>


    <div class="col-md-2">
         <button type="submit" class="btn btn-primary">Update</button>
    </div>
    {{ method_field('PUT') }}
    @csrf
</form>