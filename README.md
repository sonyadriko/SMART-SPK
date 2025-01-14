# 🌟 SMART-SPK

Sistem Pendukung Keputusan (SPK) berbasis web menggunakan metode **SMART** (Simple Multi-Attribute Rating Technique). Proyek ini dirancang untuk membantu pengambilan keputusan secara cepat, akurat, dan transparan.

## 🚀 Fitur Utama
- 🔢 **Pengelolaan Kriteria & Bobot**: Mudah menambahkan, mengubah, dan menghapus kriteria.
- 📊 **Visualisasi Hasil**: Tampilkan hasil keputusan dalam bentuk tabel dan grafik interaktif.
- 🔒 **Autentikasi**: Sistem login yang aman untuk pengguna.
- 📂 **Manajemen Data**: CRUD data alternatif dengan antarmuka yang intuitif.

## 🛠️ Teknologi yang Digunakan
- **Backend**: PHP 8
- **Database**: MySQL
- **Frontend**: Bootstrap 5
- **Libraries Tambahan**: 
  - Chart.js (untuk grafik interaktif)
  - DataTables (untuk tabel dinamis)

## 📦 Instalasi
Ikuti langkah-langkah berikut untuk menjalankan proyek ini di lingkungan lokal Anda:

1. Clone repository:
   ```bash
   git clone https://github.com/username/SMART-SPK.git
   cd SMART-SPK
2. Import database:
   -- Buka phpMyAdmin atau tools database Anda.
   -- Buat database baru, misalnya smart_spk.
   -- Import file smart_spk.sql yang terdapat di folder database.
3. Konfigurasi database:
    Buka file config/database.php.
    Sesuaikan parameter berikut:
   ```bash
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'smart_spk');
    define('DB_USER', 'root');
    define('DB_PASS', '');
   ```
4. Jalankan server lokal:
    Gunakan XAMPP, MAMP, atau PHP built-in server:
    ```
    php -S localhost:8000
    ```
5. Akses aplikasi: Buka browser dan kunjungi http://localhost:8000.

🖼️ Cuplikan Layar
    Dashboard
    Hasil Keputusan

🤝 Kontribusi
Kami menerima kontribusi untuk pengembangan lebih lanjut! 💡
1. Fork repository ini.
2. Buat branch fitur baru: git checkout -b fitur-baru.
3. Commit perubahan: git commit -m 'Menambahkan fitur X'.
4. Push ke branch Anda: git push origin fitur-baru.
5. Buat pull request.

📄 Lisensi
Proyek ini dilisensikan di bawah MIT License.
