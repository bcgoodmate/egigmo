<?php

namespace App\Helpers;


class SiteDirectory
{

    public static function removeFile($path){
        if (file_exists($path)) {
            unlink($path);
            return true;
        }
        return false;
    }
}