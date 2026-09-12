# LAPORAN JOBSHEET 6

# LUCKY AKBAR FEBRIANO/12/254107020134

```js
// Mendefinisikan fungsi asinkron bernama muatDaftarAnggota
async function muatDaftarAnggota() {
  // Mengambil elemen <tbody> di dalam tabel yang berada pada kontainer .table-responsive
  const tbody = document.querySelector(".table-responsive table tbody");
  // Mengambil elemen indikator loading berdasarkan ID "loading-indicator"
  const loading = document.getElementById("loading-indicator");
  // Mengecek jika elemen tbody tidak ditemukan di halaman, maka hentikan eksekusi fungsi
  if (!tbody) return;

  // Menampilkan indikator loading ke layar dengan mengubah display menjadi block
  loading.style.display = "block";
  // Mengosongkan isi tabel agar data sebelumnya tidak bertumpuk
  tbody.innerHTML = "";

  // Membuka blok try untuk mencoba menjalankan proses pengambilan data
  try {
    // Memberikan jeda waktu simulasi loading selama 600 milidetik
    await new Promise((resolve) => setTimeout(resolve, 600));

    // Mengambil data dari file JSON secara asinkron menggunakan fetch
    const res = await fetch("../data/anggota.json");
    // Memeriksa apakah permintaan fetch gagal (status HTTP bukan 200-299)
    if (!res.ok) {
      // Melemparkan error berisi pesan kegagalan dan status kode respon
      throw new Error("Gagal mengambil data (status " + res.status + ")");
    } // Penutup blok kondisi if pengecekan respon
    // Mengubah isi respon data JSON menjadi data array/objek JavaScript
    const daftarAnggota = await res.json();

    // Mengulang proses untuk setiap data anggota yang ada di dalam array daftarAnggota
    daftarAnggota.forEach(function (anggota) {
      // Membuat elemen baris tabel baru (<tr>) secara dinamis
      const tr = document.createElement("tr");
      // Mengatur isi konten HTML di dalam baris tabel (tr):
      tr.innerHTML =
        "<td>" + // Membuka tag sel kolom pertama
        anggota.no_anggota + // Menyisipkan nilai no_anggota
        "</td>" + // Menutup sel kolom pertama
        "<td>" + // Membuka tag sel kolom kedua
        anggota.nama + // Menyisipkan nilai nama anggota
        "</td>" + // Menutup sel kolom kedua
        "<td>" + // Membuka tag sel kolom ketiga
        anggota.alamat + // Menyisipkan nilai alamat anggota
        "</td>" + // Menutup sel kolom ketiga
        "<td>" + // Membuka tag sel kolom keempat
        anggota.no_hp + // Menyisipkan nilai no_hp anggota
        "</td>" + // Menutup sel kolom keempat
        "<td>" + // Membuka tag sel kolom kelima untuk tombol aksi
        '<button type="button">Edit</button> ' + // Menambahkan elemen tombol Edit
        '<button type="button" class="btn-hapus">Hapus</button>' + // Menambahkan elemen tombol Hapus
        "</td>"; // Menutup tag sel kolom kelima dan mengakhiri string HTML
      // Memasukkan elemen baris <tr> yang sudah dibuat ke dalam elemen <tbody> tabel
      tbody.appendChild(tr);
    }); // Penutup fungsi perulangan forEach
  } catch (err) {
    // Menangkap pesan error jika terjadi kesalahan dalam blok try
    // Mengganti isi tbody dengan baris tabel yang menampilkan pesan error
    tbody.innerHTML =
      '<tr><td colspan="5">Gagal memuat data: ' + err.message + "</td></tr>"; // Baris pesan error selebar 5 kolom
  } finally {
    // Bagian yang akan selalu dijalankan baik proses berhasil maupun gagal
    // Menyembunyikan kembali indikator loading setelah seluruh proses selesai
    loading.style.display = "none";
  } // Penutup blok finally
} // Penutup fungsi muatDaftarAnggota

// Mendaftarkan event listener agar fungsi muatDaftarAnggota dijalankan saat halaman selesai dimuat
document.addEventListener("DOMContentLoaded", muatDaftarAnggota);
```
