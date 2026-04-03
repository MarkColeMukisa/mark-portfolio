<?php

use App\Models\User;

test('traits component shows fallback when no user experience start date is set', function () {
    $response = $this->get(route('home'));

    $response
        ->assertOk()
        ->assertSee('5+ years')
        ->assertSee('Experience');
});

test('traits component shows dynamic experience years when experience_start_date is set', function () {
    $this->travelTo(now()->setDate(2026, 4, 3));

    User::factory()->create([
        'experience_start_date' => '2020-04-03',
    ]);

    $response = $this->get(route('home'));

    $response
        ->assertOk()
        ->assertSee('6+ years')
        ->assertSee('Experience');
});

test('traits component shows days of experience when start date is very recent', function () {
    $this->travelTo(now()->setDate(2026, 4, 3));

    User::factory()->create([
        'experience_start_date' => '2026-03-25',
    ]);

    $response = $this->get(route('home'));

    $response
        ->assertOk()
        ->assertSee('9 days')
        ->assertSee('Experience');
});
