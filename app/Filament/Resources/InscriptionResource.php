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
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Database\Eloquent\Model;

class InscriptionResource extends Resource
{
    protected static ?string $model = Inscription::class;
    protected static ?string $modelLabel = 'Inscrição';
    protected static ?string $pluralModelLabel = 'Inscrições';


    protected static ?string $navigationIcon = 'heroicon-o-user-add';

    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('uuid'),

                Select::make('user_id')
                    ->required()
                    ->disabled()
                    ->label('Participante')
                    ->relationship('user', 'name')
                    ->getOptionLabelFromRecordUsing(fn (Model $record) => "{$record->name} - {$record->cpf}"),

                Select::make('event_id')
                    ->required()
                    ->disabled()
                    ->label('Evento')
                    ->relationship('event', 'name'),

                Select::make('status')
                    ->required()
                    ->placeholder('Selecione')
                    ->options([
                        'P' => 'Pendente',
                        'A' => 'Ativa',
                        'C' => 'Cancelada'
                    ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //Tables\Columns\TextColumn::make('uuid'),
                Tables\Columns\TextColumn::make('user.name')
                ->label('PARTICIPANTE')
                ->searchable(),
                Tables\Columns\TextColumn::make('user.cpf')
                ->label('CPF')
                ->searchable(),
                Tables\Columns\TextColumn::make('event.name')
                ->label('EVENTO'),
                Tables\Columns\BadgeColumn::make('status')
                    ->label('STATUS')
                    ->formatStateUsing(function (string $state){
                        return Inscription::getStatus($state);
                    })
                    ->colors([
                        'primary',
                        'secondary' => 'draft',
                        'warning' => 'reviewing']),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d/m/Y H:i')
                    ->label('CADASTRO'),

            ])
            ->filters([
                SelectFilter::make('status')
                ->options([
                    'P' => 'Pendente',
                    'A' => 'Ativa',
                    'C' => 'Cancelada'
                ])
                ->label('Pesquisar por Status')
                ->placeholder('Selecione')
                    ])
            ->actions([
                //Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make()->label('Editar'),
            ])
            ->bulkActions([
                //Tables\Actions\DeleteBulkAction::make(),
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
            //'view' => Pages\ViewInscription::route('/{record}'),
            'edit' => Pages\EditInscription::route('/{record}/edit'),
        ];
    }
}
