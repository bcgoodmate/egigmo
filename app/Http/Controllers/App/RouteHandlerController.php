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

        $page = Page::where('content_path', '/' . $request->path() . '.html')->firstOrFail();

        if ($page->default_template) {
            $template = PageTemplate::where('default_template', true)->first();
            $page_path = public_path() . '/site' . $page->content_path;
            $template_path = public_path() . '/site' . $template->content_path;

            $pageview = $this->renderTemplate($page_path, $template_path);
        } elseif ($page->page_template_id) {
            $template = PageTemplate::where('id', $page->page_template_id)->first();
            $page_path = public_path() . '/site' . $page->content_path;
            $template_path = public_path() . '/site' . $template->content_path;

            $pageview = $this->renderTemplate($page_path, $template_path);
        } else {
            $page_path = public_path() . '/site' . $page->content_path;
            $pageview = $this->render($page, $page_path);
        }

        return view('frontend.index', compact('pageview'));

    }

    protected function renderTemplate($path, $template_path = null)
    {

        if (!file_exists($template_path . '.html') && !file_exists($template_path . '.htm')) {
            return $this->render($path);
        }

        $template_page = file_get_contents($template_path . '.html');
        $template = new Template();
        $template->parse($template_page);
        $page_content = $this->render($path);
        $data = $template->render(array('tag_pagecontent' => $page_content));

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
