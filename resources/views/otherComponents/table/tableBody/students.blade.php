<tbody>
    @foreach($students as $student)
        <tr>
            <td> {{ $student->id }} </td>
            <td> {{ implode(" ", [$student->first_name, $student->last_name, $student->patronymic]) }} </td>
            <td> {{ $student->date_of_birthday }} </td>
            <td> {{ $student->group->group_name }} </td>
            <td>
                <form method="post" action="{{ route('students.destroy', $student->id) }}">
                    @csrf
                    {{method_field('DELETE')}}
                    <button type="submit" class="btn btn-primary btn-sm">Delete</button>
                </form>
            </td>
            <td>
                <a class="btn btn-primary btn-sm" href="{{ route('students.edit', $student->id) }}">
                    Редактировать
                </a>
            </td>
        </tr>
    @endforeach
</tbody>
