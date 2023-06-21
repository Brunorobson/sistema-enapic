<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AvaliationResource\Pages;
use App\Filament\Resources\AvaliationResource\RelationManagers;
use App\Models\Avaliation;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AvaliationResource extends Resource
{
    protected static ?string $model = Avaliation::class;
    protected static ?string $modelLabel = 'Avaliação';
    protected static ?string $pluralModelLabel = 'Avaliações';


    protected static ?string $navigationIcon = 'heroicon-o-star';

    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                    ->required()
                    ->label('PARTICIPANTE'),
                Forms\Components\TextInput::make('submission_id')
                    ->required()
                    ->label('SUBMISSÃO'),
                Forms\Components\TextInput::make('total')
                    ->required()
                    ->label('Total'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')->label('PARTICIPANTE')->searchable(),
                Tables\Columns\TextColumn::make('submissions')->label('SUBMISSÃO')->searchable(),
                Tables\Columns\TextColumn::make('user.evaluators')->label('AVALIADOR')->searchable(),
                Tables\Columns\TextColumn::make('total'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('AVALIADO')
                    ->dateTime('d/m/Y'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label('Editar'),
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
            'index' => Pages\ListAvaliations::route('/'),
            'create' => Pages\CreateAvaliation::route('/create'),
            'edit' => Pages\EditAvaliation::route('/{record}/edit'),
        ];
    }
}
