@if ($avg_students[$student->id]['avg'] > 3 && $avg_students[$student->id]['avg'] < 4.5)
    <td> {{ round($avg_students[$student->id]['avg'], 2) }} </td>
@else
    <td bgcolor="{{ ($avg_students[$student->id]['avg'] <= 3) ? '#f54747' : ((($avg_students[$student->id]['avg']>=4.5)&&($avg_students[$student->id]['avg'] !=5))? '#f7fa4b' : '#35f520') }}">
        {{ round($avg_students[$student->id]['avg'], 2) }}
    </td>
@endif
