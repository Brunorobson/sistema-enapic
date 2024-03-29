<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubmissionResource\Pages;
use App\Filament\Resources\SubmissionResource\RelationManagers;
use App\Models\Submission;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\ViewColumn;
use Filament\Forms\Components\ViewField;
use Filament\Pages\Actions\Modal\Actions\ButtonAction;
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
    protected static ?int $navigationSort = 2;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    
    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();        
    }

    public static function form(Form $form): Form
    {
        /** @var User $user */
        $user = Auth::user();
        return $form
            ->schema([

                Card::make()->schema([
                Forms\Components\Select::make('event_id')
                    ->label('Evento')
                    //->disablePlaceholderSelection()
                    ->required()
                    ->placeholder('Selecione')
                    ->relationship('event', 'name')
                    ->columnSpan(3),

                Forms\Components\Select::make('axis_id')
                    ->label('Eixo')
                    ->required()
                    ->placeholder('Selecione')
                    ->relationship('axis', 'name')
                    ->columnSpan(3),

                Forms\Components\TextInput::make('title')
                    ->label('Título')
                    ->required()
                    ->maxLength(255)
                    ->columnSpan(6),

                Forms\Components\Textarea::make('resume')
                    ->label('Resumo')
                    ->required()
                    ->columnSpan(6),

                Forms\Components\FileUpload::make('file')
                    ->directory('submissions')
                    ->acceptedFileTypes(['application/pdf'])
                    ->label('Arquivo')
                    ->columnSpan(5)
                    ->required(),

                ViewField::make('file_path')
                ->view('components.view-field-file'),


                Select::make('evaluators')
                    ->multiple()
                    ->label('Avaliadores')
                    ->placeholder('Selecione um ou mais avaliadores')
                    ->relationship('evaluators', 'name', fn (Builder $query) => $query->select('users.*')
                    ->join('role_user as r', 'r.user_id', 'users.id')
                    ->where('r.role_id', 3))
                    ->preload()
                    ->hidden(!($user->hasRole(1) or $user->hasRole(2)))
                    ->columnSpan(5),

                Select::make('status')
                    ->disablePlaceholderSelection()
                    ->hidden(!($user->hasRole(1) or $user->hasRole(2)))
                    ->options([
                        'P' => 'Pendente',
                        'A' => 'Aprovada',
                        'R' => 'Reprovada'
                    ]),

            ])->columns(6)
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                ->label('ID')->sortable()->searchable(),
                
                Tables\Columns\TextColumn::make('user.name')->label('PARTICIPANTE')
                ->sortable()->searchable(),
                Tables\Columns\TextColumn::make('user.cpf')->label('CPF')
                ->sortable()->searchable(),
                //Tables\Columns\TextColumn::make('event.name')->label('EVENTO')->searchable(),
                Tables\Columns\TextColumn::make('axis.name')->label('EIXO')
                ->formatStateUsing(function (string $state){
                    return substr($state, 0, 6);
                }),
                Tables\Columns\TextColumn::make('title')->label('TÍTULO')
                ->sortable()->searchable(),

                Tables\Columns\BadgeColumn::make('status')->label('STATUS')
                ->formatStateUsing(function (string $state){
                    return Submission::getStatus($state);
                })
                ->colors([
                    'warning' => 'P',
                    'success' => 'A',
                    'danger' => 'R']),

                ViewColumn::make('file')->view('components.view-colum-file')->label('ARQUIVO'),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d/m/Y H:m')
                    ->label('CADASTRO'),
            ])
            ->filters([
                SelectFilter::make('axis')
                ->label('Eixo')
                ->placeholder("Todos")
                ->relationship('axis', 'name'),
                SelectFilter::make('status')
                ->label('Status')
                ->placeholder("Selecione")
                ->options([
                    'P' => 'Pendente',
                    'A' => 'Aprovada',
                    'R' => 'Reprovada'
                ])
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
