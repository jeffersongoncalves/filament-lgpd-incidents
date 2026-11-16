<?php

namespace JeffersonGoncalves\Filament\LgpdIncidents\Support;

use Illuminate\Support\Carbon;
use JeffersonGoncalves\LgpdIncidents\Enums\Risk;
use JeffersonGoncalves\LgpdIncidents\Models\Incident;

class Labels
{
    /**
     * @return array<string, string>
     */
    public static function risks(): array
    {
        return collect(Risk::cases())->mapWithKeys(fn (Risk $risk): array => [$risk->value => static::risk($risk->value)])->all();
    }

    public static function risk(?string $risk): string
    {
        return __('filament-lgpd-incidents::filament-lgpd-incidents.risk.'.($risk ?? 'pending'));
    }

    public static function riskColor(?string $risk): string
    {
        return match ($risk) {
            Risk::Relevant->value => 'danger',
            Risk::Low->value => 'success',
            default => 'warning',
        };
    }

    public static function status(Incident $incident): string
    {
        return match (true) {
            $incident->closed_at !== null => 'closed',
            $incident->isOverdue() => 'overdue',
            $incident->isPending() => 'pending',
            default => 'open',
        };
    }

    public static function statusColor(string $status): string
    {
        return match ($status) {
            'closed' => 'gray',
            'overdue' => 'danger',
            'pending' => 'warning',
            default => 'info',
        };
    }

    public static function date(mixed $value): Carbon
    {
        return Carbon::parse($value);
    }
}
