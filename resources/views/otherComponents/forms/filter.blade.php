<div class="filter-form container">
    <form method="get" action="">
        @csrf
        <div class="row justify-content-md-center">

            <div class="col-sm">
                <input class="form-control" id="inputEmail3" placeholder="Имя" name="first_name" type="text">
            </div>

            <div class="col-md-auto">
                <select class="custom-select custom-select-sm form-control" name="group_id">
                    <option selected value="" type="number">Choose group</option>
                        @foreach($students->groupBy('group_id') as $student)
                            <option value="{{ $student->first() }}" type="number"> {{ $student->first()->group->group_name }} </option>
                        @endforeach
                </select>
            </div>

            <div class="col-md-1">
                <input class="form-control" placeholder="Pagination" name="page_count" value="5">
            </div>

            <div class="col-sm pull-left">
                <button type="submit" class="btn btn-default">Найти</button>
            </div>

        </div>
   </form>
</div>
