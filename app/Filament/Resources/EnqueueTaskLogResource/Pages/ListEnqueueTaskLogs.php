<?php

namespace App\Filament\Resources\EnqueueTaskLogResource\Pages;

use App\Filament\Resources\EnqueueTaskLogResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEnqueueTaskLogs extends ListRecords
{
    protected static string $resource = EnqueueTaskLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
//            Actions\CreateAction::make(),
        ];
    }
}
