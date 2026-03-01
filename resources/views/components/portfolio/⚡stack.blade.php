<?php

use Livewire\Component;

new class extends Component
{
    /**
     * @var array<int, array{name: string, url: string, icon: string, custom: bool}>
     */
    public array $stack = [
        [
            'name' => 'Laravel',
            'url' => 'https://laravel.com',
            'icon' => 'https://cdn.simpleicons.org/laravel/FF2D20',
            'custom' => false,
        ],
        [
            'name' => 'Livewire',
            'url' => 'https://livewire.laravel.com',
            'icon' => 'https://cdn.simpleicons.org/livewire/FB70A9',
            'custom' => false,
        ],
        [
            'name' => 'Postgres',
            'url' => 'https://www.postgresql.org',
            'icon' => 'https://cdn.simpleicons.org/postgresql/4169E1',
            'custom' => false,
        ],
        [
            'name' => 'Resend',
            'url' => 'https://resend.com',
            'icon' => 'https://cdn.simpleicons.org/resend/000000',
            'custom' => false,
        ],
        [
            'name' => 'Laravel Cloud',
            'url' => 'https://cloud.laravel.com',
            'icon' => 'https://cdn.simpleicons.org/laravel/FF2D20',
            'custom' => true,
        ],
        [
            'name' => 'Tailwind',
            'url' => 'https://tailwindcss.com',
            'icon' => 'https://cdn.simpleicons.org/tailwindcss/06B6D4',
            'custom' => false,
        ],
        [
            'name' => 'Git',
            'url' => 'https://git-scm.com',
            'icon' => 'https://cdn.simpleicons.org/git/F05032',
            'custom' => false,
        ],
        [
            'name' => 'GitHub',
            'url' => 'https://github.com',
            'icon' => 'https://cdn.simpleicons.org/github/111111',
            'custom' => false,
        ],
    ];
};
?>

<section class="mx-auto w-full max-w-6xl px-3 pb-12 sm:px-6" id="stack">
    <div class="border-x border-zinc-200 dark:border-zinc-700">
        <div class="border-b border-zinc-200 px-4 py-2 dark:border-zinc-700">
            <h2 class="text-3xl font-semibold text-zinc-950 dark:text-zinc-50">Stack</h2>
        </div>

        <div class="bg-[radial-gradient(rgba(161,161,170,0.24)_1px,transparent_0)] bg-[length:10px_10px] bg-center p-4">
            <ul class="flex flex-wrap gap-4">
                @foreach ($stack as $tech)
                    <li class="flex">
                        <flux:tooltip :content="$tech['name']" position="bottom">
                            <a
                                href="{{ $tech['url'] }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                aria-label="{{ $tech['name'] }}"
                                class="group inline-flex size-11 items-center justify-center rounded-xl border border-zinc-200 bg-white shadow-xs transition-all duration-200 hover:-translate-y-0.5 hover:border-zinc-300 dark:border-zinc-700 dark:bg-zinc-900 dark:hover:border-zinc-500"
                            >
                                @if ($tech['custom'])
                                    <span class="relative inline-flex items-center justify-center">
                                        <img
                                            src="{{ $tech['icon'] }}"
                                            alt="Laravel icon"
                                            loading="lazy"
                                            decoding="async"
                                            class="size-7 object-contain"
                                        >
                                        <span class="absolute -right-2 -top-2 inline-flex size-4 items-center justify-center rounded-full border border-zinc-200 bg-white text-[10px] dark:border-zinc-700 dark:bg-zinc-900">
                                            ☁
                                        </span>
                                    </span>
                                @else
                                    <img
                                        src="{{ $tech['icon'] }}"
                                        alt="{{ $tech['name'] }} icon"
                                        loading="lazy"
                                        decoding="async"
                                        class="size-7 object-contain"
                                    >
                                @endif

                                <span class="sr-only">{{ $tech['name'] }}</span>
                            </a>
                        </flux:tooltip>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
