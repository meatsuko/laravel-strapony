@props([
'type' => 'text',

'label' => null,
'description' => null,

'required' => false,


'placeholder' => null,

'class' => null,

'loader' => false,


])

<?php

$model = $attributes->whereStartsWith('wire:model')->first();
?>

<div class="{{ $class }}">

    <?php if ($label): ?>
        <label class="form-label @if($required) {{ 'required' }} @endif">{{ $label }}</label>
    <?php endif; ?>

    <div @if($loader) class="input-icon" @endif>
        <input
            type="{{ $type }}"
            class="form-control @error($model) is-invalid @enderror"

            placeholder="{{ $placeholder }}"

            {{ $attributes }}>

        @if($loader)
        <span class="input-icon-addon">
            <div wire:loading wire:target="{{ $model }}" class="spinner-border spinner-border-sm text-secondary" role="status"></div>
        </span>
        @endif


        @error($model)
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror


        <?php if ($description): ?>
            <small class="form-hint">{{ $description }}</small>
        <?php endif; ?>

    </div>
</div>