<tbody>
    @foreach($groups as $group)
        <tr>
            <td> {{ $group->id }} </td>
            <td> {{ $group->group_name }} </td>
            <td> {{ $group->description }} </td>
            @foreach ($avg_groups as $avg_group)
                {{dd($avg_group)}}
                @if ($avg_group[$group->id]['avg_group'] != null)
                    <td> {{$avg_group}} </td>
                @else
                    <td> - </td>
                @endif
            @endforeach
            <td>
                <form method="post" action="{{ route('groups.destroy', $group->id) }}">
                    @csrf
                    {{method_field('DELETE')}}
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
