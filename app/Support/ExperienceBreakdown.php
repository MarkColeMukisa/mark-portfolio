<?php

declare(strict_types=1);

namespace App\Support;

readonly class ExperienceBreakdown
{
    public function __construct(
        public int $years,
        public int $months,
        public int $days,
        public int $totalMonths,
        public string $startedOn,
        public string $asOf,
    ) {}

    public function formattedPeriod(): string
    {
        $parts = [];

        if ($this->years > 0) {
            $parts[] = $this->years.' '.($this->years === 1 ? 'year' : 'years');
        }

        if ($this->months > 0) {
            $parts[] = $this->months.' '.($this->months === 1 ? 'month' : 'months');
        }

        if ($parts === []) {
            $parts[] = $this->days.' '.($this->days === 1 ? 'day' : 'days');
        }

        return collect($parts)->join(', ');
    }
}
