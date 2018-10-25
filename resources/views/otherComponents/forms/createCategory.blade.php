<form method="POST" action="{{ route('categories.store') }}">
    <div class="justify-content-md-center">
        <div class="col-md-6 form-group ">
            <input class="form-control" placeholder="Имя" name="name" type="text">
        </div>
        <div class="col-md-6 form-group ">
            <textarea class="form-control" placeholder="Description(maybe null)" name="description" type="text"></textarea> 
        </div>

        <p> Add to parrent's choosen </p>
        <div class="col-md-4 form-group">
            <select class="form-control custom-select" name="category_id">
                <option selected value="{{ $category->id }}" type="number"> {{ $category->name }} </option>
            </select>
        </div>
    </div>

    <div class="col-md-2">
         <button type="submit" class="btn btn-primary">Create</button>
    </div>
    @csrf
</form>