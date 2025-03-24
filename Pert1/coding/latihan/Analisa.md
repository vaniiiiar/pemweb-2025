ANALISA LATIHAN HARI INI

### INDEX.HTML

1. **Deklarasi `DOCTYPE`**: Memberitahu browser bahwa ini adalah dokumen HTML5.
2. **Elemen `<html>`**: Menentukan bahasa yang digunakan (`lang="en"`).
3. **Bagian `<head>`**:
   - `<meta charset="UTF-8">`  Mendukung karakter Unicode (termasuk aksara non-Inggris).
   - `<meta name="viewport" content="width=device-width, initial-scale=1.0">` Membuat halaman responsif.
   - `<title>Vania</title>` Menentukan judul halaman di tab browser.
4. **Bagian `<body>`**:
   - `<div>` Mengelompokkan elemen-elemen terkait.
   - `<img>` Menampilkan gambar dari folder `../assets/`.
   - `<h1>` dan `<h3>` Menampilkan judul dan subjudul.
   - `<a href="profil.html" target="_blank">` → Link ke halaman `profil.html`, terbuka di tab baru.

### PROFIL.HTML

**Analisis Struktur**

1. **Deklarasi `DOCTYPE`**: Menentukan bahwa dokumen ini menggunakan HTML5.
2. **Elemen `<html lang="en">`**: Menentukan bahasa utama halaman sebagai bahasa Inggris.
3. **Bagian `<head>`**:
   - `<meta charset="UTF-8">` → Memastikan dukungan untuk karakter internasional.
   - `<meta name="viewport" content="width=device-width, initial-scale=1.0">` → Membantu membuat tampilan responsif.
   - `<title>Vania</title>` → Menentukan judul halaman.
4. **Bagian `<body>`**:
   - `<p>` digunakan untuk menyusun informasi pribadi.
   - **Kesalahan Struktur**:
     - `<p>` tidak boleh bersarang di dalam `<p>`, lebih baik gunakan satu per satu tanpa nested.
     - `<p>` yang mengandung "Fakultas Ilmu Komputer..." ditutup dengan `</p>` yang salah.
     - Tag `</>` di akhir dokumen adalah tag tidak dikenal dan harus dihapus.
   - `<a href="index.html" target="_blank">Kembali ke Beranda</a>` → Link untuk kembali ke halaman utama.
