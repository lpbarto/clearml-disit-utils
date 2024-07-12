<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EndpointMappingResource\Pages;
use App\Filament\Resources\EndpointMappingResource\RelationManagers;
use App\Models\EndpointMapping;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EndpointMappingResource extends Resource
{
    protected static ?string $model = EndpointMapping::class;

    protected static ?string $navigationIcon = 'heroicon-o-link';

    protected static ?int $navigationSort = 2;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('serving_machine_task_id')
                    ->label('Serving Machine Task ID')
                    ->required()
                    ->disabledOn('edit'),
                Forms\Components\TextInput::make('endpoint')
                    ->label('Nome Endpoint')
                    ->required()
                    ->disabledOn('edit'),
                Forms\Components\TextInput::make('hashed_machine_id')
                    ->label('Hashed Machine ID')
                    ->hint('Id pubblico da utilizzare per identificare la macchina servente')
                    ->hiddenOn('create')
                    ->disabledOn('edit'),
                Forms\Components\TextInput::make('description')
                    ->label('Descrizione'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('serving_machine_task_id'),
                Tables\Columns\TextColumn::make('endpoint'),
                Tables\Columns\TextColumn::make('hashed_machine_id')
                    ->limit(30),
                Tables\Columns\TextColumn::make('description')
                    ->limit(20),
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
            'index' => Pages\ListEndpointMappings::route('/'),
            'create' => Pages\CreateEndpointMapping::route('/create'),
            'edit' => Pages\EditEndpointMapping::route('/{record}/edit'),
        ];
    }
}
