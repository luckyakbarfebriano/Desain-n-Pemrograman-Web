# LAPORAN JOBSHEET 3 BOOTSTRAP

**LUCKY AKBAR FEBRIANO /254107020134 / 12 /  / TI 2D**

## Ringkasan Pekerjaan

`jobsheet3bootstrap` merupakan variasi dari Jobsheet 3 yang menerapkan framework **Bootstrap 5.3.0** pada antarmuka aplikasi. Folder ini tetap menggunakan HTML statis dan belum terhubung ke PHP, database, Supabase, atau file JSON. Tujuan utamanya adalah membandingkan atau menerapkan pendekatan styling berbasis framework pada halaman WE GO GYM dan SIMPUS-kecil, sambil tetap mempertahankan identitas visual melalui CSS buatan sendiri.

## Perubahan dari Jobsheet 3

Perubahan paling penting adalah penambahan stylesheet dan JavaScript Bootstrap melalui CDN pada halaman HTML:

```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
```

Dengan Bootstrap, banyak komponen tidak perlu dibuat seluruhnya dari nol. Class seperti `container`, `row`, `col-md-4`, `card`, `shadow-sm`, `table`, `table-striped`, `table-hover`, `table-responsive`, `form-control`, `btn`, `btn-primary`, `btn-warning`, dan `btn-danger` langsung memberikan struktur, spacing, warna, responsivitas, dan tampilan komponen yang konsisten.

## Struktur Folder

- `index.html` menjadi halaman utama WE GO GYM. Halaman ini memakai komponen `card` untuk sambutan dan ringkasan, lalu menggunakan `row` serta `col-12 col-md-4` agar kartu statistik tersusun satu kolom di layar kecil dan beberapa kolom di layar yang lebih lebar.
- `kelas/list.html` menampilkan tabel kelas dengan `table-striped`, `table-hover`, `align-middle`, dan `table-responsive`. Tombol tambah, edit, dan hapus menggunakan class tombol Bootstrap.
- `kelas/tambah.html` menyediakan form tambah kelas dengan `form-label`, `form-control`, `mb-3`, dan card agar input tersusun rapi.
- `anggota/list.html` dan `anggota/tambah.html` menerapkan pola Bootstrap yang sama untuk daftar serta form anggota.
- `buku/list.html` dan `buku/tambah.html` memakai pola navbar Bootstrap dengan `navbar-expand-lg`, `navbar-toggler`, `collapse`, `navbar-nav`, dan `nav-link`. Komponen tersebut membuat menu dapat berubah menjadi tombol navigasi pada layar kecil.
- `assets/css/style.css` tetap dipakai sebagai CSS khusus aplikasi. Isinya mengatur warna tema WE GO GYM, sidebar, layout shell, typography, tabel, form, tombol custom, dan perilaku responsif yang tidak disediakan secara khusus oleh Bootstrap.
- `assets/js/shell.js` tetap mengatur sidebar custom WE GO GYM, terutama tombol menu mobile dan overlay sidebar.

## Fungsi Bootstrap yang Digunakan

### 1. Layout Responsif

Class `container`, `row`, dan `col-*` membantu mengatur lebar serta susunan elemen berdasarkan ukuran layar. Contohnya, ringkasan dashboard menggunakan `col-12 col-md-4`: pada layar kecil setiap statistik mengambil satu baris penuh, sedangkan pada layar medium atau lebih besar tiga statistik dapat tampil berdampingan.

### 2. Card dan Spacing

Class `card`, `card-body`, `card-title`, `mb-4`, dan `shadow-sm` digunakan untuk membuat panel informasi dengan jarak dan bayangan yang seragam. Hal ini mengurangi kebutuhan menulis CSS manual untuk setiap panel.

### 3. Tabel Data

Class `table` memberikan struktur tabel dasar. `table-striped` memberi warna selang-seling, `table-hover` memberi umpan balik saat kursor berada di atas baris, `table-dark` memberi header gelap, `align-middle` merapikan posisi isi sel, dan `table-responsive` mencegah tabel merusak layout pada layar sempit.

### 4. Form dan Tombol

`form-label`, `form-control`, serta `mb-3` membuat field form lebih konsisten. `btn-primary`, `btn-warning`, dan `btn-danger` membedakan aksi simpan, edit, dan hapus secara visual.

### 5. Navbar Collapsible

Pada halaman buku, `navbar-toggler` dan `collapse` memanfaatkan JavaScript Bootstrap Bundle untuk membuka atau menutup menu navigasi di layar kecil. Atribut `data-bs-toggle="collapse"` dan `data-bs-target="#navMenu"` menghubungkan tombol dengan area menu.

## Hubungan dengan CSS Custom

Bootstrap tidak menggantikan seluruh CSS aplikasi. `style.css` masih diperlukan untuk sidebar WE GO GYM, variabel warna biru, shell dua kolom, header halaman, user chip, overlay, mobile bar, dan detail visual yang menjadi identitas proyek. Jadi pendekatan pada jobsheet ini merupakan kombinasi framework Bootstrap dan styling khusus aplikasi:

- Bootstrap menangani komponen umum dan utility class.
- CSS custom menangani branding, layout sidebar, serta kebutuhan visual yang spesifik.
- JavaScript custom menangani sidebar.
- JavaScript Bootstrap menangani komponen Bootstrap interaktif seperti navbar collapse.

## Batasan dan Catatan

Walaupun terdapat tombol `Edit` dan `Hapus`, halaman ini belum memiliki proses backend. Tombol tersebut masih berupa elemen antarmuka dan belum mengubah data secara permanen. Form juga belum menyimpan data karena belum ada PHP atau koneksi database. Berbeda dari Jobsheet 6, folder ini belum memakai `fetch()` atau file JSON.

## Kesimpulan

Jobsheet 3 Bootstrap memperkenalkan penggunaan framework CSS/JavaScript untuk mempercepat pembuatan antarmuka yang responsif dan konsisten. Versi ini memperkaya Jobsheet 3 dengan layout grid, card, tabel responsif, form terstruktur, tombol berwarna, dan navbar mobile dari Bootstrap 5.3.0, sambil tetap mempertahankan `style.css` serta `shell.js` sebagai bagian penting dari desain custom aplikasi. Tahap ini masih murni frontend dan menjadi alternatif tampilan sebelum proyek beralih ke data dinamis, PHP, dan Supabase.
