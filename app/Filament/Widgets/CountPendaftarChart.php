<?php

namespace App\Filament\Widgets;

use App\Models\Event;
use App\Models\Pendaftar;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Filament\Widgets\ChartWidget;

class CountPendaftarChart extends ChartWidget
{
    protected static ?string $heading = 'Grafik Total Pendaftar';

    protected static string $color = 'info';

    protected function getData(): array
    {
        $data = Trend::model(Pendaftar::class)
        ->between(
            start: now()->startOfYear(),
            end: now()->endOfYear(),
        )
        ->perMonth()
        ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Pendaftar Update',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                    'borderColor' => '#60B5FF',
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
