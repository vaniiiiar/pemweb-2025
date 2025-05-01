## 📝 Catatan Proyek: Pemrograman Web dengan Laravel, Filament, dan Docker

### 🔧 Setup Awal Docker dan Laravel Project

```bash
docker compose up -d --build
docker exec -it pemweb bash
composer create-project --prefer-dist raugadh/fila-starter .
```

### ⚙️ Konfigurasi Laravel

1. Ubah file `.env` di folder `src`.
2. Jalankan perintah berikut untuk inisialisasi Laravel:
   ```bash
   php artisan key:generate
   php artisan storage:link
   php artisan migrate
   php artisan project:init
   ```
3. Ubah permission folder agar dapat diakses web server:
   ```bash
   chown -R www-data:www-data storage/*
   chown -R www-data:www-data bootstrap/*
   ```

### 🗃️ Migrasi & Model

- Ubah struktur **database** di file `migrations` sesuai kebutuhan.

### 📦 Buat API

1. Buat controller:
   ```bash
   php artisan make:controller Api/ProductApiController
   ```
2. Tambahkan logic di:
   - `app/Models/Client.php` dan `Product.php`
   - `app/Http/Controllers/Api/ProductApiController.php`

3. Buat middleware untuk autentikasi client:
   ```bash
   php artisan make:middleware ClientAuth
   ```
   - Implementasikan logika autentikasi di `app/Http/Middleware/ClientAuth.php`

4. Buat file route:
   - Tambahkan file `routes/api.php`
   - Tambahkan rute untuk API produk

5. Register middleware di `bootstrap/app.php`.

6. Cek daftar route:
   ```bash
   php artisan route:list
   ```

### 🌐 Buat Resource & Admin Panel

1. Buat resource:
   ```bash
   php artisan make:filament-resource Client --generate
   php artisan make:filament-resource Products --generate
   ```

2. Jalankan migrasi ulang:
   ```bash
   php artisan migrate
   ```

3. Edit halaman edit client di:
   - `app/Filament/Resources/ClientResource/Pages/EditClient.php`

4. Akses admin panel:
   - Buka browser ke: `http://localhost/admin`
   - Tambahkan data **Client** dan **Products**

### 📮 Uji API dengan Postman

1. Buat **New Collection**: `Pemrograman Web`
2. Tambah folder `Products`, lalu buat request:
   - **Method**: `GET`
   - **URL**: `http://localhost/api/products`
   - **Auth Type**: `Bearer Token`
   - Salin token dari halaman **Client** di admin panel
   - Klik **Send**

