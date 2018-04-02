<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;

class AdminPageBuilderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.pagebuilder.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // @source https://github.com/laravel/framework/issues/14517

        $template = "frontend._templates.app";
        $contents = "";
        $view = "about/company";
        $path = $this->viewPath($view);

        $this->createDir($path);

        $contents .= "@extends('".$template."')\n\n";
        $contents .= "@section('content')\n";
        $contents .= "\tInsert your code herexxxx..\n";
        $contents .= "@endsection";

        if (File::exists($path))
        {
            // Append to a file
            File::append($path, $contents);

            // Delete the file at a given path
            // File::delete('path');

            // $this->error("File {$path} already exists!");
            // return;
        } else {        
            // Write the contents of a file
            $bytes_written = File::put($path, $contents);  
            if ($bytes_written === false)
            {
                die("Error writing to file");
            }

            // $this->info("File {$path} created.");
        }

        // return view("admin.pagebuilder.create");
    }  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Get the view full path.
     *
     * @param string $view
     *
     * @return string
     */
    public function viewPath($view)
    {
        $view = str_replace('.', '/', $view) . '.blade.php';

        $path = "/var/www/html/resources/views/frontend/{$view}";

        return $path;
    }

    /**
     * Create view directory if not exists.
     *
     * @param $path
     */
    public function createDir($path)
    {
        $dir = dirname($path);
        
        if (!file_exists($dir))
        {
            mkdir($dir, 0777, true);
        }
    }
}
