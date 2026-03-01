<section class="border-b border-zinc-200 dark:border-zinc-700">
    <div class="mx-auto w-full max-w-6xl px-3 sm:px-6">
        <div class="border-x border-zinc-200 dark:border-zinc-700">
            <div class="grid grid-cols-[7.5rem_1fr] sm:grid-cols-[13rem_1fr]">
                <div class="border-e border-zinc-200 p-1.5 dark:border-zinc-700 sm:p-2">
                    <div class="overflow-hidden rounded-full border border-zinc-300 ring-1 ring-zinc-300 ring-offset-2 ring-offset-white dark:border-zinc-600 dark:ring-zinc-500 dark:ring-offset-zinc-900">
                        <img
                            class="size-28 select-none object-cover object-[42%_45%] sm:size-44"
                            alt="Mark Cole profile avatar"
                            fetchpriority="high"
                            src="{{ asset('cole-1side.jpeg') }}"
                        >
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
                    class="flex flex-col"
                >
                    <div class="flex min-h-14 items-end bg-[repeating-linear-gradient(315deg,_rgba(161,161,170,0.24)_0,_rgba(161,161,170,0.24)_1px,_transparent_0,_transparent_50%)] bg-[length:12px_12px] px-4 pb-1">
                        <p class="line-clamp-1 font-mono text-xs text-zinc-400 select-none dark:text-zinc-500">
                            text-3xl
                            <span class="inline dark:hidden">text-zinc-950</span>
                            <span class="hidden dark:inline">text-zinc-50</span>
                            font-medium
                        </p>
                    </div>

                    <div class="border-t border-zinc-200 dark:border-zinc-700">
                        <h1 class="flex items-center px-4 pt-2 text-3xl font-semibold tracking-tight text-zinc-950 dark:text-zinc-50">
                            Mark Cole
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="ms-2 size-5 text-sky-500" aria-hidden="true">
                                <path fill="currentColor" d="M12 0a4.44 4.44 0 0 1 3.91 2.56 4.43 4.43 0 0 1 4.58.95 4.43 4.43 0 0 1 .95 4.58A4.45 4.45 0 0 1 24 12a4.45 4.45 0 0 1-2.57 3.91 4.43 4.43 0 0 1-.95 4.58 4.43 4.43 0 0 1-4.58.95A4.44 4.44 0 0 1 12 24a4.44 4.44 0 0 1-3.91-2.56 4.43 4.43 0 0 1-4.58-.95 4.43 4.43 0 0 1-.95-4.58A4.45 4.45 0 0 1 0 12a4.45 4.45 0 0 1 2.56-3.91 4.43 4.43 0 0 1 .95-4.58 4.43 4.43 0 0 1 4.58-.95A4.44 4.44 0 0 1 12 0Zm4.23 8.93-6.02 6.58-2.74-2.74-1.55 1.56 4.38 4.38 7.26-7.93-1.33-1.23Z" />
                            </svg>
                        </h1>

                        <div class="h-9 border-t border-zinc-200 px-4 py-1 dark:border-zinc-700 sm:h-auto sm:min-h-9">
                            <p
                                x-show="subtitleVisible"
                                x-transition:enter="transition ease-out duration-250"
                                x-transition:enter-start="opacity-0 translate-y-1"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 -translate-y-1"
                                x-text="subtitles[currentSubtitle]"
                                class="font-mono text-[13px] leading-5 text-zinc-600 dark:text-zinc-300"
                            ></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
