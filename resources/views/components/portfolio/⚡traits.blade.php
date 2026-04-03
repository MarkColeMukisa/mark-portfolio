<?php

use App\Services\ExperienceCalculator;
use Carbon\CarbonImmutable;
use Livewire\Component;

new class extends Component
{
    public string $experienceLabel = '5+ years';

    public function mount(ExperienceCalculator $calculator): void
    {
        try {
            $startDate = CarbonImmutable::parse(config('portfolio.experience_start_date', '2020-06-01'));
            $breakdown = $calculator->calculate($startDate);
            $this->experienceLabel = $breakdown->years . '+ years';
        } catch (Throwable) {
            // Fallback to the default label when the configured date is invalid.
        }
    }
};
?>

<section class="mx-auto w-full max-w-6xl px-3 pb-4 sm:px-6">
    <div class="space-y-2 p-4 border-x border-zinc-200 dark:border-zinc-700">
        <h2 class="sr-only">Overview</h2>
        <!-- Experience  -->
        <div class="flex items-center gap-4 font-mono text-sm text-zinc-900 dark:text-zinc-100">
            <div class="flex size-6 shrink-0 items-center justify-center rounded-lg bg-zinc-100 dark:bg-zinc-800" aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-4 text-zinc-500 dark:text-zinc-400" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="7" width="20" height="14" rx="2"></rect>
                    <path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"></path>
                    <line x1="12" y1="12" x2="12" y2="12.01"></line>
                </svg>
            </div>
            <p class="text-balance">{{ $experienceLabel }} Experience</p>
        </div>

        <!-- Address  -->
        <div class="flex items-center gap-4 font-mono text-sm text-zinc-900 dark:text-zinc-100">
            <div class="flex size-6 shrink-0 items-center justify-center rounded-lg bg-zinc-100 dark:bg-zinc-800" aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-4 text-zinc-500 dark:text-zinc-400" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                    <circle cx="12" cy="10" r="3"></circle>
                </svg>
            </div>

            <p class="text-balance">Kampala, Central Region, Uganda</p>
        </div>
        <!-- Phone Number  -->
        <div class="flex items-center gap-4 font-mono text-sm text-zinc-900 dark:text-zinc-100">
            <div class="flex size-6 shrink-0 items-center justify-center rounded-lg bg-zinc-100 dark:bg-zinc-800" aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-4 text-zinc-500 dark:text-zinc-400" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"></path>
                </svg>
            </div>

            <p class="text-balance">
                <a class="underline-offset-4 hover:underline" href="tel:+256702262806" target="_blank" rel="noopener noreferrer">
                    256702262806
                </a>
            </p>
        </div>
        <!-- Mail  -->
        <div class="flex items-center gap-4 font-mono text-sm text-zinc-900 dark:text-zinc-100">
            <div class="flex size-6 shrink-0 items-center justify-center rounded-lg bg-zinc-100 dark:bg-zinc-800" aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-4 text-zinc-500 dark:text-zinc-400" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path>
                    <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                </svg>
            </div>

            <p class="text-balance">
                <a class="underline-offset-4 hover:underline" href="mailto:markcole683@gmail.com" target="_blank" rel="noopener noreferrer">
                    markcole683@gmail.com
                </a>
            </p>
        </div>
        <!-- Gender  -->
        <div class="flex items-center gap-4 font-mono text-sm text-zinc-900 dark:text-zinc-100">
            <div class="flex size-6 shrink-0 items-center justify-center rounded-lg bg-zinc-100 dark:bg-zinc-800" aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-4 text-zinc-500 dark:text-zinc-400" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M16 3h5v5"></path>
                    <path d="m21 3-6.75 6.75"></path>
                    <circle cx="10" cy="14" r="6"></circle>
                </svg>
            </div>

            <p class="text-balance">Male</p>
        </div>
    </div>
</section>