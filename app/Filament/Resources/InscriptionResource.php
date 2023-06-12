<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InscriptionResource\Pages;
use App\Filament\Resources\InscriptionResource\RelationManagers;
use App\Models\Inscription;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Database\Eloquent\Model;

class InscriptionResource extends Resource
{
    protected static ?string $model = Inscription::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('uuid')
                    ->required()
                    ->maxLength(36),

                Select::make('user_id')
                    ->required()
                    ->searchable(['name', 'cpf'])
                    ->label('Usuário')
                    ->placeholder('Pesquise por nome ou cpf')
                    ->relationship('user', 'name')
                    ->getOptionLabelFromRecordUsing(fn (Model $record) => "{$record->name} - {$record->cpf}"),

                Forms\Components\TextInput::make('event_id')
                    ->required(),
                Forms\Components\TextInput::make('status')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //Tables\Columns\TextColumn::make('uuid'),
                Tables\Columns\TextColumn::make('user.name'),
                Tables\Columns\TextColumn::make('event.name'),
                Tables\Columns\TextColumn::make('status')
                ->formatStateUsing(function (string $state){
                    return Inscription::getStatus($state);
                }),
                Tables\Columns\TextColumn::make('created_at')->dateTime('d/m/y H:i')->label('CADASTRO'),

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
            'index' => Pages\ListInscriptions::route('/'),
            //'create' => Pages\CreateInscription::route('/create'),
            'view' => Pages\ViewInscription::route('/{record}'),
            'edit' => Pages\EditInscription::route('/{record}/edit'),
        ];
    }
}
