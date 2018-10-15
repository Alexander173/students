<div class="filter-form container  justify-content-center">
    <form method="get" action="{{ route('students.index') }}">
        <div class="row">

            <div class="col-md-auto">
                <input class="form-control" id="inputEmail3" placeholder="Имя" name="first_name" type="text" value="{{ request('first_name') }}">
            </div>

            <div class="col-md-auto">
                <select class="custom-select custom-select-sm form-control" name="group_id">
                    <option selected value="" type="number">Choose group</option>
                        @foreach ($groups as $group)
                            @if ($group->id == request('group_id'))
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

            <div class="col-md-1">
                <input class="form-control" placeholder="Pagination" name="page_count" value="{{ request('page_count') }}">
            </div>

            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline1" name="average" class="custom-control-input" value="3" {{ (request('average') == 3 ? 'checked' : "") }} >
                <label class="custom-control-label" for="customRadioInline1"> <= 3 </label>
            </div>

            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline2" name="average" class="custom-control-input" value="4" {{ (request('average') == 4 ? 'checked' : "") }} >
                <label class="custom-control-label" for="customRadioInline2"> 3 ~ 4.5 </label>
            </div>

            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline3" name="average" class="custom-control-input" value="5" {{ (request('average') == 5 ? 'checked' : "") }} >
                <label class="custom-control-label" for="customRadioInline3"> > 4.5 </label>
            </div>

            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline4" name="average" class="custom-control-input" {{ (request('average') == 'on' ? 'checked' : "") }} >
                <label class="custom-control-label" for="customRadioInline4"> ~ All </label>
            </div>

            <div class="col-sm">
                <button type="submit" class="btn btn-dark">Найти</button>
            </div>
            @csrf
        </div>
   </form>
</div>
