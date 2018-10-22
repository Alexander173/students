<form method="POST" action="{{ route('') }}">
    <div class="justify-content-md-center">
        <div class="col-md-6 form-group ">
            <input class="form-control" placeholder="Имя" name="name" type="text">
        </div>

        <div class="col-md-6 form-group">
            <input class="form-control" placeholder="Parent_id" name="parent_id" type="text">
        </div>
    </div>

    <div class="col-md-2">
         <button type="submit" class="btn btn-primary">Create</button>
    </div>
    @csrf
</form>