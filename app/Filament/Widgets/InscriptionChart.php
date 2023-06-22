<?php

namespace App\Filament\Widgets;

use App\Models\Inscription;
use Filament\Widgets\LineChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class InscriptionChart extends LineChartWidget
{
    protected static ?string $heading = 'Inscrições';

    protected function getData(): array
    {
        $data = Trend::model(Inscription::class)
        ->between(
            start: now()->startOfYear(),
            end: now()->endOfYear(),
        )
        ->perDay()
        ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Quantidade',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }
}
