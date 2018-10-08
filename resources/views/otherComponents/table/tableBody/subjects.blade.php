<tbody>
    @foreach($subjects as $subject)
        <tr>
            <td> {{ $subject->id }} </td>
            <td> {{ $subject->subject_name }} </td>
            <td>
                <form method="post" action="{{ route('subjects.destroy', $subject->id) }}">
                    @csrf
                    {{method_field('DELETE')}}
                    <button type="submit" class="btn btn-primary btn-sm">Delete</button>
                </form>
            </td>
            <td>
                <a class="btn btn-primary btn-sm" href="{{ route('subjects.edit', $subject->id) }}">
                    Редактировать
                </a>
            </td>
        </tr>
    @endforeach
</tbody>
