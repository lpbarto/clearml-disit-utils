<?php

namespace App\Filament\Resources\EnqueueTaskLogResource\Pages;

use App\Filament\Resources\EnqueueTaskLogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEnqueueTaskLog extends EditRecord
{
    protected static string $resource = EnqueueTaskLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
