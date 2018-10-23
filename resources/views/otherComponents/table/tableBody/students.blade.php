<tbody>
    @foreach ($students->groupBy('group_id') as $group)
        <tr>
            <td rowspan="{{ $group->count() + 1 }}"> {{ $group->first()->group->group_name }} </td>
            @if ($avg_groups[$group->first()->group_id]['avg_group'] != null)
                <td rowspan="{{ $group->count() + 1 }}"> {{ round($avg_groups[$group->first()->group_id]['avg_group'], 2) }} </td>
            @else
                <td rowspan="{{ $group->count()+1 }}"> - </td>
            @endif

            @foreach ($group as $student)
                <tr>
                    <td> {{ implode(" ", [$student->first_name, $student->last_name, $student->patronymic]) }} </td>
                    <td> {{ $student->date_of_birthday }} </td>
                    @if ($avg_students[$student->id]['avg'] != null)
                        @include('otherComponents.bgColorAvg')
                    @else
                        <td> - </td>
                    @endif

                    @foreach ($subjects as $subject)
                        @if (isset($avg_students[$student->id][$subject->id]))
                            <td> {{ round($avg_students[$student->id][$subject->id], 2) }} </td>
                        @else
                            <td> - </td>
                        @endif
                    @endforeach

                    <td>
                        <a class="btn btn-primary btn-sm" href="{{ route('students.show', $student->id) }}">
                            Анкета
                        </a>
                    </td>

                    <td>
                        <form method="post" action="{{ route('students.destroy', $student->id) }}">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-primary btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tr>
    @endforeach
</tbody>
