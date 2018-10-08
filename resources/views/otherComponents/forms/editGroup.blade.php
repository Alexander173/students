<div class="container">
    <form method="post" action="{{ route('groups.update', $group->id) }}">
        {{method_field('PUT')}}
        <div class="justify-content-md-center">
            <div class="col-md-6 form-group ">
                <input class="form-control" placeholder="Название" name="group_name" type="text" value="{{ $group->group_name }}">
            </div>

            <div class="col-md-6 form-group">
                <textarea class="form-control" placeholder="Описание" name="description" type="text">{{ $group->description }}</textarea>
            </div>
        </div>

        <div class="col-md-2">
             <button type="submit" class="btn btn-primary">Update</button>
        </div>
        @csrf
    </form>
</div>