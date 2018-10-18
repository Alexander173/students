<div class="container-fluid">
    <table class="table table-bordered">
            @component('otherComponents.table.tableHead.students',['students' => $students,
                'subjects' => $subjects])
            @endcomponent

            @component('otherComponents.table.tableBody.students', ['students' => $students,
                'avg_groups' => $avg_groups,
                'avg_students' => $avg_students,
                'subjects' => $subjects])
            @endcomponent
    </table>
    {{ $students->render() }}
</div>
