<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MachineMapping extends Model
{
    use HasFactory;

    protected $fillable = [
        'serving_machine_task_id',
        'endpoint',
        'hashed_machine_id',
        'description',
    ];
}
