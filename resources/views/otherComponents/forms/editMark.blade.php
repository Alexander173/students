<div class="d-flex justify-content-center text-center">
    <form method="POST" class="form-create-mark" action="{{ route('students.mark.update', [$student->id, $marks->first()->mark]) }}">

        @if(Session::has('message'))
            <div class="alert alert-danger">
                <p class="text-center font-italic">{{ Session::get('message') }} </p>
            </div>
        @endif

        @foreach ($student->mark->first()->subject->all() as $subject)
            <label>
                <span class="badge badge-pill badge-secondary">
                    <p class="h6 m-0">
                        {{ $subject->subject_name }}
                    </p>
                </span>
            </label>

            <div class="form-group" id="{{ $subject->id }}">
                @foreach ($marks as $mark)
                    @if ($subject->id == $mark->subject_id)
                        <select class="custom-select custom-select-sm" name="Update[{{ $mark->id }}]" type="number">
                            @foreach (range(2,5) as $i)
                                @if ($mark->mark == $i)
                                    <option value="{{ $i }}" type="number" selected> {{ $i }} </option>
                                @else
                                    <option value="{{ $i }}" type="number"> {{ $i }} </option>
                                @endif
                            @endforeach
                        </select>
                    @endif
                @endforeach
            </div>
        @endforeach
        {{ method_field('PUT') }}
            <button type="submit" class="btn btn-success">Обновить оценки</button>
        @csrf
    </form>
</div>