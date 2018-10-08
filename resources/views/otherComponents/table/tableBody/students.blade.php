<tbody class="">
    @foreach($students as $student)
        <tr>
            <td> {{ $student->id }} </td>
            <td> {{ implode(" ", [$student->first_name, $student->last_name, $student->patronymic]) }} </td>
            <td> {{ $student->date_of_birthday }} </td>
            <td> {{ $student->group->group_name }} </td>
        </tr>
    @endforeach
</tbody>
