<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PageTemplate;

class PageBuilderHelperController extends Controller
{

    public static function updatePageBuilder(){
        return true;
        /*self::pdateTemplate();
        self::updatePage();*/
    }

    protected function updateTemplate(){
        $templates = $this->recursiveDirectoryFilePath($this->recursiveDirectoryIterator('site/template'));
        //PageTemplate =

    }

    protected function updatePage(){

    }

}
