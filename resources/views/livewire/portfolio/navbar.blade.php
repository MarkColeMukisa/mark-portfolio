<header class="sticky top-0 z-50 border-b border-zinc-200 bg-white/90 backdrop-blur-sm dark:border-zinc-700 dark:bg-zinc-900/90">
    <div class="mx-auto w-full max-w-6xl px-3 sm:px-6">
        <div class="grid min-h-14 grid-cols-[auto_1fr_auto] items-center border-x border-zinc-200 dark:border-zinc-700">
            
            <flux:tooltip content="MUKISA MARK COLE" position="bottom">
            <a
                href="{{ route('home') }}"
                wire:navigate
                wire:click="closeMobileMenu"
                aria-label="Me"
                class="flex h-14 w-24 items-center justify-center border-e border-zinc-200 bg-[radial-gradient(theme(colors.zinc.300)_1px,transparent_1px)] bg-[length:10px_10px] dark:border-zinc-700 dark:bg-[radial-gradient(theme(colors.zinc.700)_1px,transparent_1px)] sm:w-32"
            >
                <span class="inline-flex size-11 items-center justify-center rounded-xl border border-zinc-200 bg-black p-1.5 shadow-xs dark:border-zinc-700">
                    <span class="size-full overflow-hidden rounded-lg">
                        <img
                            src="{{ asset('mc-logo.png') }}"
                            alt="MC Logo"
                            class="h-full w-full scale-[2.25] object-cover object-[50%_19%]"
                        >
                    </span>
                </span>
            </a>
            </flux:tooltip>

            <div class="hidden h-full items-center justify-center gap-7 border-e border-zinc-200 px-4 dark:border-zinc-700 sm:flex">
                <a
                    href="{{ route('home') }}"
                    wire:navigate
                    @class([
                        'font-mono text-xl font-medium tracking-tight transition-colors',
                        'text-zinc-900 dark:text-white' => request()->routeIs('home'),
                        'text-zinc-500 hover:text-zinc-900 dark:text-zinc-300 dark:hover:text-white' => ! request()->routeIs('home'),
                    ])
                >
                    Me
                </a>

                <a
                    href="/blog"
                    @class([
                        'font-mono text-xl font-medium tracking-tight transition-colors',
                        'text-zinc-900 dark:text-white' => request()->is('blog*'),
                        'text-zinc-500 hover:text-zinc-900 dark:text-zinc-300 dark:hover:text-white' => ! request()->is('blog*'),
                    ])
                >
                    Blogs
                </a>
            </div>

            <div class="flex items-center justify-end gap-2 px-2 sm:px-3">
                <button
                    type="button"
                    class="inline-flex h-10 items-center gap-2 rounded-full border border-zinc-300 bg-white px-3 text-zinc-600 transition-colors hover:bg-zinc-100 hover:text-zinc-900 dark:border-zinc-600 dark:bg-zinc-800 dark:text-zinc-300 dark:hover:bg-zinc-700 dark:hover:text-white"
                    aria-label="Search"
                >
                    <flux:icon.magnifying-glass class="size-4" />
                    <span class="text-sm font-medium sm:hidden">Search</span>
                    <kbd class="hidden rounded-sm border border-zinc-300 px-1.5 py-0.5 text-xs font-medium text-zinc-500 sm:inline dark:border-zinc-500 dark:text-zinc-300">
                        Ctrl K
                    </kbd>
                </button>

                <a
                    href="https://github.com/markcolemukisa"
                    target="_blank"
                    rel="noopener"
                    aria-label="GitHub"
                    class="inline-flex size-10 items-center justify-center rounded-full border border-zinc-300 bg-white transition-colors hover:bg-zinc-100 dark:border-zinc-600 dark:bg-zinc-800 dark:hover:bg-zinc-700"
                >
                <svg viewBox="0 0 24 24" aria-hidden="true" class="size-7 fill-zinc-900 dark:fill-white">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12 .5C5.73.5.75 5.7.75 12.2c0 5.2 3.44 9.61 8.2 11.17.6.12.82-.27.82-.58v-2.17c-3.34.75-4.04-1.46-4.04-1.46-.55-1.45-1.33-1.83-1.33-1.83-1.09-.77.08-.75.08-.75 1.2.09 1.83 1.28 1.83 1.28 1.08 1.91 2.83 1.36 3.52 1.04.11-.81.42-1.36.77-1.67-2.66-.31-5.46-1.39-5.46-6.17 0-1.36.46-2.47 1.23-3.34-.12-.31-.54-1.58.12-3.29 0 0 1-.33 3.3 1.27.96-.28 1.99-.41 3.01-.41 1.02 0 2.05.14 3.01.41 2.3-1.6 3.3-1.27 3.3-1.27.66 1.71.24 2.98.12 3.29.77.87 1.23 1.98 1.23 3.34 0 4.79-2.8 5.86-5.47 6.16.43.39.82 1.15.82 2.32v3.43c0 .31.22.7.82.58 4.76-1.56 8.2-5.97 8.2-11.17C23.25 5.7 18.27.5 12 .5Z"/>
                </svg>
                </a>

                <button
                    type="button"
                    x-data
                    x-on:click="$flux.appearance = $flux.appearance === 'dark' ? 'light' : 'dark'"
                    class="inline-flex size-10 items-center justify-center rounded-full border border-zinc-300 bg-white text-zinc-700 transition-colors hover:bg-zinc-100 dark:border-zinc-600 dark:bg-zinc-800 dark:text-zinc-200 dark:hover:bg-zinc-700"
                    aria-label="Toggle Theme"
                >
                    <flux:icon.moon class="size-5 dark:hidden" />
                    <flux:icon.sun class="hidden size-5 dark:block" />
                </button>

                <button
                    type="button"
                    wire:click="toggleMobileMenu"
                    class="inline-flex size-10 items-center justify-center rounded-full border border-zinc-300 bg-white text-zinc-700 transition-colors hover:bg-zinc-100 dark:border-zinc-600 dark:bg-zinc-800 dark:text-zinc-200 dark:hover:bg-zinc-700 sm:hidden"
                    aria-label="Toggle Menu"
                >
                    @if ($mobileMenuOpen)
                        <flux:icon.x-mark class="size-5" />
                    @else
                        <flux:icon.bars-3 class="size-5" />
                    @endif
                </button>
            </div>
        </div>
    </div>

    @if ($mobileMenuOpen)
        <div class="border-t border-zinc-200 bg-white px-3 py-3 sm:hidden dark:border-zinc-700 dark:bg-zinc-900">
            <nav class="mx-auto w-full max-w-6xl space-y-2">
                <a
                    href="{{ route('home') }}"
                    wire:navigate
                    wire:click="closeMobileMenu"
                    class="block rounded-lg border border-zinc-200 px-3 py-2 text-sm font-medium text-zinc-700 transition-colors hover:bg-zinc-100 dark:border-zinc-700 dark:text-zinc-200 dark:hover:bg-zinc-800"
                >
                    Me
                </a>

                <a
                    href="/blog"
                    wire:click="closeMobileMenu"
                    class="block rounded-lg border border-zinc-200 px-3 py-2 text-sm font-medium text-zinc-700 transition-colors hover:bg-zinc-100 dark:border-zinc-700 dark:text-zinc-200 dark:hover:bg-zinc-800"
                >
                    Blogs
                </a>
            </nav>
        </div>
    @endif
</header>
