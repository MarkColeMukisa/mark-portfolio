<?php

use App\Services\ExperienceCalculator;
use Carbon\CarbonImmutable;

test('it calculates a detailed experience breakdown', function () {
    $calculator = new ExperienceCalculator;

    $experience = $calculator->calculate(
        CarbonImmutable::parse('2020-01-15'),
        CarbonImmutable::parse('2026-03-25'),
    );

    expect($experience->years)->toBe(6)
        ->and($experience->months)->toBe(2)
        ->and($experience->days)->toBe(10)
        ->and($experience->totalMonths)->toBe(74)
        ->and($experience->formattedPeriod())->toBe('6 years, 2 months');
});

test('it falls back to days when the experience is less than a month', function () {
    $calculator = new ExperienceCalculator;

    $experience = $calculator->calculate(
        CarbonImmutable::parse('2026-03-20'),
        CarbonImmutable::parse('2026-03-25'),
    );

    expect($experience->years)->toBe(0)
        ->and($experience->months)->toBe(0)
        ->and($experience->days)->toBe(5)
        ->and($experience->formattedPeriod())->toBe('5 days');
});

test('it correctly sums total months', function () {
    $calculator = new ExperienceCalculator;

    $experience = $calculator->calculate(
        CarbonImmutable::parse('2020-01-01'),
        CarbonImmutable::parse('2021-07-01'),
    );

    expect($experience->years)->toBe(1)
        ->and($experience->months)->toBe(6)
        ->and($experience->totalMonths)->toBe(18);
});

test('it records start date and as-of date as formatted strings', function () {
    $calculator = new ExperienceCalculator;

    $experience = $calculator->calculate(
        CarbonImmutable::parse('2020-01-15'),
        CarbonImmutable::parse('2026-03-25'),
    );

    expect($experience->startedOn)->toBe('Jan 15, 2020')
        ->and($experience->asOf)->toBe('Mar 25, 2026');
});
