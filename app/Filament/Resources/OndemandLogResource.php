<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OndemandLogResource\Pages;
use App\Filament\Resources\OndemandLogResource\RelationManagers;
use App\Models\OndemandLog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OndemandLogResource extends Resource
{
    protected static ?string $model = OndemandLog::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?int $navigationSort = 5;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DateTimePicker::make('created_at')
                    ->label('Data Creazione')
                    ->format('d/m/y H:i:s'),
                Forms\Components\TextInput::make('serving_machine_task_id')
                    ->label('Serving Machine Task ID'),
                Forms\Components\TextInput::make('endpoint')
                    ->label('Nome Endpoint'),
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
                Tables\Columns\TextColumn::make('serving_machine_task_id'),
                Tables\Columns\TextColumn::make('endpoint'),
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
            'index' => Pages\ListOndemandLogs::route('/'),
//            'create' => Pages\CreateOndemandLog::route('/create'),
            'view' => Pages\ViewOndemandLog::route('/{record}'),
//            'edit' => Pages\EditOndemandLog::route('/{record}/edit'),
        ];
    }
}
