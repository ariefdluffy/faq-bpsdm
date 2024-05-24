<?php

namespace App\Filament\Resources\QuestionResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\question;

class QuestionStat extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Jumlah Pertanyaan', Question::count())
        ];
    }
}
