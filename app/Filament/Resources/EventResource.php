<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationGroup = 'Administração';
    protected static ?string $modelLabel = 'Evento';
    protected static ?string $pluralModelLabel = 'Eventos';
    protected static ?int $navigationSort = 1;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Grid::make()->schema([
                    TextInput::make('name')
                        ->required()
                        ->maxLength(255)
                        ->label('Nome')
                        ->columnSpan(2),
                    Toggle::make('active')
                        ->required()
                        ->label('Ativo?'),
                    RichEditor::make('description')
                        ->maxLength(255)
                        ->columnSpan(3)
                        ->label('Descrição'),

                ])->columns(3)

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->sortable()->searchable()->label('NOME'),
                //TextColumn::make('description')->limit(36)->sortable()->searchable()->label('DESCRIÇÃO'),
                TextColumn::make('created_at')->dateTime('d/m/y h:i')->sortable()->searchable()->label('CADASTRO'),
                IconColumn::make('active')->boolean()->label('ATIVO'),
            ])
            ->filters([
                TernaryFilter::make('active')->label('Ativo?')
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label('Editar'),
                //Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
