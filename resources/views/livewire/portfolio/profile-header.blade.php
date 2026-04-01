<section class="border-b border-zinc-200 dark:border-zinc-700">
    <div class="mx-auto w-full max-w-6xl px-3 sm:px-6">
        <div class="border-x border-zinc-200 dark:border-zinc-700">
            <div class="grid grid-cols-[7.5rem_minmax(0,1fr)] sm:grid-cols-[13rem_minmax(0,1fr)]">
                <div class="border-e border-zinc-200 p-1.5 dark:border-zinc-700 sm:p-2">
                    <div class="overflow-hidden rounded-full border border-zinc-300 ring-1 ring-zinc-300 ring-offset-2 ring-offset-white dark:border-zinc-600 dark:ring-zinc-500 dark:ring-offset-zinc-900">
                        <img
                            class="size-28 select-none object-cover object-[42%_45%] sm:size-44"
                            alt="Mark Cole profile avatar"
                            fetchpriority="high"
                            src="{{ asset('cole-1side.jpeg') }}">
                    </div>
                </div>

                <div
                    x-data="{
                        subtitles: @js($subtitles),
                        currentSubtitle: 0,
                        subtitleVisible: true,
                        init() {
                            setInterval(() => {
                                this.subtitleVisible = false;

                                setTimeout(() => {
                                    this.currentSubtitle = (this.currentSubtitle + 1) % this.subtitles.length;
                                    this.subtitleVisible = true;
                                }, 220);
                            }, 3600);
                        }
                    }"
                    class="flex min-w-0 flex-col">
                    <div class="flex min-h-14 items-end bg-[repeating-linear-gradient(315deg,_rgba(161,161,170,0.24)_0,_rgba(161,161,170,0.24)_1px,_transparent_0,_transparent_50%)] bg-[length:12px_12px] px-3 pb-1 sm:px-4">
                        <p class="line-clamp-1 select-none font-mono text-xs text-zinc-400 dark:text-zinc-500">
                            The
                            <span class="inline dark:hidden">Night Code</span>
                            Architect
                        </p>
                    </div>

                    <div class="border-t border-zinc-200 dark:border-zinc-700">
                        <h1 class="flex flex-wrap items-center gap-x-2 gap-y-1 px-3 pt-2 text-2xl font-semibold leading-tight tracking-tight text-zinc-950 dark:text-zinc-50 sm:px-4 sm:text-3xl">
                            Mark Cole
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-5 shrink-0 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="m16 18 6-6-6-6"></path>
                                <path d="m8 6-6 6 6 6"></path>
                            </svg>
                        </h1>

                        <div class="min-h-[3.25rem] border-t border-zinc-200 px-3 py-1 dark:border-zinc-700 sm:min-h-9 sm:px-4">
                            <p
                                x-show="subtitleVisible"
                                x-transition:enter="transition ease-out duration-250"
                                x-transition:enter-start="opacity-0 translate-y-1"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 -translate-y-1"
                                x-text="subtitles[currentSubtitle]"
                                class="max-w-full wrap-anywhere font-mono text-[13px] leading-5 text-zinc-600 dark:text-zinc-300"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
