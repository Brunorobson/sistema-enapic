<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubmissionResource\Pages;
use App\Filament\Resources\SubmissionResource\RelationManagers;
use App\Models\Submission;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\ViewColumn;
use Filament\Forms\Components\ViewField;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class SubmissionResource extends Resource
{
    protected static ?string $model = Submission::class;

    protected static ?string $modelLabel = 'Submissão';
    protected static ?string $pluralModelLabel = 'Submissões';
    protected static ?int $navigationSort = 3;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('event_id')
                    ->label('Evento')
                    ->default(1)
                    ->required()
                    ->placeholder('Selecione')
                    ->relationship('event', 'name'),

                Forms\Components\Select::make('axis_id')
                    ->label('Eixo')
                    ->required()
                    ->placeholder('Selecione')
                    ->relationship('axis', 'name'),

                Forms\Components\TextInput::make('title')
                    ->label('Título')
                    ->required()
                    ->maxLength(255)
                    ->columnSpan(2),

                Forms\Components\Textarea::make('resume')
                    ->label('Resumo')
                    ->required()
                    ->columnSpan(2),

                Forms\Components\FileUpload::make('file')
                    ->directory('submissions')
                    ->acceptedFileTypes(['application/pdf'])
                    ->label('Arquivo')
                    ->columnSpan(2)
                    ->required(),

                ViewField::make('file_path')
                ->view('components.view-field-file')

        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')->label('PARTICIPANTE')->searchable(),
                Tables\Columns\TextColumn::make('event.name')->label('EVENTO')->searchable(),
                Tables\Columns\TextColumn::make('axis.name')->label('EIXO')->searchable()
                ->formatStateUsing(function (string $state){
                    return substr($state, 0, 6);
                }),
                Tables\Columns\TextColumn::make('title')->label('TÍTULO')->searchable(),

                Tables\Columns\TextColumn::make('status')->label('STATUS')
                ->formatStateUsing(function (string $state){
                    return Submission::getStatus($state);
                }),

                ViewColumn::make('file')->view('components.view-colum-file')->label('ARQUIVO'),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d/m/Y H:m')
                    ->label('CADASTRO'),
            ])
            ->filters([

            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListSubmissions::route('/'),
            'create' => Pages\CreateSubmission::route('/create'),
            'edit' => Pages\EditSubmission::route('/{record}/edit'),
            'view' => Pages\ViewSubmission::route('/{record}'),
        ];
    }

}
