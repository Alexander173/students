<tbody>
    @if (!$student->mark->isEmpty())
        @foreach ($student->mark->first()->subject->all() as $subject)
            <tr>
                <td rowspan="{{ $student->mark->where('subject_id', $subject->id)->count()+1  }}">
                    {{ $subject->subject_name }}
                </td>
                @if (isset($avg_student[$student->id][$subject->id]))
                    <td rowspan="{{ $student->mark->where('subject_id', $subject->id)->count()+1  }}">
                        {{ round($avg_student[$student->id][$subject->id], 2) }}
                    </td>
                @else
                    <td> - </td>
                @endif

                @foreach ($student->mark->where('subject_id', $subject->id) as $marks)
                    <tr>
                        <td> {{ $marks->mark }} </td>
                        <td>
                            <form method="post" action="{{ route('students.mark.destroy', [$student->id, $marks->id]) }}">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-primary btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tr>
        @endforeach
    @else
        <span class="badge badge-pill badge-warning">
            <p class="m-0 font-italic">
                Оценок нет
            </p>
        </span>
    @endif
</tbody>