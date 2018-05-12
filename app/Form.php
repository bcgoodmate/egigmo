<?php

namespace App;

use App\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Form extends BaseModel
{
    use SoftDeletes;

    public $incrementing = false; // Disable eloquent auto increment since we use UUID format for the table id and to return id of the last inserted id instead of 0

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
        'send_autoresponder_id',
        'fields',
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
