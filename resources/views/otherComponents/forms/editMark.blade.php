<div class="d-flex justify-content-center text-center">
    <form method="POST" class="form-create-mark" action="{{ route('students.mark.update', [$student->id, $marks->first()->mark]) }}">
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
                            @for ($i = 2; $i <= 5; $i++)
                                @if ($mark->mark == $i)
                                    <option value="{{ $i }}" type="number" selected> {{ $i }} </option>
                                @else
                                    <option value="{{ $i }}" type="number"> {{ $i }} </option>
                                @endif
                            @endfor
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