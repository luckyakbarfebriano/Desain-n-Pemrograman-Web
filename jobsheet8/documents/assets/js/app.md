# LAPORAN JOBSHEET 8

# LUCKY AKBAR FEBRIANO / 12 / 254107020134

```js
function initNavToggle() {
  // Mendefinisikan fungsi untuk menginisialisasi fungsionalitas tombol navigasi
  const toggleBtn = document.getElementById("nav-toggle-btn"); // Mendapatkan elemen tombol toggle navigasi berdasarkan ID
  const nav = document.querySelector("header nav"); // Mendapatkan elemen navigasi di dalam header
  if (!toggleBtn || !nav) return; // Jika tombol toggle atau navigasi tidak ditemukan, hentikan eksekusi fungsi
  toggleBtn.addEventListener("click", function () {
    // Menambahkan event listener 'click' ke tombol toggle
    nav.classList.toggle("nav-open"); // Mengaktifkan atau menonaktifkan kelas "nav-open" pada navigasi saat tombol diklik
  });
}

function initHapusConfirm() {
  // Mendefinisikan fungsi untuk menginisialisasi konfirmasi penghapusan data
  document.addEventListener("click", function (e) {
    // Menambahkan event listener 'click' ke seluruh dokumen untuk menangani delegasi event
    const btn = e.target.closest(".btn-hapus"); // Mencari elemen tombol terdekat dengan kelas ".btn-hapus" dari elemen yang diklik
    if (!btn) return; // Jika elemen yang diklik bukan bagian dari tombol hapus, hentikan eksekusi
    const row = btn.closest("tr"); // Mencari elemen baris tabel (<tr>) terdekat dari tombol hapus
    const nama = row ? row.querySelector("td")?.textContent : "data ini"; // Mendapatkan teks dari sel pertama (<td>) di baris, atau default "data ini" jika tidak ada
    const yakin = confirm('Yakin ingin menghapus "' + nama + '"?'); // Menampilkan dialog konfirmasi kepada pengguna dengan nama data yang akan dihapus
    if (yakin && row) {
      // Jika pengguna mengkonfirmasi penghapusan dan baris ditemukan
      row.remove(); // Menghapus baris dari DOM
    }
  });
}

function initTableFilter() {
  // Mendefinisikan fungsi untuk menginisialisasi fungsionalitas filter tabel
  const input = document.getElementById("search-input"); // Mendapatkan elemen input pencarian berdasarkan ID
  const table = document.querySelector(".table-responsive table"); // Mendapatkan elemen tabel di dalam div ".table-responsive"
  if (!input || !table) return; // Jika input pencarian atau tabel tidak ditemukan, hentikan eksekusi fungsi
  input.addEventListener("keyup", function () {
    // Menambahkan event listener 'keyup' ke input pencarian
    const keyword = input.value.toLowerCase(); // Mengambil nilai input dan mengubahnya menjadi huruf kecil untuk pencarian case-insensitive
    const rows = table.querySelectorAll("tbody tr"); // Mendapatkan semua baris (<tr>) di dalam tbody tabel
    rows.forEach(function (row) {
      // Melakukan iterasi untuk setiap baris tabel
      const teks = row.textContent.toLowerCase(); // Mengambil seluruh teks di baris dan mengubahnya menjadi huruf kecil
      row.style.display = teks.includes(keyword) ? "" : "none"; // Menampilkan baris jika teks mengandung kata kunci, sembunyikan jika tidak
    });
  });
}

document.addEventListener("DOMContentLoaded", function () {
  // Menambahkan event listener yang akan dijalankan ketika seluruh DOM telah dimuat dan di-parse
  initNavToggle(); // Memanggil fungsi untuk menginisialisasi fungsionalitas toggle navigasi
  initHapusConfirm(); // Memanggil fungsi untuk menginisialisasi konfirmasi penghapusan
  initTableFilter(); // Memanggil fungsi untuk menginisialisasi filter tabel
});
```
