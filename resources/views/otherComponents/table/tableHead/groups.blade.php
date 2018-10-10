<thead class="table table-bordered table-hover table-striped">
    <tr>
        <th>#</th>
        <th>Название группы</th>
        <th>Описание</th>
        <th>Средняя по группе</th>
        @foreach ($groups->first()->mark->first()->subject->all() as $subject)
            <th>{{ $subject->subject_name }}</th>
        @endforeach
        <th>Удалить группу</th>
        <th>Редактировать</th>
    </tr>
</thead>
