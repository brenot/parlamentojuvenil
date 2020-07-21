<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \App\Console\Commands\Inspire::class,
        \App\Console\Commands\SyncAll::class,
        \App\Console\Commands\PjGeolocate::class,
        \App\Console\Commands\PjSchoolsExport::class,
        \App\Console\Commands\PjSeeduc::class,
        \App\Console\Commands\PjSeeducSchools::class,
        \App\Console\Commands\PjSeeducTest::class,
        \App\Console\Commands\PopulateCities::class,
        \App\Console\Commands\PjMakeAdmin::class,
        \App\Console\Commands\PjListAdmin::class,
        \App\Console\Commands\PjFixCities::class,
        \App\Console\Commands\PjRemoveDuplicateVotes::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('pj:remove-duplicate-votes')->hourly();
    }
}
