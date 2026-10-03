Sistem Manajemen Stok Gudang
Aplikasi web berbasis Laravel untuk mengelola data stok barang pada gudang, dikembangkan sebagai bagian dari pembelajaran mandiri pemrograman web menggunakan framework Laravel.

Deskripsi
Sistem ini dirancang untuk mempermudah pencatatan dan pengelolaan barang di gudang, mencakup data produk, kategori, serta akses pengguna yang terautentikasi. Proyek ini dibangun secara bertahap, mulai dari perancangan basis data hingga implementasi autentikasi dan otorisasi pengguna.

Fitur Utama
Manajemen Data Barang (CRUD) — tambah, lihat, ubah, dan hapus data barang/stok gudang
Manajemen Kategori — pengelompokan barang berdasarkan kategori
Unggah Gambar Barang — penyimpanan dan penampilan gambar produk
Relasi Data (Eloquent Relationships) — keterkaitan antar tabel seperti barang dan kategori
Autentikasi & Otorisasi Pengguna — sistem login serta pembatasan akses berdasarkan peran pengguna
Migrasi & Seeding Basis Data — struktur basis data terdefinisi melalui migration dan data awal melalui seeder
Teknologi yang Digunakan
Backend: Laravel (PHP)
Basis Data: MySQL
Frontend: Blade Templating, CSS
Tools: XAMPP (lingkungan pengembangan lokal)
Cara Menjalankan Proyek
# Clone repository
git clone https://github.com/rafiirham15-design/Laravel.git
cd Laravel

# Instal dependensi
composer install

# Salin dan konfigurasi file environment
cp .env.example .env
php artisan key:generate

# Jalankan migrasi basis data
php artisan migrate

# Jalankan server lokal
php artisan serve
Status Proyek
Dalam pengembangan — fitur CRUD, relasi data, serta autentikasi dan otorisasi telah selesai diimplementasikan. Pengembangan lanjutan masih berjalan seiring progres pembelajaran.

Kontak
Dikembangkan oleh Rafi Irham Nugraha Mahasiswa Sistem Informasi, Universitas Komputer Indonesia (UNIKOM)
