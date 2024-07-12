<?php

namespace App\Filament\Resources\EnqueueTaskLogResource\Pages;

use App\Filament\Resources\EnqueueTaskLogResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEnqueueTaskLog extends CreateRecord
{
    protected static string $resource = EnqueueTaskLogResource::class;
}
