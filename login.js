// login.js
// Script sederhana untuk halaman login
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Hore Kamu Berhasil Login (simulasi)!');
        });
    }
});