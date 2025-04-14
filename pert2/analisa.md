# Bootstrap: Analisis 5W+1H dan SWOT

## 5W + 1H

### What (Apa itu Bootstrap?)

Bootstrap adalah framework front-end open-source yang digunakan untuk membangun antarmuka web yang responsif dan mobile-first. Bootstrap menyediakan kumpulan komponen siap pakai berbasis HTML, CSS, dan JavaScript.

### Why (Mengapa Menggunakan Bootstrap?)

- Mempercepat proses pengembangan UI
- Menghasilkan tampilan yang konsisten
- Mendukung desain responsif secara default
- Komunitas besar dan dokumentasi lengkap

### When (Kapan Digunakan?)

- Saat ingin membangun tampilan web dengan cepat dan efisien
- Ketika dibutuhkan desain yang responsif
- Dalam proyek tim agar style antar developer seragam

### Where (Di Mana Digunakan?)

- Proyek pengembangan web (landing page, dashboard, e-commerce, dll)
- Web application berbasis HTML/CSS
- Digunakan baik dalam pengembangan frontend statis maupun dinamis

### Who (Siapa yang Menggunakannya?)

- Frontend developer
- Fullstack developer
- UI/UX designer yang ingin mempercepat proses desain-prototipe

### How (Bagaimana Cara Menggunakannya?)

1. Unduh atau gunakan CDN Bootstrap.
2. Sertakan file CSS dan JS ke dalam proyek.
3. Gunakan class-class Bootstrap untuk membangun layout, tombol, form, dan komponen UI lainnya.
4. Kustomisasi jika diperlukan (dengan CSS tambahan atau Bootstrap Custom Build).

---

## SWOT

### Strengths (Kekuatan)

- Komponen UI lengkap dan siap pakai
- Responsif secara default (mobile-first)
- Dukungan komunitas besar dan dokumentasi sangat lengkap
- Konsistensi desain antardev dalam satu tim

### Weaknesses (Kelemahan)

- Tampilan default mudah dikenali (butuh kustomisasi agar unik)
- File bawaan cukup besar tanpa optimasi
- Terbatas pada struktur dan konvensi class tertentu

### Opportunities (Peluang)

- Dapat digabung dengan framework lain (seperti React, Vue, Laravel)
- Sangat cocok untuk prototyping cepat
- Dukungan tema premium & ekstensi dari pihak ketiga

### Threats (Ancaman)

- Persaingan dengan framework lain seperti Tailwind CSS, Bulma, dan Materialize
- Terlalu bergantung pada Bootstrap bisa membatasi kreativitas desain
- Potensi kesulitan dalam migrasi ke sistem desain kustom

## Elemen-Elemen Bootstrap yang Digunakan

### 1. `Navbar`

Digunakan untuk menampilkan navigasi utama di bagian atas halaman.

```html
<nav class="navbar navbar-expand-lg bg-body-tertiary"> ... </nav>
```

**Class penting:**

* `navbar` : Komponen utama navigasi.
* `navbar-expand-lg` : Membuat navbar responsif.
* `bg-body-tertiary` : Warna latar belakang bawaan Bootstrap.
* `navbar-toggler` dan `collapse navbar-collapse` : Untuk fitur collapse pada mobile.

---

### 2. `Card`

Komponen utama untuk menampilkan profil, skill, dan bagian lainnya dalam bentuk kotak konten.

```html
<div class="card mb-4"> ... </div>
```

**Class penting:**

* `card` : Container kotak Bootstrap.
* `card-body` : Konten dalam card.
* `text-center` : Untuk rata tengah teks.

---

### 3. `Image`

Bootstrap memberikan class tambahan agar gambar tampil rapi dan responsif.

```html
<img src="..." class="rounded-circle img-fluid" style="width: 200px;">
```

**Class penting:**

* `rounded-circle` : Membuat gambar bulat.
* `img-fluid` : Membuat gambar responsif mengikuti ukuran parent.

---

### 4. `Progress Bar`

Digunakan untuk menampilkan skill dalam bentuk progres.

```html
<div class="progress">
  <div class="progress-bar" style="width: 90%;"></div>
</div>
```

**Class penting:**

* `progress` : Container bar.
* `progress-bar` : Bagian isi progress.
* `rounded` : Membuat ujung bar membulat.

---

### `Grid System`

Bootstrap menggunakan sistem grid 12 kolom untuk mengatur layout.

```html
<div class="row justify-content-center">
  <div class="col-lg-5"> ... </div>
</div>
```

**Class penting:**

* `row` : Baris layout.
* `col-lg-5` : Lebar kolom saat layar besar (5 dari 12).
* `justify-content-center` : Menengahkan konten secara horizontal.

---

### 6. `Buttons`

Tombol-tombol dengan berbagai style Bootstrap.

```html
<button class="btn btn-primary">Tangerang</button>
```

 **Class penting:**

* `btn` : Class dasar tombol.
* `btn-primary` : Warna tombol utama.
* `btn-outline-primary` : Versi outline dari tombol utama.

---

### 7. `List Group`

Untuk membuat daftar tautan profil ke media sosial atau website.

```html
<ul class="list-group list-group-flush"> ... </ul>
```

**Class penting:**

* `list-group` : Komponen daftar Bootstrap.
* `list-group-item` : Item dalam list.

---

### 8. `Footer`

Bagian bawah halaman untuk copyright.

```html
<footer class="footer mt-5">
  <div class="container text-center">
    <p class="text muted">© 2024</p>
  </div>
</footer>
```

 **Class penting:**

* `footer` : Penanda bagian bawah (custom class).
* `mt-5` : Margin atas.
* `text-center` : Teks tengah.

---

## 💻 Cara Menjalankan

1. Simpan file ini dengan ekstensi `.html`.
2. Buka di browser.
3. Pastikan koneksi internet aktif untuk mengakses CDN Bootstrap dan icon (jika menggunakan FontAwesome).

---

## 📦 Resources

* [Bootstrap Docs](https://getbootstrap.com/docs/5.3/getting-started/introduction/)
* [Font Awesome](https://fontawesome.com/) *(jika digunakan untuk ikon)*
