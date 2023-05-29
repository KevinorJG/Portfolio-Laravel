import './bootstrap';

window.addEventListener('unload', function () {
    // Realizar una solicitud POST al servidor para limpiar la caché
    fetch('{{ route("clear-cache") }}', { method: 'POST' });
});

