<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\PageTemplate;
use App\Http\Controllers\HelperController;

class PageTemplateUpdater extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pagebuilder:template_update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $this->info("Running part 1...");


    }
}
