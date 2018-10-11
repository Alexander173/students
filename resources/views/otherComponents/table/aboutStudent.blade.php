<div class="pl-5 table-about">
    <table class="table table-bordered table-hover">
        @component('otherComponents.table.tableHead.aboutStudent')
        @endcomponent

        @component('otherComponents.table.tableBody.aboutStudent', ['student' => $student, 'avg_student' => $avg_student])
        @endcomponent
    </table>
</div>
