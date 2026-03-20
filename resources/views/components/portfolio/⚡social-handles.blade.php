<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<section class="mx-auto w-full max-w-6xl px-3 pb-8 sm:px-6">
    <div class="border-x border-zinc-200 dark:border-zinc-700">
        <h2 class="sr-only">Social Links</h2>

        <div class="relative">
            <div class="pointer-events-none absolute inset-0 -z-10 hidden grid-cols-2 sm:grid">
                <div class="border-r border-zinc-200 dark:border-zinc-700"></div>
                <div class="border-l border-zinc-200 dark:border-zinc-700"></div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2">
                <!-- LinkedIn -->
                <a class="group flex cursor-pointer items-center gap-4 border-t border-zinc-200 p-4 pr-2 transition-colors hover:bg-zinc-50 sm:border-r dark:border-zinc-700 dark:hover:bg-zinc-800/50" href="https://www.linkedin.com/in/mark-cole-mukisa-3247a7334/" target="_blank" rel="noopener">
                    <div class="flex size-14 shrink-0 items-center justify-center rounded-2xl bg-[#0A66C2]">
                        <span class="font-sans text-4xl font-bold leading-none text-white">in</span>
                    </div>
                    <div class="min-w-0 flex-1">
                        <h3 class="font-medium text-zinc-950 underline-offset-4 group-hover:underline dark:text-zinc-50">LinkedIn</h3>
                        <p class="truncate text-sm text-zinc-500 dark:text-zinc-400">mark-cole-mukisa</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-5 text-zinc-500 dark:text-zinc-400" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M7 7h10v10"></path>
                        <path d="M7 17 17 7"></path>
                    </svg>
                </a>
                <!-- Github  -->
                <a class="group flex cursor-pointer items-center gap-4 border-t border-zinc-200 p-4 pr-2 transition-colors hover:bg-zinc-50 dark:border-zinc-700 dark:hover:bg-zinc-800/50" href="https://github.com/MarkColeMukisa" target="_blank" rel="noopener">
                    <div class="flex size-14 shrink-0 items-center justify-center rounded-2xl bg-zinc-900 dark:bg-zinc-950">
                        <svg viewBox="0 0 24 24" aria-hidden="true" class="size-9 fill-white">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 .5C5.73.5.75 5.7.75 12.2c0 5.2 3.44 9.61 8.2 11.17.6.12.82-.27.82-.58v-2.17c-3.34.75-4.04-1.46-4.04-1.46-.55-1.45-1.33-1.83-1.33-1.83-1.09-.77.08-.75.08-.75 1.2.09 1.83 1.28 1.83 1.28 1.08 1.91 2.83 1.36 3.52 1.04.11-.81.42-1.36.77-1.67-2.66-.31-5.46-1.39-5.46-6.17 0-1.36.46-2.47 1.23-3.34-.12-.31-.54-1.58.12-3.29 0 0 1-.33 3.3 1.27.96-.28 1.99-.41 3.01-.41 1.02 0 2.05.14 3.01.41 2.3-1.6 3.3-1.27 3.3-1.27.66 1.71.24 2.98.12 3.29.77.87 1.23 1.98 1.23 3.34 0 4.79-2.8 5.86-5.47 6.16.43.39.82 1.15.82 2.32v3.43c0 .31.22.7.82.58 4.76-1.56 8.2-5.97 8.2-11.17C23.25 5.7 18.27.5 12 .5Z" />
                        </svg>
                    </div>
                    <div class="min-w-0 flex-1">
                        <h3 class="font-medium text-zinc-950 underline-offset-4 group-hover:underline dark:text-zinc-50">GitHub</h3>
                        <p class="truncate text-sm text-zinc-500 dark:text-zinc-400">@MarkColeMukisa</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-5 text-zinc-500 dark:text-zinc-400" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M7 7h10v10"></path>
                        <path d="M7 17 17 7"></path>
                    </svg>
                </a>

                <!-- Twitter  -->
                <a class="group flex cursor-pointer items-center gap-4 border-y border-zinc-200 p-4 pr-2 transition-colors hover:bg-zinc-50 sm:border-r dark:border-zinc-700 dark:hover:bg-zinc-800/50" href="https://x.com/MarkColeMUKISA" target="_blank" rel="noopener">
                    <div class="flex size-14 shrink-0 items-center justify-center rounded-2xl bg-black">
                        <span class="font-mono text-4xl leading-none text-white">X</span>
                    </div>
                    <div class="min-w-0 flex-1">
                        <h3 class="font-medium text-zinc-950 underline-offset-4 group-hover:underline dark:text-zinc-50">X</h3>
                        <p class="truncate text-sm text-zinc-500 dark:text-zinc-400">@MarkColeMukisa</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-5 text-zinc-500 dark:text-zinc-400" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M7 7h10v10"></path>
                        <path d="M7 17 17 7"></path>
                    </svg>
                </a>

                <a class="group flex cursor-pointer items-center gap-4 border-b border-zinc-200 p-4 pr-2 transition-colors hover:bg-zinc-50 sm:border-r dark:border-zinc-700 dark:hover:bg-zinc-800/50" href="https://wa.me/256702262806" target="_blank" rel="noopener">
                    <div class="flex size-14 shrink-0 items-center justify-center rounded-2xl bg-zinc-900 dark:bg-zinc-950">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="size-8 fill-[#25D366]" aria-hidden="true">
                            <path d="M19.11 17.21c-.27-.14-1.58-.78-1.82-.87-.24-.09-.42-.14-.6.14-.18.27-.69.87-.85 1.05-.15.18-.31.2-.58.07-.27-.14-1.12-.41-2.14-1.32-.79-.7-1.32-1.57-1.48-1.84-.15-.27-.02-.41.11-.54.12-.12.27-.31.4-.47.14-.16.18-.27.27-.45.09-.18.05-.34-.02-.47-.07-.14-.6-1.45-.82-1.98-.22-.53-.44-.46-.6-.47h-.51c-.18 0-.47.07-.71.34-.24.27-.93.91-.93 2.22s.96 2.58 1.09 2.76c.14.18 1.89 2.89 4.58 4.05.64.27 1.13.43 1.52.55.64.2 1.22.17 1.68.1.51-.08 1.58-.64 1.8-1.25.22-.61.22-1.13.15-1.25-.07-.11-.25-.18-.52-.32z" />
                            <path d="M16.03 3.2c-7.08 0-12.8 5.72-12.8 12.8 0 2.26.59 4.47 1.72 6.41L3.2 28.8l6.56-1.72a12.75 12.75 0 0 0 6.27 1.6h.01c7.07 0 12.8-5.72 12.8-12.8 0-3.43-1.34-6.65-3.77-9.07A12.72 12.72 0 0 0 16.03 3.2zm0 23.3h-.01a10.6 10.6 0 0 1-5.4-1.48l-.39-.23-3.89 1.02 1.04-3.79-.25-.39a10.58 10.58 0 0 1-1.63-5.63c0-5.86 4.77-10.63 10.64-10.63 2.84 0 5.5 1.1 7.5 3.11a10.54 10.54 0 0 1 3.12 7.52c0 5.87-4.77 10.64-10.63 10.64z" />
                        </svg>

                    </div>
                    <div class="min-w-0 flex-1">
                        <h3 class="font-medium text-zinc-950 underline-offset-4 group-hover:underline dark:text-zinc-50">WhatsApp</h3>
                        <p class="truncate text-sm text-zinc-500 dark:text-zinc-400">@Mr Professor</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-5 text-zinc-500 dark:text-zinc-400" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M7 7h10v10"></path>
                        <path d="M7 17 17 7"></path>
                    </svg>
                </a>


            </div>
        </div>
    </div>
</section>