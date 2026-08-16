# 🌿 Tanaman Hias — Website Penjualan Tanaman Hias

Aplikasi web e-commerce untuk penjualan tanaman hias yang dibangun dengan **Laravel 11**. Platform ini menghubungkan penjual dan pembeli tanaman hias secara online, mempermudah proses jual-beli dari katalog produk hingga cetak resi pengiriman.

> Proyek ini dikembangkan sebagai bagian dari **Project Based Learning (PBL)** Program Studi Informatika.

---

## 🎬 Demo

[![Demo Video](https://img.shields.io/badge/▶_Tonton_Demo-YouTube-red?style=for-the-badge&logo=youtube)](https://youtu.be/xIbVn1B37yo?si=SHTMWFvz8lBVTml5)


---

## ✨ Fitur Utama

### 🛒 Sisi Pembeli
- **Registrasi & Login** — Buat akun dan masuk untuk mulai berbelanja
- **Katalog Produk** — Jelajahi daftar tanaman hias lengkap dengan nama, deskripsi, harga, stok, tinggi, kategori, dan foto
- **Detail Produk** — Lihat informasi lengkap setiap tanaman
- **Keranjang Belanja** — Tambah, lihat, dan hapus produk dari keranjang
- **Proses Pembelian** — Isi alamat pengiriman, pilih metode pembayaran, dan unggah bukti bayar
- **Riwayat Pesanan** — Pantau status pesanan dan cetak resi
- **Manajemen Profil** — Ubah data akun dan password

### 📦 Sisi Penjual (Admin)
- **Dashboard Beranda** — Ringkasan jumlah produk, stok, pesanan, dan pendapatan
- **Manajemen Produk** — Tambah, edit, hapus, dan lihat detail produk (CRUD)
- **Rekapan Pesanan** — Konfirmasi pembayaran, update status pesanan, dan cetak resi

---

## 🛠️ Tech Stack

| Layer       | Teknologi                          |
| ----------- | ---------------------------------- |
| Backend     | PHP 8.2+, Laravel 11               |
| Frontend    | Blade Templates, Tailwind CSS 3    |
| JS Build    | Vite 5, Alpine.js                  |
| Database    | MySQL                              |
| Auth        | Laravel Breeze                     |

---

## 🚀 Instalasi & Menjalankan (Laragon)

### Prasyarat
- [Laragon](https://laragon.org/) (sudah termasuk PHP 8.2+, Composer, MySQL, dan Node.js)

### Langkah-langkah

**1. Clone repository**
```bash
git clone https://github.com/naylabilla/tanaman-hias.git
cd tanaman-hias
```

**2. Salin file konfigurasi**
```bash
cp .env.example .env
```

**3. Install dependencies**
```bash
composer install
npm install
```

**4. Generate application key**
```bash
php artisan key:generate
```

**5. Setup database**

Buat database baru bernama `tanaman-hias` di MySQL (melalui HeidiSQL / phpMyAdmin di Laragon), lalu import file SQL yang tersedia:

```bash
mysql -u root tanaman-hias < tanaman-hias.sql
```

Pastikan konfigurasi database di file `.env` sudah sesuai:
```env
DB_DATABASE=tanaman-hias
DB_USERNAME=root
DB_PASSWORD=
```

**6. Jalankan aplikasi**

Buka dua terminal — satu untuk server Laravel, satu untuk Vite:

```bash
# Terminal 1 — Backend
php artisan serve

# Terminal 2 — Frontend (Tailwind/Vite)
npm run dev
```

**7. Buka di browser**

Jika menggunakan virtual host Laragon:
```
http://tanaman-hias.test
```
Atau melalui `artisan serve`:
```
http://localhost:8000
```

---

## 📁 Struktur Proyek

```
tanaman-hias/
├── app/
│   ├── Http/Controllers/    # Controller untuk Admin & Pembeli
│   ├── Models/              # Model: User, Produk, Keranjang, Pesanan, Resi
│   └── View/                # View components
├── database/
│   └── migrations/          # Skema tabel database
├── resources/views/
│   ├── admin/               # Halaman penjual (beranda, produk, pesanan, resi)
│   ├── pembeli/             # Halaman pembeli (dashboard, keranjang, pembayaran)
│   ├── components/          # Komponen reusable (header, footer, sidebar)
│   └── layout/              # Template layout utama
├── routes/
│   └── web.php              # Definisi semua route aplikasi
├── public/                  # Aset publik (gambar, favicon)
├── tanaman-hias.sql         # File dump database
└── ...
```

---

## 👥 Tim Pengembang

**Kode Tim:** PBL-IF2A03 &nbsp;|&nbsp; **Periode:** 2023–2024 (Semester 2)

| Peran       | NIM          | Nama                         |
| ----------- | ------------ | ---------------------------- |
| 🎯 Ketua   | 3312311122   | Zidan Muhammad Ikvan         |
| Anggota     | 3312301007   | Pipit Lolita Hapsari         |
| Anggota     | 3312301011   | Elvira Fitriayu Ardina       |
| Anggota     | 3312301016   | Marsya Huriyah Ibtisamah     |
| Anggota     | 3312301025   | Nayla Nabillah Arishima      |

---

## 📄 Lisensi

Proyek ini dibuat untuk keperluan akademik (Project Based Learning).
