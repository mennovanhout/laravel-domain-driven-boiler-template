<?php

namespace App;

use App\Console\Commands\CreateNewOrganisationCommand;
use App\Console\Commands\DeleteOrganisationCommand;
use App\Console\Commands\CreateNewOrganisationUserCommand;
use App\Console\Commands\MigrateTenantsCommand;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel;

class ConsoleKernel extends Kernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //CreateNewOrganisationCommand::class,
        //DeleteOrganisationCommand::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');
    }
}
