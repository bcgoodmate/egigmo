<?php

namespace App;

use App\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Form extends BaseModel
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'workflow_id',
        'zone_id',
        'affiliate_id',
        'create_opportunity',
        'opportunity_type_id',
        'stage_type_id',
        'probability',
        'amount',
        'cycle_type_id',
        'set_wholesale',
        'send_autoresponder',
        'send_autoresponder_id'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $casts = [
        'id'=>'string'
    ];
}
