<?php

namespace App\Filament\Resources\TaskMappingResource\Pages;

use App\Filament\Resources\TaskMappingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTaskMappings extends ListRecords
{
    protected static string $resource = TaskMappingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
