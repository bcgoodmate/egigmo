<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends BaseModel
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
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
        'id'=>'string'
    ];

    public function rules(){
        return [
            'name' => 'required'
        ];
    }

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

    public function template()
    {
        return $this->belongsTo(PageTemplate::class,'page_template_id','id');
    }

    public static function getActivePage()
    {
        return self::where('is_draft', false);
    }

}
