<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TaskMappingResource\Pages;
use App\Filament\Resources\TaskMappingResource\RelationManagers;
use App\Models\TaskMapping;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TaskMappingResource extends Resource
{
    protected static ?string $model = TaskMapping::class;

    protected static ?string $navigationIcon = 'heroicon-o-queue-list';

    protected static ?int $navigationSort = 1;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('task_id')
                    ->label('Task ID')
                    ->required()
                    ->unique()
                    ->disabledOn('edit'),
                Forms\Components\TextInput::make('hashed_task_id')
                    ->label('Hashed Task ID')
                    ->hint('Id pubblico da utilizzare per identificare il task')
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
                Tables\Columns\TextColumn::make('hashed_task_id'),
                Tables\Columns\TextColumn::make('task_id'),
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
            'index' => Pages\ListTaskMappings::route('/'),
            'create' => Pages\CreateTaskMapping::route('/create'),
            'edit' => Pages\EditTaskMapping::route('/{record}/edit'),
        ];
    }
}
