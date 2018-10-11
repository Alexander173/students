<div class="content">
    <div class="text-center">
        <span class="badge badge-pill badge-dark">
            <p class="m-0 h4 font-italic">
                {{ implode(" ", [$student->first_name, $student->last_name, $student->patronymic]) }}
            </p>
        </span>
    </div>
    <div class="row p-1">
        @component('otherComponents.forms.img', ['student' => $student])
        @endcomponent

        @component('otherComponents.table.aboutStudent', ['student' => $student, 'avg_student' => $avg_student])
        @endcomponent
    </div>
</div>