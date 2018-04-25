<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;
use App\PageTemplate;
use Liquid\Template;

class RouteHandlerController extends Controller
{

    public function index(Request $request)
    {

        if ($request->path() == '/') {
            $page = Page::where('is_start_page', true)->firstOrFail();
        } else {
            $page = Page::where('content_path', '/' . $request->path() . '.html')->firstOrFail();
        }

        if ($page->default_template) {
            $template = PageTemplate::where('default_template', true)->first();
            if ($template) {
                $page_path = public_path() . '/site' . $page->content_path;
                $template_path = public_path() . '/site' . $template->content_path;
                $pageview = $this->renderTemplate($page, $page_path, $template_path);
            } else {
                $page_path = public_path() . '/site' . $page->content_path;
                $pageview = $this->render($page, $page_path);
            }
        } elseif ($page->page_template_id) {
            $template = PageTemplate::where('id', $page->page_template_id)->first();
            $page_path = public_path() . '/site' . $page->content_path;
            $template_path = public_path() . '/site' . $template->content_path;
            $pageview = $this->renderTemplate($page, $page_path, $template_path);
        } else {
            $page_path = public_path() . '/site' . $page->content_path;
            $pageview = $this->render($page, $page_path);
        }

        return view('frontend.index', compact('pageview'));

    }

    protected function renderTemplate($page, $path, $template_path = null)
    {

        if (!file_exists($path) && !str_contains($path, ['.html', '.htm'])) {
            return $this->render($path);
        }

        $template_page = file_get_contents($template_path);
        $template_page = str_replace('<!--<notscript', '<script', $template_page);
        $template_page = str_replace('</notscript>-->', '</script>', $template_page);
        $template = new Template();
        $template->parse($template_page);
        $page_content = $this->render($page, $path);

        $renderer = array(
            'tag_pagetitle' => $page->page_title,
            'tag_pagedescription' => $page->page_description,
            'tag_pagename' => $page->name,
            'tag_pagecontent' => $page_content
        );

        $data = $template->render($renderer);

        return $data;
    }

    protected function render($page_data, $path, $template = null)
    {

        if (!file_exists($path) && !str_contains($path, ['.html', '.htm'])) {
            if (!is_dir($path)) {
                abort(404);
            } else {
                if (file_exists($path . '/index.html')) {
                    $page = file_get_contents($path . '/index.html');
                } else {
                    if (file_exists($path . '/index.htm')) {
                        $page = file_get_contents($path . '/index.htm');
                    } else {
                        abort(404);
                    }
                }
            }
        } else {
            if (file_exists($path) && str_contains($path, ['.html', '.htm'])) {
                $page = file_get_contents($path);
            } else {
                abort(404);
            }
        }
        $page = str_replace('<!--<notscript', '<script', $page);
        $page = str_replace('</notscript>-->', '</script>', $page);

        $template = new Template();
        $template->parse($page);

        $page_render = array(
            'page_title' => $page_data->page_title,
            'page_description' => $page_data->page_description,
            'page_name' => $page_data->name,
        );

        $data = $template->render($page_render);

        return $data;
    }
}
