<?php

use App\Models\User;
use App\Services\ExperienceCalculator;
use Carbon\CarbonImmutable;

test('home page can be rendered with portfolio and navbar content', function () {
    $response = $this->get(route('home'));

    $response
        ->assertOk()
        ->assertSee('/favicon.ico')
        ->assertSee('/favicon.svg')
        ->assertSee('/apple-touch-icon.png')
        ->assertSee('Me')
        ->assertSee('Blogs')
        ->assertSee('mc-logo.png')
        ->assertSee('Mark Cole')
        ->assertSee('Full Stack Laravel Developer')
        ->assertSee('cole-1side.jpeg')
        ->assertSee('Kampala, Central Region, Uganda')
        ->assertSee('markcole683@gmail.com')
        ->assertSee('LinkedIn')
        ->assertSee('mark-cole-mukisa')
        ->assertSee('@MarkColeMukisa')
        ->assertSee('WhatsApp')
        ->assertSee('About')
        ->assertSee('modern full-stack Laravel web developer')
        ->assertSee('What I Build With')
        ->assertSee('My Development Approach')
        ->assertSee('Stack')
        ->assertSee('aria-label="Laravel"', false)
        ->assertSee('aria-label="Livewire"', false)
        ->assertSee('aria-label="Postgres"', false)
        ->assertSee('aria-label="Resend"', false)
        ->assertSee('aria-label="Laravel Cloud"', false)
        ->assertSee('aria-label="Tailwind"', false)
        ->assertSee('aria-label="Git"', false)
        ->assertSee('aria-label="GitHub"', false)
        ->assertSee('My Projects & Platforms')
        ->assertSee('Kian Rover')
        ->assertSee('Portfolio Mgt')
        ->assertSee('Event App')
        ->assertSee('Built by')
        ->assertSee('MarkCole (FullStack Laravel Developer)')
        ->assertSee('aria-label="Toggle Theme"', false)
        ->assertSee('Ctrl K')
        ->assertSee('grid-cols-[auto_minmax(0,1fr)]', false)
        ->assertSee('grid-cols-[7.5rem_minmax(0,1fr)]', false)
        ->assertSee('wrap-anywhere', false)
        ->assertSee('min-[390px]:inline', false);
});

test('traits component shows only years of experience for guests', function () {
    CarbonImmutable::setTestNow('2026-04-03');

    config(['portfolio.experience_start_date' => '2020-06-01']);

    $response = $this->get(route('home'));

    $response
        ->assertOk()
        ->assertSee('5 years of Experience');

    CarbonImmutable::setTestNow();
});

test('traits component shows detailed experience label for admin', function () {
    CarbonImmutable::setTestNow('2026-04-03');

    config(['portfolio.experience_start_date' => '2020-06-01']);

    $user = User::factory()->create();

    $response = $this->actingAs($user)->get(route('home'));

    $response
        ->assertOk()
        ->assertSee('5 years, 10 months, 2 days of Experience');

    CarbonImmutable::setTestNow();
});

test('traits component updates experience label when start date changes', function () {
    CarbonImmutable::setTestNow('2026-04-03');

    config(['portfolio.experience_start_date' => '2016-04-03']);

    $response = $this->get(route('home'));

    $response
        ->assertOk()
        ->assertSee('10 years of Experience');

    CarbonImmutable::setTestNow();
});

test('experience calculator produces correct years from configured start date', function () {
    CarbonImmutable::setTestNow('2026-04-03');

    config(['portfolio.experience_start_date' => '2020-06-01']);

    $calculator = new ExperienceCalculator;
    $startDate = CarbonImmutable::parse(config('portfolio.experience_start_date'));
    $breakdown = $calculator->calculate($startDate);

    expect($breakdown->years)->toBe(5)
        ->and($breakdown->totalMonths)->toBe(70);

    CarbonImmutable::setTestNow();
});
