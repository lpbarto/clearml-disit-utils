<?php

namespace App\Filament\Resources\EndpointMappingResource\Pages;

use App\Filament\Resources\EndpointMappingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEndpointMappings extends ListRecords
{
    protected static string $resource = EndpointMappingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
