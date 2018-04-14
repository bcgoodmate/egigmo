<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BaseModel extends Model
{
    protected static $uuid = true;
    protected static function boot()
    {
        parent::boot();

        if(static::$uuid) {
            static::creating(function ($model) {
                if(!isset($model->{$model->getKeyName()})){
                    $model->{$model->getKeyName()} = static::generateId();
                }
            });
        }
    }

    public function getId()
    {
        if ( ! $this->id) {
            $this->id = static::generateId();
        }

        return $this->id;
    }

    public static function generateId()
    {
        return Str::uuid();
    }

}
