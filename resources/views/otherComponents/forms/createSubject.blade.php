<div class="container">
    <form method="POST" action="{{ route('subjects.store') }}">
        <div class="justify-content-md-center">
            <div class="col-md-6 form-group ">
                <input class="form-control" placeholder="Предмет" name="subject_name" type="text">
            </div>

        </div>

        <div class="col-md-2">
             <button type="submit" class="btn btn-primary">Create</button>
        </div>
        @csrf
    </form>
</div>