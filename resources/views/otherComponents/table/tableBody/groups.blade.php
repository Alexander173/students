<tbody>
    @foreach($groups as $group)
        <tr>
            <td> {{ $group->id }} </td>
            <td> {{ $group->group_name }} </td>
            <td> {{ $group->description }} </td>
            @if ($avg_groups[$group->id]['avg_group'] != null)
                <td> {{ round($avg_groups[$group->id]['avg_group'], 2) }} </td>
            @else
                <td> - </td>
            @endif
            @foreach ($subjects as $subject)
                @if (isset($avg_groups[$group->id][$subject->id]))
                    <td> {{ round($avg_groups[$group->id][$subject->id], 2) }} </td>
                @else
                    <td> - </td>
                @endif
            @endforeach
            <td>
                <form method="post" action="{{ route('groups.destroy', $group->id) }}">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-primary btn-sm">Delete</button>
                </form>
            </td>
            <td>
                <a class="btn btn-primary btn-sm" href="{{ route('groups.edit', $group->id) }}">
                    Редактировать
                </a>
            </td>
        </tr>
    @endforeach
</tbody>
