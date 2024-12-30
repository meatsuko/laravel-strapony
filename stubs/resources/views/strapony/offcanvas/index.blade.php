@props([
'id' => 'modal',

'label' => null,



'custom' => false,

'class' => 'offcanvas-end'

])


<div wire:ignore.self class="offcanvas {{ $class }}" id="{{ $id }}" {{ $attributes }}>
    <div style="display: -webkit-box; display: -ms-flexbox; /* display: flex; */ height: 100vh;">

        {{ $slot }}
    </div>
</div>