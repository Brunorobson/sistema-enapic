<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CriteriaResource\Pages;
use App\Filament\Resources\CriteriaResource\RelationManagers;
use App\Models\Criteria;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CriteriaResource extends Resource
{
    protected static ?string $model = Criteria::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?int $navigationSort = 10;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('axis_id')
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('active')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('axis_id'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListCriterias::route('/'),
            'create' => Pages\CreateCriteria::route('/create'),
            'view' => Pages\ViewCriteria::route('/{record}'),
            'edit' => Pages\EditCriteria::route('/{record}/edit'),
        ];
    }
}
