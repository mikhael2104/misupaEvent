<?php

namespace App\Filament\Widgets;

use App\Models\Event;
use App\Models\Pendaftar;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        $countEvent = Event::count();
        $countPendaftar = Pendaftar::count();
        return [
            Stat::make('Jumlah Event', $countEvent . ' Event')
                ->chart([1,2,3,41,2])
                ->color('success'),

            Stat::make('Jumlah Pendaftar', $countPendaftar . ' Event')
                ->chart([1,2,3,41,2])
                ->color('info'),

        ];
    }
}
