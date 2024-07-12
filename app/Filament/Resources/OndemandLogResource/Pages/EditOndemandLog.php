<?php

namespace App\Filament\Resources\OndemandLogResource\Pages;

use App\Filament\Resources\OndemandLogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOndemandLog extends EditRecord
{
    protected static string $resource = OndemandLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
