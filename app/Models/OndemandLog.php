<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OndemandLog extends Model
{
    use HasFactory;

    protected $table = 'ondemand_logs';

    protected $fillable = [
        'serving_machine_task_id',
        'endpoint',
        'status',
        'details',
        'created_at',
    ];

    protected $casts = [
        'status' => 'boolean'
    ];
}
