<div class="container-fluid">
    <table class="table table-bordered table-hover table-striped">
        @component('otherComponents.table.tableHead.groups', ['groups' => $groups])
        @endcomponent

        @component('otherComponents.table.tableBody.groups', ['groups' => $groups, 'avg_groups' => $avg_groups, 'subjects' => $subjects])
        @endcomponent
    </table>
</div>
