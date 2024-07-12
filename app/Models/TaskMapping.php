<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskMapping extends Model
{
    use HasFactory;

    protected $table = 'task_mappings';

    protected $fillable = [
        'hashed_task_id',
        'task_id',
        'description',
    ];
}
