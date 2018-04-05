<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends BaseModel
{
    protected $fillable = [
        'name',
        'content_path',
        'page_template_id',
        'is_draft',
        'default_template',
        'page_title',
        'page_description',
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
        return $this->belongsTo(PageTemplate::class);
    }
}
