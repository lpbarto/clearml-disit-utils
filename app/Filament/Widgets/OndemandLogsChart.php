<?php

namespace App\Filament\Widgets;

use App\Models\OndemandLog;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class OndemandLogsChart extends ChartWidget
{
    protected static ?string $heading = 'Ondemand Task Logs';

    protected static ?int $sort = 3;

    protected function getData(): array
    {
        $data = Trend::model(OndemandLog::class)
            ->between(
                start: now()->subYear(),
                end: now(),
            )
            ->perMonth()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Ondemand Task Logs',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
