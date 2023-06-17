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
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class SubmissionResource extends Resource
{
    protected static ?string $model = Submission::class;

    protected static ?string $modelLabel = 'Submissão';
    protected static ?string $pluralModelLabel = 'Submissões';
    protected static ?int $navigationSort = 3;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('event_id')
                    ->label('Evento')
                    ->relationship('event', 'name'),
                Forms\Components\Select::make('axis_id')
                    ->label('Eixo')
                    ->relationship('axis', 'name'),
                Forms\Components\TextInput::make('title')
                    ->label('Título')
                    ->required()
                    ->maxLength(255),
                Forms\Components\RichEditor::make('resume')
                    ->label('Resumo')
                    ->required()
                    ->maxLength(65535)
                    ->disableToolbarButtons([
                        'attachFiles',
                        'codeBlock',
                        'link',
                        'orderedList',
                        'bulletList',
                        'undo',
                        'redo',
                    ])
                    ->columnSpan(2),
                Forms\Components\FileUpload::make('file')
                    ->acceptedFileTypes(['application/pdf'])
                    ->preserveFilenames()
                    ->required(),
                Forms\Components\TextInput::make('file_path')
                ->required()
                //não esquecer de colcoar o caminho do arquivo
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id'),
                Tables\Columns\TextColumn::make('event_id'),
                Tables\Columns\TextColumn::make('axe_id'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('status')
                ->formatStateUsing(function (string $state){
                    return Submission::getStatus($state);
                }),
                Tables\Columns\IconColumn::make('file')
                    ->options([
                        'heroicon-o-x-circle',
                        'heroicon-o-pencil' => 'draft',
                        'heroicon-o-clock' => 'reviewing',
                        'heroicon-o-check-circle' => 'published',
                        'heroicon-o-cloud-download' => 'baixar pdf',
                    ]),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
            ])
            ->filters([
                //
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
            'create' => Pages\CreateSubmission::route('/create'),
            'edit' => Pages\EditSubmission::route('/{record}/edit'),
        ];
    }
}
