<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EndpointMapping extends Model
{
    use HasFactory;

    protected $table = 'machine_mappings';

    protected $fillable = [
        'serving_machine_task_id',
        'endpoint',
        'hashed_machine_id',
        'description',
    ];
}
