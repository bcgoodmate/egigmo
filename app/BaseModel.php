<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    protected static $uuid = true;
    protected static function boot()
    {
        parent::boot();

        if(static::$uuid) {
            static::creating(function ($model) {
                if(!isset($model->{$model->getKeyName()})){
                    $model->{$model->getKeyName()} = Str::uuid();
                }
            });
        }
    }
}
