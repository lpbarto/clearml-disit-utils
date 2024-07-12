<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EnqueueTaskLogResource\Pages;
use App\Filament\Resources\EnqueueTaskLogResource\RelationManagers;
use App\Models\EnqueueTaskLog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EnqueueTaskLogResource extends Resource
{
    protected static ?string $model = EnqueueTaskLog::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DateTimePicker::make('created_at')
                    ->label('Data Creazione')
                    ->format('d/m/y H:i:s'),
                Forms\Components\TextInput::make('task_id')
                    ->label('Task ID'),
                Forms\Components\ToggleButtons::make('status')
                    ->label('Successo')
                    ->boolean()
                    ->inline(),
                Forms\Components\Textarea::make('details')
                    ->label('Dettaglio'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('task_id'),
                Tables\Columns\IconColumn::make('status')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d/m/y H:i:s'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
//                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEnqueueTaskLogs::route('/'),
//            'create' => Pages\CreateEnqueueTaskLog::route('/create'),
            'view' => Pages\ViewEnqueueTaskLog::route('/{record}'),
//            'edit' => Pages\EditEnqueueTaskLog::route('/{record}/edit'),
        ];
    }
}
