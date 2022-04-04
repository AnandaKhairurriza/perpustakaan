<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class Perpustakaan extends Controller
{
    public function index()
    {
        $buku = Buku::all();

        return view('home', compact('buku'));
    }

    public function pinjam()
    {
        $buku = Buku::where('status', 'available')->get();

        return view('pinjam', compact('buku'));
    }

    public function update(Request $req)
    {

        $pesan = [
        'required' => ':ATTRIBUTE harus diisi!',
        'regex' => 'Input nomor HP harus angka!',
        'min' => ':ATTRIBUTE harus 12 digit angka!',
        ];

        $this->validate($req, [
            'nama_peminjam' => 'required',
            'hp_peminjam' => 'required|regex:/^[0-9]+$/|min:12',
            'email_peminjam' => 'required',
            'tanggal_kembali' => 'required',
        ], $pesan);

        $id = $req->nama_buku;

        Buku::where('id', $id)->update([
            'nama_peminjam' => $req->nama_peminjam,
            'hp_peminjam' => $req->hp_peminjam,
            'email_peminjam' => $req->email_peminjam,
            'tanggal_kembali' => $req->tanggal_kembali,
            'status' => 'Dipinjam',
        ]);

        return redirect('/');
    }
}
