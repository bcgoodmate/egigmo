<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Filesystem\Filesystem;
use JasonLewis\ResourceWatcher\Event;
use JasonLewis\ResourceWatcher\Tracker;
use JasonLewis\ResourceWatcher\Watcher;

class FileSystemWatcher extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'watch:filesystem';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Watcher of the filesystem.';

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

        $files = new Filesystem();
        $tracker = new Tracker();
        $watcher = new Watcher($tracker,$files);


        $listener = $watcher->watch('public/site');


        $listener->onCreate(function ($resource, $path) {
            echo "{$path} was created." . PHP_EOL;
        });

        $listener->onDelete(function ($resource, $path) {
            echo "{$path} was deleted." . PHP_EOL;
        });

        $listener->onModify(function ($resource, $path) {
            echo "{$path} was modified." . PHP_EOL;
        });

        $listener->onAnything(function ($event, $resource, $path) {
            switch ($event->getCode()) {
                case Event::RESOURCE_DELETED:
                    echo "{$path} was deleted (from anything listener)." . PHP_EOL;
                    break;
                case Event::RESOURCE_MODIFIED:
                    echo "{$path} was modified (from anything listener)." . PHP_EOL;
                    break;
                case Event::RESOURCE_CREATED:
                    echo "{$path} was created (from anything listener)." . PHP_EOL;
                    break;
            }
        });

        $watcher->start();
    }
}
