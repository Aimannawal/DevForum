# DevForum

**DevForum** adalah platform Laravel untuk dokumentasi paket atau framework, diskusi forum, dan fitur AI (DevAi) yang membantu pengguna mencari dan memanfaatkan informasi teknis.

## Fitur

- **Dokumentasi**: Pengguna dapat menambah dan mencari dokumentasi paket atau framework.
- **Forum**: Platform untuk berdiskusi tentang topik teknis.
- **DevAi**: Fitur AI untuk membantu pengguna mencari informasi teknis dengan cepat.

## Persyaratan

- PHP 8.2.4^
- Composer
- MySQL atau database lain yang didukung Laravel

## Instalasi

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di lokal Anda:

1. **Clone Repositori**

   ```bash
   git clone https://github.com/Aimannawal/Festida-Paket-Hemat-Indihome.git
   ```
   ```bash
   cd Festida-Paket-Hemat-Indihome.git
   ```

2. **Instal Dependencies**

   ```bash
   composer install
   ```

3. **Konfigurasi Environment**

   Duplikat file `.env.example` menjadi `.env` dan sesuaikan dengan konfigurasi database Anda.

   ```bash
   cp .env.example .env
   ```

4. **Generate Key Aplikasi**

   ```bash
   php artisan key:generate
   ```

5. **Migrasi dan Seeder**

   Jalankan migrasi database dan seeder untuk menambahkan data awal.

   ```bash
   php artisan migrate --seed
   ```

6. **Membuat Storage Link**

   Laravel membutuhkan symbolic link ke folder `storage` untuk mengakses file yang diupload. Jalankan perintah berikut untuk membuat `storage link`:

   ```bash
   php artisan storage:link
   ```

7. **Menjalankan Server**

   Jalankan server pengembangan Laravel.

   ```bash
   php artisan serve
   ```

   Aplikasi Anda akan berjalan di `http://localhost:8000`.


## Seeder yang Tersedia

Seeder telah disiapkan untuk membuat data awal, termasuk contoh dokumentasi, postingan forum, dan data AI. Seeder dapat diubah di `database/seeders` untuk menyesuaikan kebutuhan.

## Penggunaan

1. **Registrasi Akun**: Pengguna dapat mendaftar untuk bergabung di platform.
2. **Dokumentasi**: Pengguna dapat mengakses, menambah, atau memperbarui dokumentasi untuk berbagai paket atau framework.
3. **Forum**: Pengguna dapat memposting dan membalas diskusi di forum.
4. **DevAi**: Pengguna dapat mencari informasi teknis menggunakan fitur DevAi.

> **Catatan**: Pastikan untuk memeriksa dokumentasi Laravel jika Anda mengalami kendala saat pengembangan.
```
