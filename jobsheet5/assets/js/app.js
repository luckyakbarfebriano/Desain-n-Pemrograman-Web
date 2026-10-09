// ===== Konfirmasi hapus (front-end only, belum ke server) =====
function initHapusConfirm() {
  document.querySelectorAll(".btn-hapus").forEach(function (btn) {
    btn.addEventListener("click", function () {
      const row = btn.closest("tr");
      const nama = row ? row.querySelector("td")?.textContent : "data ini";
      const yakin = confirm('Yakin ingin menghapus "' + nama + '"?');
      if (yakin && row) {
        row.remove();
      }
    });
  });
}

// ===== Filter/pencarian tabel real-time =====
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

    // Field utama: nama_kelas (form kelas) atau nama (form anggota)
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
  initHapusConfirm();
  initTableFilter();
  initValidasiForm();
});
