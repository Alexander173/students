<thead class="table table-bordered thead-dark">
    <tr>
        <th>Группа</th>
        <th>Средняя по группе</th>
        <th>Полное имя</th>
        <th>Дата рождения</th>
        <th>Средняя оценка</th>
        @foreach ($students->first()->mark->first()->subject->all() as $subject)
            <th>{{ $subject->subject_name }}</th>
        @endforeach
        <th>Анкета</th>
        <th>Удалить студента</th>
    </tr>
</thead>
