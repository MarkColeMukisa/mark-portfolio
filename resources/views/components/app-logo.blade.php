@props([
    'sidebar' => false,
])

@if($sidebar)
    <flux:sidebar.brand
        :alt="config('app.name', 'Portfolio').' logo'"
        :logo="asset('mc-logo-svg.png')"
        :name="config('app.name', 'Portfolio')"
        {{ $attributes }}
    />
@else
    <flux:brand
        :alt="config('app.name', 'Portfolio').' logo'"
        :logo="asset('mc-logo-svg.png')"
        :name="config('app.name', 'Portfolio')"
        {{ $attributes }}
    />
@endif
