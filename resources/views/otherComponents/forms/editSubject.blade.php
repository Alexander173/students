<div class="container">

    @if(Session::has('message'))
        <div class="alert alert-danger">
            <p class="text-center font-italic">{{ Session::get('message') }} </p>
        </div>
    @endif
        
    <form method="POST" action="{{ route('subjects.update', $subject->id) }}">
        {{ method_field('PUT') }}
        <div class="justify-content-md-center">
            <div class="col-md-6 form-group ">
                <input class="form-control" placeholder="Название" name="subject_name" type="text" value="{{ $subject->subject_name }}">
            </div>

        <div class="col-md-2">
             <button type="submit" class="btn btn-primary">Update</button>
        </div>
        @csrf
    </form>
</div>