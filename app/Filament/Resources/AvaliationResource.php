<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AvaliationResource\Pages;
use App\Filament\Resources\AvaliationResource\RelationManagers\ItemsRelationManager;
use App\Models\Avaliation;
use App\Models\Submission;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\ViewField;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\ViewColumn;
use Filament\Tables\Filters\SelectFilter;

class AvaliationResource extends Resource
{
    protected static ?string $model = Avaliation::class;
    protected static ?string $modelLabel = 'Avaliação';
    protected static ?string $pluralModelLabel = 'Avaliações';
    protected static ?int $navigationSort = 3;


    protected static ?string $navigationIcon = 'heroicon-o-star';

    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {

        return $form
            ->schema([
                Card::make()->schema([

                Select::make('user_id')
                    ->required()
                    ->disabled()
                    ->relationship('user', 'name')
                    ->label('Avaliador')
                    ->columnSpan(3),

                Select::make('submission_id')
                    ->required()
                    ->disabled()
                    ->relationship('submission', 'title')
                    ->label('Submissão')
                    ->columnSpan(5),

                Forms\Components\TextInput::make('total')
                    ->required()
                    ->label('Nota Total')
                    ->disabled()
                    ->columnSpan(2),


            ])->columns(10)

        ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')->label('AVALIADOR')->searchable(),
                Tables\Columns\TextColumn::make('submission.title')->label('SUBMISSÃO')->searchable(),
                Tables\Columns\TextColumn::make('submission.user.name')->label('PARTICIPANTE')->searchable(),
                Tables\Columns\TextColumn::make('submission.user.cpf')->label('CPF')->searchable(),
                Tables\Columns\BadgeColumn::make('submission.status')->label('STATUS DA SUBMISSÃO')
                ->formatStateUsing(function (string $state){
                    return Submission::getStatus($state);
                })
                ->colors([
                    'warning' => 'P',
                    'success' => 'A',
                    'danger' => 'R']),
                ViewColumn::make('submission.file')->view('components.view-colum-file')->label('ARQUIVO'),
                Tables\Columns\TextColumn::make('total')->label('NOTA TOTAL'),

            ])
            ->filters([
                SelectFilter::make('submission.status')
                ->label('Status')
                ->placeholder("Selecione")
                ->options([
                    'P' => 'Pendente',
                    'A' => 'Aprovada',
                    'R' => 'Reprovada'
                ])
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label('Avaliar')->icon('heroicon-o-star'),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            ItemsRelationManager::class
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
