<?php

namespace App\Workflow\Eloquent;

use Jenssegers\Mongodb\Eloquent\Model;

class HistoryStep extends Model
{
    protected $table = 'oswf_historystep';

    protected $fillable = array(
        'entry_id',
        'step_id',
        'previous_id',
        'start_time',
        'action_id',
        'owner',
        'status',
        'comments',
        'caller'
    );
}
