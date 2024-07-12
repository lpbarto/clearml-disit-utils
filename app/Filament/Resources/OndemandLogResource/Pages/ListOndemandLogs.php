<?php

namespace App\Filament\Resources\OndemandLogResource\Pages;

use App\Filament\Resources\OndemandLogResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOndemandLogs extends ListRecords
{
    protected static string $resource = OndemandLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
//            Actions\CreateAction::make(),
        ];
    }
}
