# Misupa Event 🎉

Sebuah aplikasi manajemen event berbasis Laravel + FilamentPHP. Admin dapat mengelola event dan memantau jumlah pendaftar melalui dashboard.

## 🚀 Fitur Utama

✅ **Login Admin**//
Akses aman melalui panel login khusus untuk administrator.

✅ **CRUD Event**  
Buat, lihat, edit, dan hapus event dengan antarmuka yang intuitif menggunakan Filament Resources.

✅ **Dashboard Statistik**  
Tampilan dashboard interaktif yang menampilkan data statistik penting secara ringkas.

✅ **Grafik Jumlah Pendaftar & Event**  
Widget grafik yang menampilkan data jumlah pendaftar dan total event yang tersedia dalam bentuk visual (chart).

✅ **Upload Foto Event**  
Setiap event dapat diberi gambar/foto yang dikompres secara otomatis untuk efisiensi penyimpanan.

✅ **Frontend Statistik (Optional)**  
Statistik jumlah event dan pendaftar juga bisa ditampilkan di halaman depan untuk pengunjung umum.

---

## 💻 Tech Stack

- Laravel 10
- FilamentPHP
- Bootstrap CSS
- MySQL
- Chart.js (via Filament)

## ⚙️ Cara Instalasi

```bash
1. Clone repositori ini:
git clone https://github.com/username/misupa-event.git
cd misupa-event

2. Install Dependency:
composer install
npm install && npm run dev

3. Setup Environtment
cp .env.example .env
php artisan key:generate

4. Jalankan migrasi dan buat storage link
php artisan migrate
php artisan storage:link

5. Data Seeder
Untuk masuk ke halaman ADMIN, buat terlebih dahulu usernya
php artisan make:filament-user
    contoh email dan pass:
    Email: admin@example.com
    Password: password

6. Jalankan server lokal
php artisan serve

-----

Developer Mikhael Surya Adeputra