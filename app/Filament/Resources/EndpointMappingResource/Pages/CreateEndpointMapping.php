<?php

namespace App\Filament\Resources\EndpointMappingResource\Pages;

use App\Filament\Resources\EndpointMappingResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEndpointMapping extends CreateRecord
{
    protected static string $resource = EndpointMappingResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['hashed_machine_id'] = hash('sha256', $data['serving_machine_task_id']);

        return $data;
    }
}
