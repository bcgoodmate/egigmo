<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Filesystem\Filesystem;
use JasonLewis\ResourceWatcher\Event;
use JasonLewis\ResourceWatcher\Tracker;
use JasonLewis\ResourceWatcher\Watcher;

use App\Page;
use App\PageTemplate;

class FileSystemWatcher extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */

    private $deleted = null;

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
        $watcher = new Watcher($tracker, $files);


        $listener = $watcher->watch('public/site');


        $listener->onCreate(function ($resource, $path) {
            echo "{$path} was created." . PHP_EOL;
            if (ends_with($path, '.html') || ends_with($path, '.htm')) {
                echo "file created." . PHP_EOL;

                if (strpos($path, 'public\site\template') !== false) {
                    echo "template created." . PHP_EOL;

                    list($root, $filepath) = explode('\public\site\template\\', $path);

                    if (ends_with($path, '.html')) {
                        $arr = explode('\\', str_replace(".html","",$path));
                        $name = end($arr);
                    } else {
                        $arr = explode('\\', str_replace(".htm","",$path));
                        $name = end($arr);
                    }

                    $page = new PageTemplate();
                    $page->name =  $name;
                    $page->content_path = $filepath;
                    $page->save();


                } else {
                    echo 'page created.' . PHP_EOL;

                    list($root, $filepath) = explode('\public\site\\', $path);

                    if (ends_with($path, '.html')) {
                        $arr = explode('\\', str_replace(".html","",$path));
                        $url = str_replace(".html","",$filepath);
                        $name = end($arr);
                    } else {
                        $arr = explode('\\', str_replace(".htm","",$path));
                        $url = str_replace(".htm","",$filepath);
                        $name = end($arr);
                    }

                    $page = new Page();
                    $page->name = $name;
                    $page->slug = str_slug($name);
                    $page->content_path = $filepath;
                    $page->page_url = $url;
                    $page->save();

                }
            }
        });

        $listener->onDelete(function ($resource, $path) {
            echo "{$path} was deleted." . PHP_EOL;
            if (substr($path, -5) == '.html' || substr($path, -4) == '.htm') {
                echo "file deleted." . PHP_EOL;

                if (strpos($path, 'public\site\template') !== false) {
                    echo "template deleted." . PHP_EOL;
                } else {
                    echo 'page deleted.' . PHP_EOL;
                }
            }
        });

        $listener->onModify(function ($resource, $path) {
            echo "{$path} was modified." . PHP_EOL;
        });

        /*$listener->onAnything(function ($event, $resource, $path) {
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
        });*/

        $watcher->start();
    }
}
