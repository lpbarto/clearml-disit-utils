<?php

namespace App\Filament\Resources\EndpointMappingResource\Pages;

use App\Filament\Resources\EndpointMappingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEndpointMapping extends EditRecord
{
    protected static string $resource = EndpointMappingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
