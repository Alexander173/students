<thead class="table table-bordered thead-dark">
    <tr>
        <th>Группа</th>
        <th>Средняя по группе</th>
        <th>Полное имя</th>
        <th>Дата рождения</th>
        <th>Средняя оценка</th>
        @if (!$students->isEmpty())
            @foreach ($subjects as $subject)
                <th>{{ $subject->subject_name }}</th>
            @endforeach
        @endif
        <th>Анкета</th>
        <th>Удалить студента</th>
    </tr>
</thead>
