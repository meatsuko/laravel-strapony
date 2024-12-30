@props([
    'label' => null,
    'link' => '#',

    'icon' => false,

])
<a class="dropdown-item" href="{{ $link }}" {{ $attributes }}>
    <?php if ($icon): ?>
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon dropdown-item-icon">
        {{ $slot }}
    </svg>
    <?php else: ?>
        {{ $slot }}
    <?php endif; ?>
    
    <?php if ($label): ?>
    {{ $label }}
    <?php endif; ?>
</a>