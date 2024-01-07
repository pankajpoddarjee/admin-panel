<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class cronLog extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:cron-log';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //echo "pankaj";
        \Log::info("i am in side log");
    }
}
