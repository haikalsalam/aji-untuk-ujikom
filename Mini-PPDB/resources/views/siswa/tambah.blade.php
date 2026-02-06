<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PPDB - Tambah Calon Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #2c3e50;
            color: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .container {
            padding: 30px;
            max-width: 600px;
            margin: auto;
        }

        h2 {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .btn {
            padding: 8px 14px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            border: none;
            cursor: pointer;
        }

        .btn-secondary {
            background-color: #7f8c8d;
        }

        footer {
            text-align: center;
            padding: 15px;
            margin-top: 30px;
            color: #777;
        }
    </style>
</head>
<body>

<header>
    <h1>Mini PPDB</h1>
    <div>
        <span>Admin: <strong>Nama Admin</strong></span>
    </div>
</header>

<div class="container">
    <h2>Tambah Calon Siswa</h2>
    
    <form action="{{ route('ppdb.store')}}" method="POST">
        @csrf
        <label>Nama Lengkap</label>
        <input type="text" name="nama_lengkap" placeholder="Masukkan nama lengkap">

        <label>Asal Sekolah</label>
        <input type="text" name="asal_sekolah" placeholder="Masukkan asal sekolah">

        <label>Nilai Ujian</label>
        <input type="number" name="nilai_ujian" placeholder="Masukkan nilai ujian">

        <button type="submit" class="btn">Simpan</button>
        <a href="{{ route('ppdb.index')}}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<footer>
    &copy; 2026 Mini PPDB - Laravel Framework
</footer>

</body>
</html>
