<div class="container">
    <form method="POST" action="{{ route('subjects.store') }}">
        <div class="justify-content-md-center">
            
            @if(Session::has('message'))
                <div class="alert alert-danger">
                    <p class="text-center font-italic">{{ Session::get('message') }} </p>
                </div>
            @endif

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