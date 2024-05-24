<?php

namespace App\Filament\Resources\ScheduleResource\Widgets;

use App\Models\Schedule;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ScheduleStat extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Kelas yang dibuka', Schedule::where('show', true)->count())
        ];
    }
}
