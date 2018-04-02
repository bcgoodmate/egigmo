<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Liquid\Template;

class TestController extends Controller
{
    public  function  index(Request $request){
        $getUri = $request->path();

        $uri = $getUri != '' ? $getUri : 'index';

        $page = null;
        $path = 'site/'.$uri;

        $data = $this->render($path);

        return view('test',compact('data'));
    }

    public  function  indexSub(Request $request){
        $getUri = $request->path();

        $uri = $getUri != '' ? $getUri : 'index';

        $page = null;
        $path = 'site/'.$uri;

        $data = $this->render($path);

        return view('test',compact('data'));
    }

    protected function render($path){

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
