<?php

namespace App\Http\Controllers;

use File;
use View;
use SplFileInfo;
use DirectoryIterator;
use Illuminate\Http\Request;

class AdminPageBuilderController extends Controller
{

    public $directories = array();

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
        $directories = $this->recursiveDirectoryPath($this->recursiveDirectoryOnlyIterator('site'));
        return view("admin.pagebuilder.create",compact('directories'));
    }

    public function recursiveDirectoryPathIterator($current_dir,$array = array()){
        foreach($array as $key => $val) {
            $current_dir = $current_dir .'/'. $key;
            array_push($this->directories, $current_dir);
            if($val){
                $this->recursiveDirectoryPathIterator($current_dir,$val);
            }
        }
    }
    public function recursiveDirectoryPath($dirs){
        foreach($dirs as $key => $val) {
            array_push($this->directories, $key);
            if($val){
                $this->recursiveDirectoryPathIterator($key,$val);
            }
        }
        return $this->directories;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $page_title = $request -> page_title;
        $page_body = $request -> page_body;
        $folder = '/'.$request->folder;
        $page_name = str_slug($page_title , '-').'.html';

        File::put(public_path() . '/site'.$folder.'/'.$page_name, View::make('admin.pagebuilder.templates.create',compact('page_title','page_body')));

        return 'ok';
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

    public function recursiveDirectoryIterator ($directory = null, $files = array()) {
        $iterator = new \DirectoryIterator ( $directory );

        foreach ( $iterator as $info ) {
            if ($info->isFile ()) {
                $files [$info->__toString ()] = $info;
            } elseif (!$info->isDot ()) {
                $list = array($info->__toString () => $this->recursiveDirectoryIterator(
                    $directory.DIRECTORY_SEPARATOR.$info->__toString ()
                ));
                if(!empty($files))
                    $files = array_merge_recursive($files, $list);
                else {
                    $files = $list;
                }
            }
        }
        return $files;
    }

    public function recursiveDirectoryOnlyIterator ($directory = null, $files = array()) {
        $iterator = new \DirectoryIterator ( $directory );

        foreach ( $iterator as $info ) {
            if ($info->isFile ()) {
                continue;
            } elseif (!$info->isDot ()) {
                $list = array($info->__toString () => $this->recursiveDirectoryOnlyIterator(
                    $directory.DIRECTORY_SEPARATOR.$info->__toString ()
                ));
                if(!empty($files))
                    $files = array_merge_recursive($files, $list);
                else {
                    $files = $list;
                }
            }
        }
        return $files;
    }

}