<div class="container">

    @if(Session::has('message'))
        <div class="alert alert-danger">
            <p class="text-center font-italic">{{ Session::get('message') }} </p>
        </div>
    @endif
    
    <form method="POST" action="{{ route('students.update', $student->id) }}">
        {{ method_field('PUT') }}
        <div class="justify-content-md-center">

            <div class="col-md-6 form-group ">
                <input class="form-control" placeholder="Имя" name="first_name" type="text" value="{{ $student->first_name }}">
            </div>

            <div class="col-md-6 form-group">
                <input class="form-control" placeholder="Фамилия" name="last_name" type="text" value="{{ $student->last_name }}">
            </div class="col-md-auto">

            <div class="col-md-6 form-group">
                <input class="form-control" placeholder="Отчество" name="patronymic" type="text" value="{{ $student->patronymic }}">
            </div>

            <div class="col-md-3 form-group">
                <input class="form-control" placeholder="Дата рождения" name="date_of_birthday" type="date" value="{{ $student->date_of_birthday }}">
            </div>

            <div class="col-md-2 form-group">
                <select class="form-control custom-select custom-select-sm" name="group_id">
                    <option selected value="" type="number">Choose group</option>
                    @foreach($students->first()->group->all() as $group)
                        @if ($group->id == $student->group_id)
                            <option value="{{ $group->id }}" type="number" selected>
                                {{ $group->group_name }}
                            </option>
                        @else
                            <option value="{{ $group->id }}" type="number">
                                    {{ $group->group_name }}
                            </option>
                        @endif
                    @endforeach
                </select>
            </div>

        </div>

        <div class="col-md-2">
             <button type="submit" class="btn btn-primary">Update</button>
        </div>
        @csrf
    </form>
</div>