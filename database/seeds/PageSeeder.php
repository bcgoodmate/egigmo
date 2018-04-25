<?php

use Illuminate\Database\Seeder;
use App\Page;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = Page::first();
        if (empty($pages)) {
            $name = 'Home';
            $page_desc = '';
            $page_title = 'forverBC | home';
            $page_body = '<!DOCTYPE html>
                        <html>
                        <head></head>
                        <body>
                            <h1>Welcome to forever BC</h1>
                        </body>
                        </html>';

            Page::create([
                'name' => $name,
                'slug' => 'home',
                'is_start_page' => true,
                'content_path' => '/home.html',
                'default_template' => true,
                'content_html' => $page_body,
                'page_title' => 'forverBC | home',
                'page_url' => '/',
            ]);

            $file_path = public_path() . '/site/home.html';
            File::put($file_path,
                View::make('admin.pagebuilder.builder-generator.create-page',
                    compact('page_title', 'page_body', 'page_desc', 'name')));
        }
    }
}
