<div class="d-flex justify-content-center text-center">
    <form method="POST" class="form-create-mark" action="{{ route('students.mark.store', $student->id) }}">
       
       @if(Session::has('message'))
            <div class="alert alert-danger">
                <p class="text-center font-italic">{{ Session::get('message') }} </p>
            </div>
        @endif

        @foreach ($subjects as $subject)
            <label>
                <span class="badge badge-pill badge-secondary">
                    <p class="h6 m-0">
                        {{ $subject->subject_name }}
                    </p>
                </span>
            </label>

            <div class="form-group" id="{{ $subject->id }}">
                <select class="custom-select custom-select-sm" name="Create[{{ $subject->id }}][]" type="number" onchange="addSelect(this);">
                    <option selected value="0" type="text">Add mark</option>
                    <option value="2" type="number">2</option>
                    <option value="3" type="number">3</option>
                    <option value="4" type="number">4</option>
                    <option value="5" type="number">5</option>
                </select>
            </div>
        @endforeach
            <button type="submit" class="btn btn-success">Добавить оценки</button>
        @csrf
    </form>
</div>