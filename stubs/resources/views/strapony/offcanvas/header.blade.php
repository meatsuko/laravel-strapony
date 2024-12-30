@props([
    'class' => null
    ])<div class="offcanvas-header border-bottom {{ $class }}" style="padding: 10px; padding-left: 20px; padding-right: 20px;" {{ $attributes }}>
    {{ $slot }}
</div>