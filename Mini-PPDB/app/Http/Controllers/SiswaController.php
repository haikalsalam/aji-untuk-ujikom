<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
 public function store(Request $request)
{
    $request->validate([
        'nama_lengkap' => 'required|string|max:255',
        'asal_sekolah' => 'required|string|max:255',
        'nilai_ujian'  => 'required|integer|min:0|max:100',
    ]);

    // LOGIKA STATUS
    $status = $request->nilai_ujian >= 75 ? 'Confirm' : 'Pending';

    Siswa::create([
        'nama_lengkap' => $request->nama_lengkap,
        'asal_sekolah' => $request->asal_sekolah,
        'nilai_ujian'  => $request->nilai_ujian,
        'status'       => $status,
    ]);

    return redirect()->route('ppdb.index')->with('success', 'Data berhasil ditambahkan');
}


    public function edit(string $id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
  public function update(Request $request, string $id)
{
    $request->validate([
        'nama_lengkap' => 'required|string|max:255',
        'asal_sekolah' => 'required|string|max:255',
        'nilai_ujian'  => 'required|integer|min:0|max:100',
    ]);

    $siswa = Siswa::findOrFail($id);

    // LOGIKA STATUS (SAMA DENGAN STORE)
    $status = $request->nilai_ujian >= 75 ? 'Confirm' : 'Pending';

    $siswa->update([
        'nama_lengkap' => $request->nama_lengkap,
        'asal_sekolah' => $request->asal_sekolah,
        'nilai_ujian'  => $request->nilai_ujian,
        'status'       => $status,
    ]);

    return redirect()->route('ppdb.index')->with('success', 'Data berhasil diupdate');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $siswa = SIswa::findOrFail($id);

        $siswa->delete();

        return redirect()->route('ppdb.index')->with("success", "Data Telah Terhapus");
    }
}
