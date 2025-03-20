<div
    class="relative z-0 mt-5 flex items-center gap-6 overflow-hidden rounded-2xl bg-yellow-50/50 px-6 py-5 ring-1 ring-black/5 dark:bg-gray-900/40"
>
    <div
        class="absolute left-0 top-1/2 -z-10 size-16 -translate-y-1/2 rounded-full bg-yellow-400/50 blur-2xl dark:block"
    ></div>

    {{-- Icon --}}
    <x-icons.alert-diamond class="size-10 shrink-0" />

    {{-- Content --}}
    <div class="flex flex-col items-start gap-3">
        <div class="space-y-1">
            {{-- Title --}}
            <h5 class="font-medium">Heads up! NativePHP is still in Beta.</h5>
            {{-- Message --}}
            <p class="text-sm opacity-50">
                Be part of the progress! Feedback from awesome users like you
                gets us closer to perfection.
            </p>
        </div>

        {{-- Link --}}
        <a
            href="/docs/getting-started/status"
            onclick="fathom.trackEvent('beta_interest');"
            class="inline-flex items-center gap-2 rounded-xl bg-yellow-400/50 py-3 pl-3 pr-5 text-sm transition duration-300 ease-in-out hover:bg-yellow-400/60 dark:bg-[#ffd057] dark:text-black dark:hover:bg-[#ffd057]/90"
        >
            <x-icons.rocket class="size-5" />
            <div>Let's get to v1!</div>
        </a>
    </div>
</div>
