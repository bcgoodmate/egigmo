<?php

use Illuminate\Database\Seeder;
use App\PageTemplate;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;

class PageTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pageTemplates = PageTemplate::first();
        if (empty($pageTemplates)) {
            $body = '<!DOCTYPE html>
                                    <html lang="en">
                                    <head>
                                        <meta charset="utf-8">
                                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                        <meta name="viewport" content="width=device-width, initial-scale=1">
                                        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
                                        <title>foreverBC</title>
                                        <link href="/site/_source/css/main.css" rel="stylesheet">
                                    </head>
                                    <body>
                                        {{tag_pagecontent}}
                                    </body>
                                    </html>';
            PageTemplate::create([
                'name' => 'Home',
                'content_path' => '/template/home.html',
                'content_html' => $body,
                'default_template' => true,
            ]);

            if (!file_exists(public_path() . "/site/template")) {
                mkdir(public_path() . "/site/template", 0700, true);
            }
            if (!file_exists(public_path() . "/site/_source/css")) {
                mkdir(public_path() . "/site/_source/css", 0700, true);
            }
            $file_path = public_path() . '/site/template/home.html';
            File::put(public_path() . '/site/_source/css/main.css','h1{text-align:center; height: 100vh; display:flex; justify-content:center; align-items:center;}');
            File::put($file_path,
                View::make('admin.pagebuilder.builder-generator.create-template', compact('body')));
        }


    }
}
