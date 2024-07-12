<?php

namespace App\Filament\Widgets;

use App\Models\EnqueueTaskLog;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class LogsChart extends ChartWidget
{
    protected static ?string $heading = 'Enqueue Task Logs';

    protected static ?int $sort = 2;

    protected function getData(): array
    {
        $data = Trend::model(EnqueueTaskLog::class)
            ->between(
                start: now()->subYear(),
                end: now(),
            )
            ->perMonth()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Enqueue Task Logs',
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
