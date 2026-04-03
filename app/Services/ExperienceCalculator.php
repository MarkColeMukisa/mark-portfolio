<?php

declare(strict_types=1);

namespace App\Services;

use App\Support\ExperienceBreakdown;
use Carbon\CarbonImmutable;
use Carbon\CarbonInterface;

class ExperienceCalculator
{
    public function calculate(CarbonInterface $startDate, ?CarbonInterface $currentDate = null): ExperienceBreakdown
    {
        $normalizedStartDate = CarbonImmutable::instance($startDate)->startOfDay();
        $normalizedCurrentDate = CarbonImmutable::instance($currentDate ?? now())->startOfDay();

        $difference = $normalizedStartDate->diff($normalizedCurrentDate);

        return new ExperienceBreakdown(
            years: $difference->y,
            months: $difference->m,
            days: $difference->d,
            totalMonths: ($difference->y * 12) + $difference->m,
            startedOn: $normalizedStartDate->toFormattedDateString(),
            asOf: $normalizedCurrentDate->toFormattedDateString(),
        );
    }
}
