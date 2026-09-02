# 📚 Sistem Peminjaman Perpustakaan (Perpus Laravel)

Sistem Informasi Peminjaman Perpustakaan berbasis web menggunakan **Laravel 12**.

## 🚀 Fitur Utama
- **Autentikasi User & Admin** (Laravel Breeze)
- **Manajemen Buku** (Kode Buku, Judul, Pengarang, Penerbit, Stok)
- **Manajemen Peminjaman** (Status: `dipinjam` / `dikembalikan`)

## ⚙️ Cara Menjalankan Project

```bash
# 1. Clone & masuk folder
git clone https://github.com/zihanauliarahman21/perpus-laravel.git
cd perpus-laravel

# 2. Install dependensi
composer install
npm install

# 3. Setup .env & database
cp .env.example .env
php artisan key:generate
php artisan migrate

# 4. Jalankan server & vite
npm run dev
php artisan serve
```

