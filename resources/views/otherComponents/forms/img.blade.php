<div class="img-load-form text-center">
    @if (is_null($student->image))
        <img src="{{ asset('storage/img_lk/default_avatar.jpg') }}" class="img-responsive rounded-circle border-primary img-thumbnail img-set"/>

        <form method="POST" action ="{{ route('students.image.store', $student->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="custom-file">
                <label class="custom-file-label" for="customFile"> Choose file </label>
                <input class="custom-file-input" type="file" id="customFile" name="photo" accept=".jpg, .jpeg, .png" required>
            </div>
            <button class="btn btn-success btn-sm m-1" type="submit"> Загрузить </button>
        </form>
    @else
        <img src="{{ asset('storage/img_lk/'. $student->image->img_src) }}" class="img-responsive rounded-circle border-primary img-thumbnail img-set"/>
        <form method="POST" action ="{{ route('students.image.update', [$student->id, $student->image->id]) }}" enctype="multipart/form-data">
            @csrf
            <div class="custom-file">
                <label class="custom-file-label" for="customFile"> Choose file </label>
                <input class="custom-file-input" type="file" id="customFile" name="photo" accept=".jpg, .jpeg, .png" required>
            </div>
            <button class="btn btn-success btn-sm m-1" type="submit"> Загрузить </button>
            {{ method_field('PUT') }}
        </form>
    @endif

    <span class="badge badge-pill badge-info">
        <p class="m-0 h5 font-italic">
            Дата рождения: {{ $student->date_of_birthday }}
        </p>
        <p class="m-0 h5 font-italic">
            Группа: {{ $student->group->group_name }}
        </p>
    </span>
    @include('otherComponents.errors.validate')
</div>