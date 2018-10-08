<div class="container-fluid">
    <table class="table table-bordered table-hover table-striped">
            @component('otherComponents.table.tableHead.students')
            @endcomponent

            @component('otherComponents.table.tableBody.students', ['students' => $students])
            @endcomponent
    </table>
</div>
