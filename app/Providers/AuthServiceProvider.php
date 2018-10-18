<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use App\Models\Student;
use App\Models\Mark;
use App\Models\Subject;
use App\Models\Group;

use App\Policies\StudentPolicy;
use App\Policies\MarkPolicy;
use App\Policies\SubjectPolicy;
use App\Policies\GroupPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Student::class => StudentPolicy::class,
        Mark::class => MarkPolicy::class,
        Subject::class => SubjectPolicy::class,
        Group::class => GroupPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
    }
}
