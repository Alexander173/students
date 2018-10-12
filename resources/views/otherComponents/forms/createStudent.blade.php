<div class="container">
    <form method="POST" action="{{ route('students.store') }}">
        <div class="justify-content-md-center">
            <div class="col-md-6 form-group ">
                <input class="form-control" placeholder="Имя" name="first_name" type="text">
            </div>

            <div class="col-md-6 form-group">
                <input class="form-control" placeholder="Фамилия" name="last_name" type="text">
            </div>

            <div class="col-md-6 form-group">
                <input class="form-control" placeholder="Отчество" name="patronymic" type="text">
            </div>

            <div class="col-md-3 form-group">
                <input class="form-control" placeholder="Дата рождения" name="date_of_birthday" type="date">
            </div>

            <div class="col-md-2 form-group">
                <select class="form-control custom-select custom-select-sm" name="group_id">
                    <option selected value="" type="number">Choose group</option>
                        @foreach($students->groupBy('group_id') as $group)
                            <option value="{{ $group->first()->id }}" type="number">
                                {{ $group->first()->group->group_name }}
                            </option>
                        @endforeach
                </select>
            </div>
        </div>

        <div class="col-md-2">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
        @csrf
    </form>
</div>