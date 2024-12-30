@props([
    'placement' => 'top',
])

<style>
    .popover-body {
        padding: 0; /* Убираем отступы */
    }
</style>
<div
    data-bs-trigger="hover" 
    data-bs-toggle="popover" 
    data-bs-placement="{{ $placement }}" 
    data-bs-html="true"

    x-init="new bootstrap.Popover($el, { 
            html: true,
            content: $refs.popoverContent.innerHTML
        });"
    >
   {{ $slot }}
    
</div>