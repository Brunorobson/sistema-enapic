<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\DashboardOverview;
use App\Filament\Widgets\InscriptionChart;
use App\Filament\Widgets\SubmissionChart;
use Filament\Pages\Page;
use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $navigationLabel = 'Home';

    protected static string $view = 'filament.pages.dashboard';


    protected function getHeaderWidgets(): array
    {
        /** @var User $user */

        $user = Auth::user();
        if (!($user->isSupport() or $user->isAdmin())) {
            return [
                InscriptionChart::class,
                SubmissionChart::class
            ];
        } else {
            return[
                DashboardOverview::class,

            ];
        }

    }
}
