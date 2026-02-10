@props([
    'width' => 'max-w-7xl'
])

<div {{ $attributes->merge(['class' => $width . " container mx-auto px-4 sm:px-6 lg:px-8 py-8"]) }}>
    {{ $slot }}
</div>
