<?php

namespace App\Filament\Resources\ServingMachineMappingResource\Pages;

use App\Filament\Resources\ServingMachineMappingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServingMachineMappings extends ListRecords
{
    protected static string $resource = ServingMachineMappingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
