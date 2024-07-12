<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServingMachineMapping extends Model
{
    use HasFactory;

    protected $table = 'machine_mappings';
    protected $fillable = [
        'serving_machine_task_id',
        'base_url',
        'description',
    ];
}
