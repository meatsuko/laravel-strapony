@props([
    'label' => "Tooltip",
    'placement' => 'top',
])

<div wire:ignore.self
    data-bs-toggle="tooltip" 
    data-bs-placement="{{ $placement }}" 
    title="{{ $label }}" 
    style="display: inline-block;"

    x-init="new bootstrap.Tooltip($el);"
    >
    {{ $slot }}
</div>