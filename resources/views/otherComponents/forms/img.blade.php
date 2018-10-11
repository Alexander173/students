<div class="img-load-form text-center">
    @if (is_null($student->image))
        <img src="{{ asset('storage/img_lk/default_avatar.jpg') }}" class="img-responsive rounded-circle border-primary img-thumbnail img-set"/>

        <form method="post" action ="{{ route('students.image.store', $student->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input class="form-control" type="file" name="photo" required>
                <button class="btn btn-success btn-sm m-1" type="submit"> Загрузить </button>
            </div>
        </form>
    @else
        <img src="{{ asset('storage/img_lk/'. $student->image->img_src) }}" class="img-responsive rounded-circle border-primary img-thumbnail img-set"/>

        <form method="post" action ="{{ route('students.image.update', [$student->id, $student->image->id]) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input class="form-control" type="file" name="photo" required>
                <button class="btn btn-success btn-sm m-1" type="submit"> Обновить </button>
            </div>
            {{ method_field('PUT') }}
        </form>
    @endif

    @if(Session::has('extension_error'))
        <p class="text-center font-italic">{{ Session::get('extension_error') }} </p>
    @endif
</div>