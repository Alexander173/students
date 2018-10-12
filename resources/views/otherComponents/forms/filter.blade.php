<div class="filter-form container">
    <form method="POST" action="{{ route('students.index') }}">
        @csrf
        <div class="row justify-content-md-center">

            <div class="col-md-auto">
                <input class="form-control" id="inputEmail3" placeholder="Имя" name="first_name" type="text">
            </div>

            <div class="col-md-auto">
                <select class="custom-select custom-select-sm form-control" name="group_id">
                    <option selected value="" type="number">Choose group</option>
                        @foreach($students->groupBy('group_id') as $group)
                            <option value="{{ $group->first()->id }}" type="number">
                                {{ $group->first()->group->group_name }}
                            </option>
                        @endforeach
                </select>
            </div>

            <div class="col-md-1">
                <input class="form-control" placeholder="Pagination" name="page_count" value="5">
            </div>

            <div class="col-sm">
                <button type="submit" class="btn btn-default">Найти</button>
            </div>

        </div>
   </form>
</div>
