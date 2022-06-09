<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CheckDueDate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'checkduedate:hourly';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Artisan command to check goals due date hourly';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        echo 'This is my first basic scheduler';
    }
}
