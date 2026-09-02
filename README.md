# 📚 Sistem Peminjaman Perpustakaan (Perpus Laravel)

Sistem Informasi Peminjaman Perpustakaan berbasis web yang dibangun menggunakan framework **Laravel 12** dan **Laravel Breeze** untuk autentikasi pengguna. Aplikasi ini dirancang untuk mempermudah pengelolaan data buku dan transaksi peminjaman buku oleh anggota perpustakaan.

---

## 🚀 Fitur Utama

- **Autentikasi Pengguna**: Login, Register, & Manajemen Profil (Laravel Breeze).
- **Multi-Role User**:
  - **Admin**: Mengelola data buku (CRUD) dan transaksi peminjaman.
  - **Siswa / Anggota**: Melihat katalog buku dan riwayat peminjaman.
- **Manajemen Buku**:
  - Pengelolaan data buku (Kode Buku, Judul, Pengarang, Penerbit, Stok).
- **Manajemen Peminjaman**:
  - Transaksi peminjaman dan pengembalian buku.
  - Tracking status peminjaman (`dipinjam` / `dikembalikan`).

---

## 🛠️ Teknologi yang Digunakan

- **Backend**: [Laravel 12](https://laravel.com/) (PHP ^8.2)
- **Frontend**: Blade, Tailwind CSS, Vite
- **Authentication**: Laravel Breeze
- **Database**: MySQL / MariaDB

---

## ⚙️ Panduan Instalasi (Local Development)

### 1. Clone Repository
```bash
git clone https://github.com/zihanauliarahman21/perpus-laravel.git
cd perpus-laravel
```

### 2. Install Dependensi PHP & Node.js
```bash
composer install
npm install
```

### 3. Konfigurasi Environment (`.env`)
Salin file `.env.example` menjadi `.env`:
```bash
cp .env.example .env
```
Buka file `.env` dan sesuaikan konfigurasi database Anda:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=perpus_laravel
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Generate App Key
```bash
php artisan key:generate
```

### 5. Jalankan Migration
```bash
php artisan migrate
```

### 6. Build Asset Frontend & Jalankan Server
Buka dua terminal terpisah:

**Terminal 1 (Vite):**
```bash
npm run dev
```

**Terminal 2 (Laravel Server):**
```bash
php artisan serve
```

Akses aplikasi di browser pada: `http://127.0.0.1:8000`

---

## 📝 Lisensi
Projek ini dibuat untuk keperluan pembelajaran dan bebas dikembangkan lebih lanjut.
