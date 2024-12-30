@props([
'id' => 'menu-1',

'context' => false,


])





<div
    id="{{ $id }}"
    class="dropdown-menu"
    <?php if ($context): ?>
    style="position: fixed; display: none; z-index: 1050;"
    <?php endif; ?>>
    {{ $slot }}
</div>