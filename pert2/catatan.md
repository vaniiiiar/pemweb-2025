
# Pertemuan 2 - Pemrograman Web

**Tanggal:** Senin, 14 April 2025

**Waktu:** 09.30 - 12.00

### Langkah-langkah:

1. #### **Masuk ke Folder Perkuliahan**

   * Menggunakan terminal, masuk ke direktori `perkuliahan/pemrograman-web`.
2. #### **Membuat Folder Pertemuan 2**

   * Membuat folder `pertemuan-2` untuk menyimpan file dan folder pada pertemuan hari ini.
3. #### **Menyiapkan Folder Coding**

   * Di dalam `pertemuan-2`, dibuat folder `coding` untuk menyimpan file proyek.
   * Menyalin folder dan file dari pertemuan sebelumnya:
     * Folder `nginx`
     * Folder `src`
     * File `.env`
     * File `docker-compose.yml`
4. ### **Menjalankan Proyek dengan Docker**

   * Buka terminal dan masuk ke folder `pertemuan-2/coding`.
   * Jalankan perintah berikut untuk build dan menjalankan kontainer:
     ```bash
     docker compose up -d --build
     ```
   * Pastikan tidak ada error saat proses build dan container berjalan dengan baik.
5. ### **Menambahkan dan Mengedit File index.html**

   * Masuk ke folder `src`, kemudian buat file `index.html`.
   * Masukkan kode HTML dengan Bootstrap yang sudah disiapkan.
   * Simpan perubahan, lalu buka browser dan akses `localhost` untuk melihat hasilnya.
6. ## **Implementasi Bootstrap**

   ### 🔧 Komponen yang Dipelajari:

   * **Navbar** : Navigasi utama dengan mode collapse di layar kecil.
   * **Card** : Untuk menampilkan profil dan deskripsi.
   * **Button** : Berbagai gaya tombol menggunakan class Bootstrap.
   * **Progress Bar** : Visualisasi skill dalam bentuk bar.
   * **Grid System** : Penggunaan `row` dan `col` untuk layout responsif.

   ### 📦 CDN Bootstrap

   ```html
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   ```

## Teknologi yang Digunakan

* HTML5
* Bootstrap 5 (via CDN)
* Docker (untuk lingkungan pengembangan)
* Nginx

## Catatan Tambahan

Bootstrap mempermudah proses styling dan pembuatan layout responsif. Semua file hasil latihan disimpan di folder `pertemuan-2/coding`. Pastikan setiap perubahan pada `index.html` disimpan, lalu refresh browser untuk melihat perubahannya.
