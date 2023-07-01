<?php

namespace App\Filament\Widgets;

use Filament\Facades\Filament;
use Filament\Forms\Components\Card;
use Filament\Navigation\UserMenuItem;
use Filament\Widgets\LineChartWidget;
use Filament\Widgets\Widget;

class DashboardOverview extends LineChartWidget
{
    protected static string $view = 'filament.widgets.dashboard-overview';
    protected static ?string $heading = 'Seja Bem vindo ao Painel do Enapic';

    protected function getCards(): array
    {
        return[

        ];
    }

}
