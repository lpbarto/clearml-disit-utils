<?php

namespace App\Filament\Resources\EnqueueTaskLogResource\Pages;

use App\Filament\Resources\EnqueueTaskLogResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewEnqueueTaskLog extends ViewRecord
{
    protected static string $resource = EnqueueTaskLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
