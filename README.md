# Aplikasi Manajemen Karyawan

Sebuah aplikasi web sederhana yang dibangun untuk memenuhi tugas studi kasus. Aplikasi ini menggunakan Laravel sebagai backend dan Vue.js sebagai frontend untuk melakukan manajemen data karyawan secara lengkap (Create, Read, Update, Delete) dan dilengkapi dengan sistem autentikasi.

## Teknologi yang Digunakan

-   **Backend**: Laravel 11
-   **Frontend**: Vue.js 3 (dengan Inertia.js)
-   **Database**: MySQL
-   **Autentikasi**: Laravel Breeze
-   **Styling**: Tailwind CSS
-   **Version Control**: Git

## Fitur Utama

-   **Autentikasi Pengguna**: Proses Register, Login, dan Logout untuk admin.
-   **Dashboard Admin**: Halaman utama yang terproteksi setelah user berhasil login.
-   **Manajemen Data Karyawan (CRUD)**:
    -   **Create**: Form untuk menambah data karyawan baru.
    -   **Read**: Menampilkan semua data karyawan dalam bentuk tabel yang rapi.
    -   **Update**: Form untuk mengedit data karyawan yang sudah ada.
    -   **Delete**: Menghapus data karyawan dengan konfirmasi.
-   **Notifikasi**: Pesan singkat (flash message) muncul setelah setiap aksi (tambah, edit, hapus) berhasil dilakukan.

## Alur Kerja Aplikasi

Berikut adalah alur kerja aplikasi dari sudut pandang pengguna (admin):

1.  Pengguna pertama kali membuka aplikasi dan akan melihat halaman utama (Welcome Page).
2.  Untuk dapat menggunakan aplikasi, pengguna harus membuat akun terlebih dahulu dengan menekan link **Register** di pojok kanan atas.
3.  Setelah mengisi form registrasi (nama, email, password) dan menekan tombol "Register", pengguna akan secara otomatis login dan diarahkan ke halaman **Dashboard**.
4.  Jika pengguna sudah memiliki akun, ia bisa menekan link **Login** dan masuk menggunakan email serta password yang telah terdaftar.
5.  Di dalam aplikasi (setelah login), terdapat menu navigasi di bagian atas. Pengguna mengklik link **"Karyawan"**.
6.  Aplikasi akan menampilkan halaman "Manajemen Karyawan", yang berisi tabel data semua karyawan yang ada di database. Ini adalah implementasi dari fungsi **Read**.
7.  Untuk menambah karyawan baru, pengguna mengklik tombol biru **"Tambah Karyawan"**. Pengguna akan diarahkan ke sebuah form untuk mengisi data karyawan baru. Ini adalah implementasi dari fungsi **Create**.
8.  Setelah mengisi data dan menekan "Simpan", data baru akan tersimpan di database, dan pengguna akan dikembalikan ke halaman daftar karyawan dengan sebuah notifikasi sukses.
9.  Untuk mengubah data, pengguna mengklik link **"Edit"** yang ada di kolom "Aksi" pada salah satu baris data. Pengguna akan dibawa ke form edit yang sudah terisi dengan data karyawan tersebut. Ini adalah langkah awal fungsi **Update**.
10. Setelah mengubah data dan menekan "Update", data di database akan diperbarui, dan pengguna akan dikembalikan ke halaman daftar karyawan dengan notifikasi sukses.
11. Untuk menghapus data, pengguna mengklik link **"Hapus"** di kolom "Aksi". Sebuah dialog konfirmasi akan muncul untuk mencegah kesalahan. Jika pengguna menekan "OK", data akan dihapus dari database, dan halaman akan diperbarui. Ini adalah implementasi fungsi **Delete**.
12. Terakhir, pengguna dapat keluar dari aplikasi dengan aman dengan mengklik nama mereka di pojok kanan atas, lalu memilih **"Log Out"**.

## Panduan Instalasi Lokal

Untuk menjalankan proyek ini di lingkungan lokal, ikuti langkah-langkah berikut:

1.  **Clone repository ini:**

    git clone (https://github.com/MEYV26/manajemen-karyawan)

2.  **Masuk ke direktori proyek:**

    cd nama-folder-proyek

3.  **Install dependensi PHP via Composer:**

    composer install

4.  **Salin file environment:**

    cp .env.example .env

5.  **Generate key aplikasi Laravel:**

    php artisan key:generate

6.  **Konfigurasi database Anda di file `.env`:**

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=manajemen_db
    DB_USERNAME=root
    DB_PASSWORD=

    _Pastikan Anda sudah membuat database `manajemen_db` di phpMyAdmin._

7.  **Jalankan migrasi dan seeder untuk membuat tabel dan mengisi data awal:**

    php artisan migrate --seed

8.  **Install dependensi JavaScript via NPM:**

    npm install

9.  **Jalankan server pengembangan (di dua terminal terpisah):**

    # Di terminal 1 (untuk frontend)

    npm run dev

    # Di terminal 2 (untuk backend)

    php artisan serve

10. **Buka aplikasi di browser:**
    Akses `http://127.0.0.1:8000` di browser Anda.
