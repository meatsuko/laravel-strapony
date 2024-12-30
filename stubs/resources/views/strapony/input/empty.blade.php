@props([
    'type' => 'text',

    'label' => null,
    'description' => null,

    'required' => false,
    
    
    'placeholder' => null,

    'class' => null,


])

<?php

    $model = $attributes->whereStartsWith('wire:model')->first();
?>

<div class="{{ $class }}">

    <?php if ($label): ?>
    <label class="form-label @if($required) {{ 'required' }} @endif">{{ $label }}</label>
    <?php endif; ?>

    <div>
        {{ $slot }}

        @error($model)
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    

        <?php if ($description): ?>
        <small class="form-hint">{{ $description }}</small>
        <?php endif; ?>

    </div>
</div>
