<?php

namespace App\Filament\Resources\AvaliationResource\RelationManagers;

use App\Models\Avaliation;
use Filament\Forms;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Contracts\HasRelationshipTable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class ItemsRelationManager extends RelationManager
{
    protected static string $relationship = 'items';

    protected static ?string $recordTitleAttribute = 'value';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Select::make('criteria_id')
                    ->required()
                    ->relationship('criteria', 'name')
                    ->label('Critério')
                    ->options(function (RelationManager $livewire): array {
                        return $livewire->ownerRecord->criteriasByAxis();
                    })
                    ->columnSpan(2),

                Radio::make('value')
                    ->required()
                    ->label('Nota')
                    ->inline()
                    ->options([
                        '0' => '0 - Péssimo',
                        '1' => '1 - Ruim',
                        '2' => '2 - Regular',
                        '3' => '3 - Regular',
                        '4' => '4 - Bom',
                        '5' => '5 - Ótimo'
                    ])
                    ->columnSpan(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('criteria.name')->label("CRITÉRIO"),
                Tables\Columns\TextColumn::make('value')->label("NOTA"),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                ->label("Fazer Avaliação")
                ->successNotificationTitle('Critério avaliado com sucesso!')
                ->after(function (CreateAction $action, RelationManager $livewire) {
                    $livewire->ownerRecord->updateTotal();
                }),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                ->successNotificationTitle('Critério reavaliado com sucesso!')
                ->after(function (RelationManager $livewire) {
                    $livewire->ownerRecord->updateTotal();
                }),
                Tables\Actions\DeleteAction::make()
                ->successNotificationTitle('Critério excluido com sucesso!')
                ->after(function (RelationManager $livewire) {
                    $livewire->ownerRecord->updateTotal();
                }),
            ])
            ->bulkActions([
                //Tables\Actions\DeleteBulkAction::make(),
            ]);
    } 
    
}
