<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use App\Models\Student;
use App\Models\Mark;
use App\Models\Subject;
use App\Models\Group;

use App\Policies\EditPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Student::class => EditPolicy::class,
        Mark::class => EditPolicy::class,
        Subject::class => EditPolicy::class,
        Group::class => EditPolicy::class
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
