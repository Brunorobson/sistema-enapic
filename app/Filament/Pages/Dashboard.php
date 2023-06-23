<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\InscriptionChart;
use App\Filament\Widgets\SubmissionChart;
use Filament\Pages\Page;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $navigationLabel = 'Home';

    protected static string $view = 'filament.pages.dashboard';

    protected function getHeaderWidgets(): array
    {
        return [
            InscriptionChart::class,
            SubmissionChart::class
        ];
    }
}
