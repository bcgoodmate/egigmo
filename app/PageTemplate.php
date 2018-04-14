<?php

namespace App;

use App\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class PageTemplate extends BaseModel
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'content_path',
        'is_draft',
        'default_template',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $casts = [
        'is_draft' => 'boolean',
        'id' => 'string'
    ];

    public function getBodyAttribute()
    {
        if (!$this->content_path) {
            return null;
        }
        $path = public_path() . '/site/' . $this->content_path;
        if (file_exists($path)) {
            $body = file_get_contents($path);
        } else {
            return null;
        }

        return $body;
    }

    public function setContentHtmlAttribute($value)
    {
        $path = public_path() . '/site/' . $value;
        if (file_exists($path)) {
            $body = file_get_contents($path);
        } else {
            $body = '{tag_pagecontent}';
        }

        $this->attributes['content_html'] = $body;
    }

    public function setNameAttribute($value)
    {
        //https://stackoverflow.com/questions/16136519/php-rename-file-name-if-exists-append-number-to-end

        $this->attributes['name'] = $value;
    }

    public function rules()
    {
        return [
            'name' => 'required|unique:page_templates',
        ];
    }

    public function pages()
    {
        return $this->hasMany(Page::class);
    }

    /**
     * @return array|null
     */
    public static function getActiveTemplate()
    {
        if (self::hasDefaultTemplate()) {
            $default = array('default' => 'default template');
            $templates = array_merge($default, self::where('is_draft', false)->pluck('name', 'id')->toArray());
        } else {
            $templates = self::where('is_draft', false)->pluck('name', 'id')->toArray();
        }

        return $templates;
    }

    public static function hasDefaultTemplate()
    {
        $template = self::where('default_template', true)->first();
        if ($template) {
            return $template;
        }

        return false;
    }

}
