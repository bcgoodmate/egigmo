<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Liquid\Template;

class TestController extends Controller
{
    public  function index(Request $request){
        $getUri = $request->path();

        $uri = $getUri != '' ? $getUri : 'index';

        $page = null;
        $path = 'site/'.$uri;
        $template = 'example';
        $template_path = 'site/template/'.$template;
        $data = null;

        if($template){
            $data = $this->renderTemplate($path,$template_path);
        }else{
            $data = $this->render($path);
        }


        return view('frontend.index',compact('data'));
    }

    protected function renderTemplate($path, $template_path = null){

        if(!file_exists($template_path.'.html') && !file_exists($template_path.'.htm')) return $this->render($path);

        $template_page = file_get_contents($template_path.'.html');
        $template = new Template();
        $template->parse($template_page);
        $page_content =  $this->render($path);
        $data = $template->render(array('tag_pagecontent' => $page_content));

        return $data;
    }

    protected function render($path,$template = null){

        if(!file_exists($path.'.html') && !file_exists($path.'.htm')){
            if (!is_dir($path)) {
                abort(404);
            }else{
                if(file_exists($path.'/index.html')){
                    $page = file_get_contents($path.'/index.html');
                }else if(file_exists($path.'/index.htm')){
                    $page = file_get_contents($path.'/index.htm');
                }else{
                    abort(404);
                }
            }
        }else{
            if(file_exists($path.'.html')){
                $page = file_get_contents($path.'.html');
            }else if(file_exists($path.'.htm')){
                $page = file_get_contents($path.'.htm');
            }else{
                abort(404);
            }
        }

        $template = new Template();
        $template->parse($page);

        $products = array(['name'=>'Jeep'],['name'=>'Motor']);

        $data = $template->render(array('name' => 'Alex','products'=>$products));

        return $data;
    }

}
