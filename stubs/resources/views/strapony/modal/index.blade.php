@props([
    'id' => 'modal',

    'label' => null,



    'custom' => false,

])

<div wire:ignore.self class="modal modal-blur fade" id="{{ $id }}" tabindex="-1" style="display: none;" aria-hidden="true" {{ $attributes }}>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            
            <div class="modal-header">
                <h5 class="modal-title">{{ $label }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
                
                {{ $slot }}

        </div>
    </div>
</div>