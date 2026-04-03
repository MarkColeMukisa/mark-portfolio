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
        ->and($experience->formattedPeriod())->toBe('6 years, 2 months')
        ->and($experience->detailedPeriod())->toBe('6 years, 2 months, 10 days');
});

test('it falls back to days when experience is less than a month', function () {
    $calculator = new ExperienceCalculator;

    $experience = $calculator->calculate(
        CarbonImmutable::parse('2026-03-20'),
        CarbonImmutable::parse('2026-03-25'),
    );

    expect($experience->years)->toBe(0)
        ->and($experience->months)->toBe(0)
        ->and($experience->days)->toBe(5)
        ->and($experience->formattedPeriod())->toBe('5 days')
        ->and($experience->detailedPeriod())->toBe('5 days');
});

test('it formats a single year correctly', function () {
    $calculator = new ExperienceCalculator;

    $experience = $calculator->calculate(
        CarbonImmutable::parse('2025-03-25'),
        CarbonImmutable::parse('2026-03-25'),
    );

    expect($experience->years)->toBe(1)
        ->and($experience->months)->toBe(0)
        ->and($experience->formattedPeriod())->toBe('1 year')
        ->and($experience->detailedPeriod())->toBe('1 year');
});

test('it formats a single month correctly', function () {
    $calculator = new ExperienceCalculator;

    $experience = $calculator->calculate(
        CarbonImmutable::parse('2026-02-25'),
        CarbonImmutable::parse('2026-03-25'),
    );

    expect($experience->years)->toBe(0)
        ->and($experience->months)->toBe(1)
        ->and($experience->formattedPeriod())->toBe('1 month')
        ->and($experience->detailedPeriod())->toBe('1 month');
});

test('it uses the current date when no current date is supplied', function () {
    CarbonImmutable::setTestNow('2026-04-03');

    $calculator = new ExperienceCalculator;

    $experience = $calculator->calculate(
        CarbonImmutable::parse('2020-06-01'),
    );

    expect($experience->years)->toBe(5)
        ->and($experience->totalMonths)->toBe(70);

    CarbonImmutable::setTestNow();
});
