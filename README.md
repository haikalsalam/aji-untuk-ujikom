# Tugas Framework Laravel: Mini PPDB (Pendaftaran Dasar)

Tugas ini bertujuan untuk memperkenalkan alur kerja **MVC (Model, View, Controller)** dan **Migrations** di Laravel.

---

## 1. Setup & Database
**Tujuan:** Menyiapkan struktur tabel pendaftar.

**Tugas:**
1. Buat branch baru dengan nama `belajar-ppdb`.
2. Buat database di MySQL/phpMyAdmin dengan nama `db_ppdb`.
3. Hubungkan Laravel ke database melalui file `.env`.
4. Buatlah sebuah **Migration** untuk tabel `calon_siswa` dengan kolom sebagai berikut:
   - `id` (Auto Increment)
   - `nama_lengkap` (String)
   - `asal_sekolah` (String)
   - `nilai_ujian` (Integer)
   - `status` (String, default: 'Pending')
   - `timestamps`

**Perintah CLI:** `php artisan make:migration create_calon_siswa_table`

---

## 2. Model & Controller
**Tujuan:** Membuat otak dari aplikasi.

**Tugas:**
1. Buatlah sebuah Model bernama `Siswa`.
2. Buatlah sebuah Controller bernama `SiswaController`.
3. Di dalam `SiswaController`, buatlah fungsi (method) bernama `index` untuk menampilkan data dan `store` untuk menyimpan data.

**Perintah CLI:** `php artisan make:model Siswa -c`

---

## 3. Routing & View (Tampilan)
**Tujuan:** Membuat halaman yang bisa diakses user.

**Tugas:**
1. Daftarkan route di `routes/web.php` untuk mengakses halaman daftar siswa.
2. Buatlah folder `siswa` di dalam `resources/views/`.
3. Buat file `index.blade.php` yang berisi **Tabel HTML** untuk menampilkan data dari database.
4. Buat file `create.blade.php` yang berisi **Form Input** (Nama, Asal Sekolah, Nilai).

---

## 4. Logika Utama (The Logic)
**Tujuan:** Menghubungkan Form ke Database.

**Tugas:**
1. Pastikan Form di `create.blade.php` menggunakan `@csrf`.
2. Pada `SiswaController`, lengkapi fungsi `store` agar bisa menangkap data dari form dan menyimpannya ke database menggunakan Eloquent:
   ```php
   Siswa::create($request->all());

## 5. Autentikasi (Fitur Login)
**Tujuan:** Membatasi akses agar hanya admin yang bisa melihat daftar pendaftar.

**Tugas:**
1. **Setup Auth:**
   - Gunakan fitur bawaan Laravel. Untuk pemula, kamu bisa mencoba menginstal `laravel/breeze` atau membuat controller login manual.
   - Pastikan ada tabel `users` (sudah ada bawaan migration Laravel).

2. **Registrasi Admin:**
   - Buatlah satu akun admin pertama melalui `Register` atau menggunakan `Seeder`.

3. **Proteksi Route (Middleware):**
   - Pastikan halaman `Daftar Siswa` dan `Tambah Siswa` tidak bisa dibuka sebelum login.
   - Gunakan middleware `auth` pada file `routes/web.php`.
   - Contoh: 
     ```php
     Route::resource('siswa', SiswaController::class)->middleware('auth');
     ```

4. **Logout:**
   - Tambahkan tombol `Logout` pada halaman daftar siswa.

---

## 6. Integrasi Layout & Auth (Blade)
**Tujuan:** Menampilkan identitas user yang login.

**Tugas:**
1. Di bagian navigasi/header, tampilkan **Nama Admin** yang sedang login menggunakan: `{{ Auth::user()->name }}`.
2. Tambahkan logika pengkondisian:
   - Jika belum login (Guest), tampilkan tombol **Login**.
   - Jika sudah login, tampilkan tombol **Logout** dan **Dashboard**.