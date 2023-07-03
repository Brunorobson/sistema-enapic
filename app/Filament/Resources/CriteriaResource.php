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
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CriteriaResource extends Resource
{
    protected static ?string $model = Criteria::class;

    protected static ?string $modelLabel = 'Critério';
    protected static ?string $pluralModelLabel = 'Critérios de Avaliação';

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationGroup = 'Administração';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('axis_id')
                    ->label('Eixo')
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->label('Nome')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('active')
                    ->label('Status')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('axis.name')->label('EIXO')
                ->formatStateUsing(function (string $state){
                    return substr($state, 0, 6);
                }),
                Tables\Columns\TextColumn::make('name')
                    ->sortable()->searchable()
                    ->label('NOME'),
                Tables\Columns\IconColumn::make('active')
                    ->boolean()
                    ->label('STATUS'),
            ])
            ->filters([
                SelectFilter::make('axis')
                ->label('Critério')
                ->placeholder("Todos")
                ->relationship('axis', 'name'),

                SelectFilter::make('active')
                ->options([
                    '1' => 'Ativa',
                    '0' => 'Desativada',
                ])
                ->label('Pesquisar por Status')
                ->placeholder('Selecione')
                    ])
            ->actions([
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
            'edit' => Pages\EditCriteria::route('/{record}/edit'),
        ];
    }
}
