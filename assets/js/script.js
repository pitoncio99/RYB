// script.js
document.addEventListener("DOMContentLoaded", function() {
    const btn = document.getElementById('btn-action');
    if (btn) {
        btn.addEventListener('click', function() {
            alert('¡Gracias por contactarnos! Nos pondremos en contacto contigo pronto.');
        });
    }
});
