# Latihan Pemrograman PHP Dasar (Persiapan Ujikom RPL)

Dokumen ini berisi soal latihan dasar PHP untuk memperkuat logika pemrograman sebelum masuk ke Framework Laravel.

---

## Level 1: Variabel & Operasi Aritmatika
**Tujuan:** Memahami cara menyimpan dan mengolah data.

**Soal:**
Seorang calon siswa baru memiliki 3 komponen nilai masuk:
1. **Nilai Tes Akademik**
2. **Nilai Wawancara**
3. **Nilai Prestasi**

**Tugas:**
- Buatlah variabel untuk menyimpan ketiga nilai tersebut (isi dengan angka bebas).
- Buat variabel `$skor_akhir` dengan bobot perhitungan:
  - 50% dari Nilai Akademik.
  - 30% dari Nilai Wawancara.
  - 20% dari Nilai Prestasi.
- Tampilkan hasil `$skor_akhir` tersebut di browser.

---

## Level 2: Pengkondisian (If-Else)
**Tujuan:** Memahami logika pengambilan keputusan.

**Soal:**
Berdasarkan hasil `$skor_akhir` dari soal Level 1, buatlah sistem penentuan jurusan otomatis dengan ketentuan:
1. Jika skor akhir **85 ke atas**, tampilkan pesan: *"Direkomendasikan ke Jurusan **RPL**"*.
2. Jika skor akhir **70 s.d 84**, tampilkan pesan: *"Direkomendasikan ke Jurusan **TKJ**"*.
3. Jika skor akhir **di bawah 70**, tampilkan pesan: *"Direkomendasikan ke Jurusan **Multimedia**"*.

---

## Level 3: Array & Perulangan (Foreach)
**Tujuan:** Memahami cara mengelola kumpulan data (koleksi data).

**Soal:**
Gunakan data Array di bawah ini:

```php
$pendaftar = [
    ["nama" => "Adi", "status" => "Lunas"],
    ["nama" => "Beni", "status" => "Belum Bayar"],
    ["nama" => "Cici", "status" => "Lunas"],
    ["nama" => "Dedi", "status" => "Belum Bayar"],
];
```
**Tugas:**

- Tampilkan semua nama pendaftar menggunakan perulangan foreach.
Tambahkan logika:
    - Jika status "Lunas", tampilkan teks nama dengan warna Hijau.
    - Jika status "Belum Bayar", tampilkan teks nama dengan warna Merah.
    - Di bagian paling bawah, tampilkan total jumlah siswa yang sudah "Lunas".