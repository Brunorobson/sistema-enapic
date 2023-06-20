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
                    ->placeholder('Selecione')
                    ->relationship('event', 'name'),

                Forms\Components\Select::make('axis_id')
                    ->label('Eixo')
                    ->placeholder('Selecione')
                    ->relationship('axis', 'name'),

                Forms\Components\TextInput::make('title')
                    ->label('Título')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Textarea::make('resume')
                    ->label('Resumo')
                    ->required()
                    ->columnSpan(2),

                Forms\Components\FileUpload::make('file')
                    ->directory('submissions')
                    ->acceptedFileTypes(['application/pdf'])
                    ->required(),

        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')->label('PARTICIPANTE'),
                Tables\Columns\TextColumn::make('event.name')->label('EVENTO'),
                Tables\Columns\TextColumn::make('axis.name')->label('EIXO')
                ->formatStateUsing(function (string $state){
                    return substr($state, 0, 6);
                }),
                Tables\Columns\TextColumn::make('title')->label('TÍTULO'),

                ViewColumn::make('file')->view('components.view-colum-file')->label('ARQUIVO'),

                Tables\Columns\TextColumn::make('status')->label('STATUS')
                ->formatStateUsing(function (string $state){
                    return Submission::getStatus($state);
                }),

                //Tables\Columns\TextColumn::make('file'),
                /*Tables\Columns\IconColumn::make('file')
                    ->options([
                        'heroicon-o-x-circle',
                        'heroicon-o-pencil' => 'draft',
                        'heroicon-o-clock' => 'reviewing',
                        'heroicon-o-check-circle' => 'published',
                        'heroicon-o-cloud-download' => 'baixar pdf',
                    ]),*/
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d/m/Y')
                    ->label('CADASTRO'),
            ])
            ->filters([
                SelectFilter::make('user')->relationship('user', 'name')
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
            'index' => Pages\ListSubmissions::route('/'),
            //'create' => Pages\CreateSubmission::route('/create'),
            'edit' => Pages\EditSubmission::route('/{record}/edit'),
        ];
    }

}
