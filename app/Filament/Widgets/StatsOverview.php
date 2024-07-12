<?php

namespace App\Filament\Widgets;

use App\Models\EndpointMapping;
use App\Models\ServingMachineMapping;
use App\Models\TaskMapping;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{

    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $task_count = TaskMapping::all()->count();
        $endpoint_count = EndpointMapping::all()->count();
        $serving_machine_count = ServingMachineMapping::all()->count();
        return [
            Stat::make('Tasks', $task_count),
            Stat::make('Endpoints', $endpoint_count),
            Stat::make('Serving Machines', $serving_machine_count),
        ];

    }
}
