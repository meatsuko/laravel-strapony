@props([

'menu' => null,


])

<div {{ $attributes }}


    x-init="
        $el.addEventListener('contextmenu', function(event) {
            event.preventDefault();
            
            const {
                clientX: mouseX,
                clientY: mouseY
            } = event;

            const ctx = document.getElementById($el.getAttribute('data-bs-target'));
            ctx.style.top = `${mouseY}px`;
            ctx.style.left = `${mouseX}px`;
            ctx.style.display = 'block';
            ctx.style.position = 'fixed';

            ctx.addEventListener('contextmenu', function(event) {
                event.preventDefault();
            });


            document.addEventListener('click', (e) => {
                ctx.style.display = 'none';
                document.removeEventListener('click', this);
                document.removeEventListener('contextmenu', this);

            });
            document.addEventListener('contextmenu', (e) => {
                if (!$el.contains(e.target) && e.target !== $el) {
                    ctx.style.display = 'none';
                    document.removeEventListener('click', this);
                    document.removeEventListener('contextmenu', this);
                }
            });
        });
    "

    data-bs-toggle="context" data-bs-target="{{ $menu }}">
    {{ $slot }}
</div>