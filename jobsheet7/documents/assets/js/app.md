# LAPORAN JOBSHEET 7

# LUCKY AKBAR FEBRIANO / 12 /254107020134

```js
function initNavToggle() {
  // Mendefinisikan fungsi untuk menginisialisasi tombol navigasi
  const toggleBtn = document.getElementById("nav-toggle-btn"); // Mendapatkan elemen tombol toggle navigasi berdasarkan ID
  const nav = document.querySelector("header nav"); // Mendapatkan elemen navigasi di dalam header
  if (!toggleBtn || !nav) return; // Jika tombol atau navigasi tidak ditemukan, hentikan eksekusi fungsi
  toggleBtn.addEventListener("click", function () {
    // Menambahkan event listener 'click' ke tombol toggle
    nav.classList.toggle("nav-open"); // Mengganti (menambah/menghapus) kelas 'nav-open' pada navigasi
  });
}

function initHapusConfirm() {
  // Mendefinisikan fungsi untuk menginisialisasi konfirmasi penghapusan
  document.addEventListener("click", function (e) {
    // Menambahkan event listener 'click' ke seluruh dokumen
    const btn = e.target.closest(".btn-hapus"); // Mencari elemen tombol dengan kelas 'btn-hapus' yang terdekat dari target klik
    if (!btn) return; // Jika tombol 'btn-hapus' tidak ditemukan, hentikan eksekusi
    const row = btn.closest("tr"); // Mencari elemen baris tabel (tr) yang terdekat dari tombol
    const nama = row ? row.querySelector("td")?.textContent : "data ini"; // Mendapatkan teks dari kolom pertama baris, atau 'data ini' jika tidak ada
    const yakin = confirm('Yakin ingin menghapus "' + nama + '"?'); // Menampilkan dialog konfirmasi penghapusan dengan nama data
    if (yakin && row) {
      // Jika pengguna mengkonfirmasi dan baris ditemukan
      row.remove(); // Menghapus baris dari DOM
    }
  });
}

function initTableFilter() {
  // Mendefinisikan fungsi untuk menginisialisasi filter tabel
  const input = document.getElementById("search-input"); // Mendapatkan elemen input pencarian berdasarkan ID
  const table = document.querySelector(".table-responsive table"); // Mendapatkan elemen tabel di dalam elemen dengan kelas 'table-responsive'
  if (!input || !table) return; // Jika input atau tabel tidak ditemukan, hentikan eksekusi fungsi
  input.addEventListener("keyup", function () {
    // Menambahkan event listener 'keyup' ke input pencarian
    const keyword = input.value.toLowerCase(); // Mendapatkan nilai input dan mengubahnya menjadi huruf kecil sebagai kata kunci
    const rows = table.querySelectorAll("tbody tr"); // Mendapatkan semua baris (tr) di dalam tbody tabel
    rows.forEach(function (row) {
      // Melakukan iterasi pada setiap baris tabel
      const teks = row.textContent.toLowerCase(); // Mendapatkan semua teks dalam baris dan mengubahnya menjadi huruf kecil
      row.style.display = teks.includes(keyword) ? "" : "none"; // Menampilkan baris jika teksnya mengandung kata kunci, jika tidak, sembunyikan
    });
  });
}

document.addEventListener("DOMContentLoaded", function () {
  // Menambahkan event listener yang akan dijalankan setelah DOM sepenuhnya dimuat
  initNavToggle(); // Memanggil fungsi untuk menginisialisasi tombol navigasi
  initHapusConfirm(); // Memanggil fungsi untuk menginisialisasi konfirmasi penghapusan
  initTableFilter(); // Memanggil fungsi untuk menginisialisasi filter tabel
});
```
