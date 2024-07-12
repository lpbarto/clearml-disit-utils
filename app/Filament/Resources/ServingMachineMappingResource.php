<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServingMachineMappingResource\Pages;
use App\Filament\Resources\ServingMachineMappingResource\RelationManagers;
use App\Models\ServingMachineMapping;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServingMachineMappingResource extends Resource
{
    protected static ?string $model = ServingMachineMapping::class;

    protected static ?string $navigationIcon = 'heroicon-o-server-stack';

    protected static ?int $navigationSort = 3;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('serving_machine_task_id')
                    ->label('Serving Machine Task ID')
                    ->required()
                    ->unique(),
                Forms\Components\TextInput::make('base_url')
                    ->url()
                    ->required()
                    ->label('Base URL')
                    ->hint('URL base del servizio di serving della macchina')
                    ->placeholder('http://machineip:8080/serve'),
                Forms\Components\TextInput::make('description')
                    ->label('Descrizione'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('serving_machine_task_id'),
                Tables\Columns\TextColumn::make('base_url'),
                Tables\Columns\TextColumn::make('description'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListServingMachineMappings::route('/'),
            'create' => Pages\CreateServingMachineMapping::route('/create'),
            'edit' => Pages\EditServingMachineMapping::route('/{record}/edit'),
        ];
    }
}
