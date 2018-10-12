<div class="container">
    <form method="POST" action="{{ route('groups.store') }}">
        <div class="justify-content-md-center">
            <div class="col-md-6 form-group ">
                <input class="form-control" placeholder="Название" name="group_name" type="text">
            </div>

            <div class="col-md-6 form-group">
                <textarea class="form-control" placeholder="Описание" name="description" type="text"></textarea>
            </div>
        </div>

        <div class="col-md-2">
             <button type="submit" class="btn btn-primary">Create</button>
        </div>
        @csrf
    </form>
</div>