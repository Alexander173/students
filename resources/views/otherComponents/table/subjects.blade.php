<div class="container-fluid">
    <table class="table table-bordered table-hover table-striped">
            @component('otherComponents.table.tableHead.subjects')
            @endcomponent

            @component('otherComponents.table.tableBody.subjects', ['subjects' => $subjects])
            @endcomponent
    </table>
</div>
