<?php

namespace App\Filament\Widgets;

use App\Helpers\AppHelper;
use App\Models\Submission;
use Filament\Widgets\LineChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class SubmissionChart extends LineChartWidget
{
    protected static ?string $heading = 'Submissões';

    protected function getData(): array
    {
        $data = Trend::query(Submission::query('id', '>', 0))
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
            'labels' => $data->map(fn (TrendValue $value) => AppHelper::formatDateBR($value->date)),
        ];
    }
}
