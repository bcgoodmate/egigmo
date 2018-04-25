<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class setupForeverBC extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'setup:foreverBC';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Initializing ForeverBC.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->call('migrate');
        $this->call('db:seed');
        $this->info('forever BC has been setup');
    }
}
