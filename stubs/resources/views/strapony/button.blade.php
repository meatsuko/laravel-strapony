@props([
    'label' => null,

    'class' => null,
    'variant' => 'btn-primary',



    'modal' => null,
    'offcanvas' => null,

])

<?php

$model = $attributes->whereStartsWith('wire:click')->first();
?>


<button

    <?php if ($modal): ?>
    data-bs-toggle="modal" data-bs-target="#{{$modal}}" role="button" 
    <?php endif; ?>

    <?php if ($offcanvas): ?>
    data-bs-toggle="offcanvas" data-bs-target="#{{$offcanvas}}" 
    <?php endif; ?>

    class="btn {{ $variant }} {{ $label ? '' : 'btn-icon' }} {{ $class }}"

    wire:loading.attr="disabled"

    {{ $attributes }}>

    <span wire:loading wire:target="{{ $model }}" class="spinner-border spinner-border-sm {{ $label ? 'me-2' : '' }}" role="status"></span>



    <?php if ($slot): ?>
        <svg wire:loading.remove wire:target="{{ $model }}" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            {{ $slot }}
        </svg>
    <?php endif; ?>
    {{ $label }}
</button>