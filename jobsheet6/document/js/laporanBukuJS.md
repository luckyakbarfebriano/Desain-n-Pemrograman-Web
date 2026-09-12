# LAPORAN JOBSHEET 6

# LUCKY AKBAR FEBRIANO/12/254107020134/TI-2D

```js
// Mendefinisikan fungsi asynchronous bernama muatDaftarBuku untuk memuat data buku
async function muatDaftarBuku() {
  // Mengambil elemen <tbody> di dalam tabel untuk menampilkan data
  const tbody = document.querySelector(".table-responsive table tbody");
  // Mengambil elemen indikator loading berdasarkan atribut ID-nya
  const loading = document.getElementById("loading-indicator");
  // Jika elemen tbody tidak ditemukan di halaman, hentikan eksekusi fungsi
  if (!tbody) return;

  // Menampilkan indikator loading dengan mengubah display menjadi block
  loading.style.display = "block";
  // Mengosongkan isi tbody agar data lama tidak bertumpuk
  tbody.innerHTML = "";

  // Memulai blok try untuk menangani proses asynchronous dan potensi error
  try {
    // Memberikan jeda waktu simulasi selama 600 milidetik (0,6 detik)
    await new Promise((resolve) => setTimeout(resolve, 600));

    // Mengambil data dari file buku.json menggunakan fetch API
    const res = await fetch("../data/buku.json");
    // Memeriksa apakah respon fetch gagal (status HTTP bukan 200-299)
    if (!res.ok) {
      // Melempar error baru jika permintaan gagal beserta kode statusnya
      throw new Error("Gagal mengambil data (status " + res.status + ")");
    } // Menutup blok percabangan if pengecekan respon
    // Mengubah isi respon data JSON menjadi objek/array JavaScript
    const daftarBuku = await res.json();

    // Mengiterasi setiap objek buku yang ada di dalam array daftarBuku
    daftarBuku.forEach(function (buku) {
      // Membuat elemen baris tabel baru (<tr>)
      const tr = document.createElement("tr");
      // Menyiapkan dan mengisi konten HTML untuk baris tabel
      tr.innerHTML =
        "<td>" + // Tag pembuka kolom pertama (judul)
        buku.
```
