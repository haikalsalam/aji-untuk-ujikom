<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PPDB - Edit Calon Siswa</title>

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
            background-color: white;
            border-radius: 6px;
        }

        h2 {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .btn {
            padding: 8px 14px;
            background-color: #f39c12;
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
        <span>Admin: <strong>{{ auth()->user()->name ?? 'Admin' }}</strong></span>
    </div>
</header>

<div class="container">
    <h2>Edit Calon Siswa</h2>

    <form action="{{ route('ppdb.update', $siswa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama Lengkap</label>
        <input type="text" name="nama_lengkap"
               value="{{ old('nama_lengkap', $siswa->nama_lengkap) }}" required>

        <label>Asal Sekolah</label>
        <input type="text" name="asal_sekolah"
               value="{{ old('asal_sekolah', $siswa->asal_sekolah) }}" required>

        <label>Nilai Ujian</label>
        <input type="number" name="nilai_ujian"
               value="{{ old('nilai_ujian', $siswa->nilai_ujian) }}" required>

        <label>Status</label>
        <select name="status" required>
            <option value="lulus" {{ $siswa->status == 'Confirm' ? 'selected' : '' }}>
              Confirm
            </option>
            <option value="tidak_lulus" {{ $siswa->status == 'pending' ? 'selected' : '' }}>
               Pending
            </option>
        </select>

        <button type="submit" class="btn">Update</button>
        <a href="{{ route('ppdb.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<footer>
    &copy; 2026 Mini PPDB - Laravel Framework
</footer>

</body>
</html>
