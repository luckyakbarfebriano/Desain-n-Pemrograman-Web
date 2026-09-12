# LAPORAN JOBSHEET 5

# LUCKY AKBAR FEBRIANO/12/254107020134

```js
// ===== Hamburger menu (JS-driven, menggantikan checkbox hack) =====
// ===== Hamburger menu (JS-driven, menggantikan checkbox hack) ===== // Ini adalah komentar pembatas dan judul bagian untuk fitur menu hamburger.
function initNavToggle() {
  // Mendefinisikan fungsi bernama initNavToggle untuk mengelola toggle navigasi.
  const toggleBtn = document.getElementById("nav-toggle-btn"); // Mencari elemen tombol dengan ID "nav-toggle-btn" dan menyimpannya di variabel toggleBtn.
  const nav = document.querySelector("header nav"); // Mencari elemen navigasi di dalam elemen header dan menyimpannya di variabel nav.
  if (!toggleBtn || !nav) return; // Jika tombol atau navigasi tidak ditemukan, hentikan eksekusi fungsi ini.

  toggleBtn.addEventListener("click", function () {
    // Menambahkan event listener untuk peristiwa 'click' pada tombol toggleBtn.
    nav.classList.toggle("nav-open"); // Ketika tombol diklik, tambahkan atau hapus kelas CSS "nav-open" dari elemen navigasi.
  }); // Menutup definisi fungsi callback untuk event listener.
} // Menutup definisi fungsi initNavToggle.

// ===== Konfirmasi hapus (front-end only, belum ke server) ===== // Ini adalah komentar pembatas dan judul bagian untuk fitur konfirmasi penghapusan data.
function initHapusConfirm() {
  // Mendefinisikan fungsi bernama initHapusConfirm untuk mengelola konfirmasi penghapusan.
  document.querySelectorAll(".btn-hapus").forEach(function (btn) {
    // Mencari semua elemen dengan kelas "btn-hapus" dan mengulangi setiap elemen tombol.
    btn.addEventListener("click", function () {
      // Menambahkan event listener untuk peristiwa 'click' pada setiap tombol hapus.
      const row = btn.closest("tr"); // Mencari elemen baris tabel (<tr>) terdekat dari tombol yang diklik dan menyimpannya.
      const nama = row ? row.querySelector("td")?.textContent : "data ini"; // Mengambil teks dari sel pertama (<td>) di baris tersebut sebagai nama, jika baris ada, atau "data ini" jika tidak.
      const yakin = confirm('Yakin ingin menghapus "' + nama + '"?'); // Menampilkan dialog konfirmasi kepada pengguna dengan nama data yang akan dihapus.
      if (yakin && row) {
        // Jika pengguna menekan 'OK' pada konfirmasi DAN baris data ditemukan.
        row.remove(); // Hapus baris tabel tersebut dari Document Object Model (DOM).
      } // Menutup blok if.
    }); // Menutup definisi fungsi callback untuk event listener.
  }); // Menutup definisi fungsi callback untuk metode forEach.
} // Menutup definisi fungsi initHapusConfirm.

// ===== Filter/pencarian tabel real-time =====                  // Ini adalah komentar pembatas dan judul bagian untuk fitur filter tabel secara real-time.
function initTableFilter() {
  // Mendefinisikan fungsi bernama initTableFilter untuk fungsionalitas pencarian tabel.
  const input = document.getElementById("search-input"); // Mencari elemen input dengan ID "search-input" (kolom pencarian).
  const table = document.querySelector(".table-responsive table"); // Mencari elemen tabel di dalam kontainer dengan kelas "table-responsive".
  if (!input || !table) return; // Jika elemen input atau tabel tidak ditemukan, hentikan eksekusi fungsi.

  input.addEventListener("keyup", function () {
    // Menambahkan event listener untuk peristiwa 'keyup' (saat tombol dilepas) pada input pencarian.
    const keyword = input.value.toLowerCase(); // Mengambil nilai dari input pencarian dan mengubahnya menjadi huruf kecil untuk pencocokan.
    const rows = table.querySelectorAll("tbody tr"); // Mencari semua baris (<tr>) di dalam bagian tbody tabel.
    rows.forEach(function (row) {
      // Mengulang setiap baris tabel yang ditemukan.
      const teks = row.textContent.toLowerCase(); // Mengambil seluruh teks konten dari baris saat ini dan mengubahnya menjadi huruf kecil.
      row.style.display = teks.includes(keyword) ? "" : "none"; // Jika teks baris mengandung kata kunci, tampilkan barisnya; jika tidak, sembunyikan baris tersebut.
    }); // Menutup definisi fungsi callback untuk metode forEach.
  }); // Menutup definisi fungsi callback untuk event listener.
} // Menutup definisi fungsi initTableFilter.

// ===== Validasi form (client-side) =====                     // Ini adalah komentar pembatas dan judul bagian untuk fitur validasi form di sisi klien.
function tampilkanError(input, pesan) {
  // Mendefinisikan fungsi bernama tampilkanError dengan parameter elemen input dan pesan error.
  hapusError(input); // Memanggil fungsi hapusError untuk memastikan tidak ada pesan error ganda pada input yang sama.
  const span = document.createElement("span"); // Membuat elemen HTML baru berupa <span> untuk menampilkan pesan error.
  span.className = "error"; // Menambahkan kelas CSS "error" pada elemen span yang baru dibuat.
  span.textContent = pesan; // Mengisi teks elemen span dengan pesan error yang diberikan.
  input.insertAdjacentElement("afterend", span); // Menyisipkan elemen span (pesan error) tepat setelah elemen input yang relevan.
} // Menutup definisi fungsi tampilkanError.

function hapusError(input) {
  // Mendefinisikan fungsi bernama hapusError dengan parameter elemen input.
  const next = input.nextElementSibling; // Mencari elemen saudara (sibling) berikutnya dari elemen input.
  if (next && next.classList.contains("error")) {
    // Jika ada elemen berikutnya DAN elemen tersebut memiliki kelas "error".
    next.remove(); // Hapus elemen error tersebut dari DOM.
  } // Menutup blok if.
} // Menutup definisi fungsi hapusError.

function initValidasiForm() {
  // Mendefinisikan fungsi bernama initValidasiForm untuk mengelola validasi form.
  const form = document.getElementById("form-tambah"); // Mencari elemen form dengan ID "form-tambah" dan menyimpannya di variabel form.
  if (!form) return; // Jika form tidak ditemukan, hentikan eksekusi fungsi.

  form.addEventListener("submit", function (e) {
    // Menambahkan event listener untuk peristiwa 'submit' pada form.
    let valid = true; // Mendeklarasikan variabel valid dan mengaturnya ke true (mengasumsikan form valid pada awalnya).

    const judul = form.querySelector("[name='judul'], [name='nama']"); // Mencari elemen input dengan atribut name 'judul' atau 'nama' di dalam form.
    if (judul && judul.value.trim() === "") {
      // Jika field judul ada DAN nilainya kosong setelah spasi dihilangkan.
      tampilkanError(judul, "Field ini wajib diisi."); // Tampilkan pesan error bahwa field ini wajib diisi.
      valid = false; // Atur variabel valid menjadi false karena ada error.
    } else if (judul) {
      // Jika field judul ada DAN nilainya tidak kosong.
      hapusError(judul); // Hapus pesan error yang mungkin ada pada field judul sebelumnya.
    }

    const pengarang = form.querySelector("[name='pengarang']"); // Mencari elemen input dengan atribut name 'pengarang' di dalam form.
    if (pengarang && pengarang.value.trim() === "") {
      // Jika field pengarang ada DAN nilainya kosong setelah spasi dihilangkan.
      tampilkanError(pengarang, "Pengarang wajib diisi."); // Tampilkan pesan error bahwa pengarang wajib diisi.
      valid = false; // Atur variabel valid menjadi false.
    } else if (pengarang) {
      // Jika field pengarang ada DAN nilainya tidak kosong.
      hapusError(pengarang); // Hapus pesan error yang mungkin ada pada field pengarang sebelumnya.
    }

    const tahun = form.querySelector("[name='tahun']"); // Mencari elemen input dengan atribut name 'tahun' di dalam form.
    if (tahun) {
      // Jika field tahun ada.
      const nilai = parseInt(tahun.value, 10); // Mengambil nilai tahun dan mengubahnya menjadi bilangan bulat (basis 10).
      if (isNaN(nilai) || nilai < 1900 || nilai > 2026) {
        // Jika nilai bukan angka, atau di luar rentang tahun 1900-2026.
        tampilkanError(tahun, "Tahun harus di antara 1900-2026."); // Tampilkan pesan error untuk field tahun.
        valid = false; // Atur variabel valid menjadi false.
      } else {
        // Jika nilai tahun valid.
        hapusError(tahun); // Hapus pesan error yang mungkin ada pada field tahun sebelumnya.
      }
    }

    const stok = form.querySelector("[name='stok']"); // Mencari elemen input dengan atribut name 'stok' di dalam form.
    if (stok) {
      // Jika field stok ada.
      const nilai = parseInt(stok.value, 10); // Mengambil nilai stok dan mengubahnya menjadi bilangan bulat (basis 10).
      if (isNaN(nilai) || nilai < 0) {
        // Jika nilai bukan angka, atau kurang dari 0.
        tampilkanError(stok, "Stok tidak boleh negatif."); // Tampilkan pesan error bahwa stok tidak boleh negatif.
        valid = false; // Atur variabel valid menjadi false.
      } else {
        // Jika nilai stok valid.
        hapusError(stok); // Hapus pesan error yang mungkin ada pada field stok sebelumnya.
      }
    }

    if (!valid) {
      // Jika ada validasi yang gagal (variabel valid bernilai false).
      e.preventDefault(); // Mencegah pengiriman form agar halaman tidak direload.
    }
  }); // Menutup definisi fungsi callback untuk event listener.
} // Menutup definisi fungsi initValidasiForm.

document.addEventListener("DOMContentLoaded", function () {
  // Menambahkan event listener yang akan dijalankan ketika seluruh konten HTML telah dimuat dan di-parse.
  initNavToggle(); // Memanggil fungsi untuk menginisialisasi fungsionalitas tombol navigasi.
  initHapusConfirm(); // Memanggil fungsi untuk menginisialisasi konfirmasi penghapusan.
  initTableFilter(); // Memanggil fungsi untuk menginisialisasi filter/pencarian tabel.
  initValidasiForm(); // Memanggil fungsi untuk menginisialisasi validasi form.
}); // Menutup definisi fungsi callback untuk event listener.
```
