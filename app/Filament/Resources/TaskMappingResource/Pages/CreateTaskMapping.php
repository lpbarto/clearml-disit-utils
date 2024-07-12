<?php

namespace App\Filament\Resources\TaskMappingResource\Pages;

use App\Filament\Resources\TaskMappingResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTaskMapping extends CreateRecord
{
    protected static string $resource = TaskMappingResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['hashed_task_id'] = hash('sha256', $data['task_id']);

        return $data;
    }
}
