<?php

namespace App\Filament\Resources\OndemandLogResource\Pages;

use App\Filament\Resources\OndemandLogResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewOndemandLog extends ViewRecord
{
    protected static string $resource = OndemandLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
//            Actions\EditAction::make(),
        ];
    }
}
