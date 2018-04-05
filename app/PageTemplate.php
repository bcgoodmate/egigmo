<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageTemplate extends BaseModel
{
    protected $fillable = [
        'name',
        'content_path',
        'is_draft',
        'default_template',
        'user_id',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $casts = [
        'is_draft' => 'boolean',
    ];


    public function template(){
        return $this->hasMany(Page::class);
    }
}
