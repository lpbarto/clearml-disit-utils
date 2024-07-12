<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnqueueTaskLog extends Model
{
    use HasFactory;

    protected $table = 'enqueue_task_logs';

    protected $fillable = [
        'task_id',
        'status',
        'details',
        'created_at',
    ];


}
