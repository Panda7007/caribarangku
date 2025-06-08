<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class LaporanController extends Controller
{
    public function store(Request $request)
    {

        // $data = [
        //     'namaUser' => 'Budi Santoso',
        //     'emailUser' => 'budi@example.com',
        //     'waUser' => '081234567890',
        //     'jenisBarang' => 'dompet',
        //     'lokasi' => 'Stasiun Gambir, Jakarta',
        //     'tanggal' => '2025-06-01',
        //     'keterangan' => 'Dompet warna cokelat berisi KTP dan kartu ATM.',
        //     'statusBarang' => 'dicari',
        // ];



        // $request->merge($data); // Masukkan dummy ke dalam $request
        $request->validate([
            'uploadGambar' => 'required|image|max:2048',
            'namaUser' => 'required|string|max:100',
            'emailUser' => 'required|email',
            'waUser' => 'required|string|max:20',
            'jenisBarang' => 'required|string',
            'lokasi' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'keterangan' => 'nullable|string',
            'statusBarang' => 'required|string',
        ]);

        // Upload file// Simpan file ke storage
        $path = $request->file('uploadGambar')->store('uploads', 'public');
        // return response()->json(['path' => $path]);

        // Cek hasil upload


        // Insert data dengan Query Builder
        DB::table('laporans')->insert([
            'gambar' => $path,
            'nama' => $request->namaUser,
            'email' => $request->emailUser,
            'whatsapp' => $request->waUser,
            'jenis_barang' => $request->jenisBarang,
            'lokasi' => $request->lokasi,
            'tanggal_kejadian' => $request->tanggal,
            'keterangan' => $request->keterangan,
            'status' => $request->statusBarang,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Laporan berhasil diajukan.');
    }

    public function index()
    {
        $laporans1 = DB::table('laporans')->orderBy('created_at')->get();

        $laporans = DB::SELECT("
        select * from laporans l where l.status_laporan = 2
        ");
        return view('home', compact('laporans'));
    }

    public function setujui($id)
    {
        DB::table('laporans')
            ->where('id', $id)
            ->update(['status_laporan' => 2, 'updated_at' => now()]);

        return redirect()->back()->with('success', 'Postingan telah disetujui.');
    }

    public function tolak($id)
    {
        DB::table('laporans')
            ->where('id', $id)
            ->update(['status_laporan' => 0, 'updated_at' => now()]);

        return redirect()->back()->with('error', 'Postingan telah ditolak.');
    }

    public function selesai($id)
    {
        DB::table('laporans')
            ->where('id', $id)
            ->update(['status_laporan' => 3, 'updated_at' => now()]);

        return redirect()->back()->with('error', 'Postingan telah ditarik.');
    }
}
