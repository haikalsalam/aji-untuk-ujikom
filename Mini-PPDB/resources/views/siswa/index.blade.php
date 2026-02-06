<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PPDB - Daftar Calon Siswa</title>

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
        }

        h2 {
            margin-bottom: 15px;
        }

        .btn {
            padding: 8px 14px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-size: 14px;
        }

        .btn-danger {
            background-color: #e74c3c;
            border: none;
            cursor: pointer;
        }

        .btn-warning {
            background-color: #f39c12;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        table th {
            background-color: #ecf0f1;
        }

        footer {
            text-align: center;
            padding: 15px;
            margin-top: 30px;
            color: #777;
        }

        form {
            display: inline;
        }
    </style>
</head>
<body>

<header>
    <h1>Mini PPDB</h1>
    <div>
        <span>Admin: <strong>{{ auth()->user()->name ?? 'Admin' }}</strong></span>
        <a href="{{ route('logout') }}" class="btn btn-danger" style="margin-left: 10px;"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
           Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>
    </div>
</header>

<div class="container">
    <h2>Daftar Calon Siswa</h2>

    <a href="{{ route('ppdb.create') }}" class="btn">+ Tambah Siswa</a>

    <br><br>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Asal Sekolah</th>
                <th>Nilai Ujian</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
        @forelse ($siswa as $s)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $s->nama_lengkap }}</td>
                <td>{{ $s->asal_sekolah }}</td>
                <td>{{ $s->nilai_ujian }}</td>
                <td>
                    @if ($s->status == 'Confirm')
                        <span style="color: green; font-weight: bold;">Confirmasi</span>
                    @else
                        <span style="color: orange; font-weight: bold;">Pending</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('ppdb.edit', $s->id) }}" class="btn btn-warning">Edit</a>

                    <form action="{{ route('ppdb.destroy', $s->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Yakin ingin menghapus data ini?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">Data siswa belum tersedia</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>

<footer>
    &copy; 2026 Mini PPDB - Laravel Framework
</footer>

</body>
</html>
