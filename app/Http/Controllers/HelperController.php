<?php

namespace App\Http\Controllers;


class HelperController extends Controller
{

    public $directories = array();
    public $path_files = array();

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

    public function recursiveFilePathIterator($current_dir,$array = array()){
        foreach($array as $key => $val) {
            $current_dir = $current_dir .'/'. $key;
            if(empty($val)){
                $this->recursiveDirectoryPathIterator($current_dir,$val);
            }else{
                array_push($this->path_files, $current_dir);
            }
        }
    }
    public function recursiveDirectoryFilePath($dirs){
        foreach($dirs as $key => $val) {
            if(!strrpos($key,'.html') && !strrpos($key,'.htm') && !strrpos($key,'.css') && !strrpos($key,'.js')){
                $this->recursiveFilePathIterator($key,$val);
            }else{
                array_push($this->path_files, $key);
            }
        }
        return $this->path_files;
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
