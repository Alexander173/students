<tbody>
    @foreach ($student->mark->first()->subject->all() as $subject)
        <tr>
            <td rowspan="{{ $student->mark->where('subject_id',$subject->id)->count()+1  }}">
                {{ $subject->subject_name }}
            </td>
            @if (isset($avg_student[$student->id][$subject->subject_name]))
                <td rowspan="{{ $student->mark->where('subject_id',$subject->id)->count()+1  }}">
                    {{ round($avg_student[$student->id][$subject->subject_name], 2) }}
                </td>
            @else
                <td> - </td>
            @endif

            @foreach ($student->mark->where('subject_id',$subject->id) as $marks)
                <tr>
                    <td> {{ $marks->mark }} </td>
                </tr>
            @endforeach
        </tr>
    @endforeach
</tbody>