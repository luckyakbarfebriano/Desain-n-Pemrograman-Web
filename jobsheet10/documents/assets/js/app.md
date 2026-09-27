# LAPORAN JOBSHEET 10 
# LUCKY AKBAR FEBRIANO / 254107020134 

```js 
// ===== Hamburger menu (JS-driven) =====
function initNavToggle() {
    const toggleBtn = document.getElementById("nav-toggle-btn");
    const nav = document.querySelector("header nav");
    if (!toggleBtn || !nav) return;

    toggleBtn.addEventListener("click", function () {
        nav.classList.toggle("nav-open");
    });
}

// ===== Konfirmasi hapus =====
// Tombol Hapus kini berada di dalam <form class="form-hapus" method="post">
// yang benar-benar mengirim request DELETE ke server (kelas/hapus.php,
// anggota/hapus.php). Konfirmasi dilakukan pada event "submit" agar bisa
// dibatalkan (preventDefault) sebelum request terkirim.
function initHapusConfirm() {
    document.addEventListener("submit", function (e) {
        const form = e.target;
        if (!form.classList.contains("form-hapus")) return;

        const row = form.closest("tr");
        const nama = row ? row.querySelector("td")?.textContent : "data ini";
        const yakin = confirm('Yakin ingin menghapus "' + nama + '"?');
        if (!yakin) {
            e.preventDefault();
        }
    });
}

// ===== Filter/pencarian tabel real-time (untuk baris di halaman saat ini) =====
function initTableFilter() {
    const input = document.getElementById("search-input");
    const table = document.querySelector(".table-responsive table");
    if (!input || !table) return;

    input.addEventListener("keyup", function () {
        const keyword = input.value.toLowerCase();
        const rows = table.querySelectorAll("tbody tr");
        rows.forEach(function (row) {
            const teks = row.textContent.toLowerCase();
            row.style.display = teks.includes(keyword) ? "" : "none";
        });
    });
}

// ===== Validasi form (client-side) =====
function tampilkanError(input, pesan) {
    hapusError(input);
    const span = document.createElement("span");
    span.className = "error";
    span.textContent = pesan;
    input.insertAdjacentElement("afterend", span);
}

function hapusError(input) {
    const next = input.nextElementSibling;
    if (next && next.classList.contains("error")) {
        next.remove();
    }
}

function initValidasiForm() {
    const form = document.getElementById("form-tambah");
    if (!form) return;

    form.addEventListener("submit", function (e) {
        let valid = true;

        const namaUtama = form.querySelector("[name='nama_kelas'], [name='nama']");
        if (namaUtama && namaUtama.value.trim() === "") {
            tampilkanError(namaUtama, "Field ini wajib diisi.");
            valid = false;
        } else if (namaUtama) {
            hapusError(namaUtama);
        }

        const instruktur = form.querySelector("[name='instruktur']");
        if (instruktur && instruktur.value.trim() === "") {
            tampilkanError(instruktur, "Instruktur wajib diisi.");
            valid = false;
        } else if (instruktur) {
            hapusError(instruktur);
        }

        const jadwal = form.querySelector("[name='jadwal']");
        if (jadwal && jadwal.value.trim() === "") {
            tampilkanError(jadwal, "Jadwal wajib diisi.");
            valid = false;
        } else if (jadwal) {
            hapusError(jadwal);
        }

        const kapasitas = form.querySelector("[name='kapasitas']");
        if (kapasitas) {
            const nilai = parseInt(kapasitas.value, 10);
            if (isNaN(nilai) || nilai < 0) {
                tampilkanError(kapasitas, "Kapasitas tidak boleh negatif.");
                valid = false;
            } else {
                hapusError(kapasitas);
            }
        }

        if (!valid) {
            e.preventDefault();
        }
    });
}

document.addEventListener("DOMContentLoaded", function () {
    initNavToggle();
    initHapusConfirm();
    initTableFilter();
    initValidasiForm();
});
``` 