<?php

namespace App\Filament\Resources\TaskMappingResource\Pages;

use App\Filament\Resources\TaskMappingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTaskMapping extends EditRecord
{
    protected static string $resource = TaskMappingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
