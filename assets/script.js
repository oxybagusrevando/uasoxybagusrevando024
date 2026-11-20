// Menu navigasi untuk tampilan HP
const menuToggle = document.getElementById("menuToggle");
const mainNav = document.getElementById("mainNav");

if (menuToggle && mainNav) {
    menuToggle.addEventListener("click", function () {
        mainNav.classList.toggle("show");
    });
}

// Validasi sederhana formulir konsultasi
const consultForm = document.getElementById("consultForm");

if (consultForm) {
    consultForm.addEventListener("submit", function (event) {
        const nama = document.getElementById("nama").value.trim();
        const email = document.getElementById("email").value.trim();
        const telepon = document.getElementById("telepon").value.trim();
        const pesan = document.getElementById("pesan").value.trim();
        const formMessage = document.getElementById("formMessage");
        const polaEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        let kesalahan = [];

        if (nama === "") kesalahan.push("Nama belum diisi.");
        if (!polaEmail.test(email)) kesalahan.push("Masukkan alamat email yang benar.");
        if (telepon === "") kesalahan.push("Nomor telepon belum diisi.");
        if (pesan === "") kesalahan.push("Pesan belum diisi.");

        if (kesalahan.length > 0) {
            event.preventDefault();
            formMessage.innerHTML = kesalahan.join("<br>");
        } else {
            formMessage.textContent = "";
        }
    });
}
