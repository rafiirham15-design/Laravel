<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->get('q');

        $result = Pelanggan::where('nama_lengkap', 'like', '%' . $q . '%')
            ->paginate(15);

        return view('pelanggan.list', compact('result', 'q'));
    }

    public function create()
    {
        return view('pelanggan.form');
    }

    public function edit(Pelanggan $pelanggan)
    {
        return view('pelanggan.form', compact('pelanggan'));
    }

    public function store(Request $request, Pelanggan $pelanggan = null)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string',
            'no_hp' => 'required|string|max:20',
            'email' => 'required|email',
            'foto_pelanggan' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('foto_pelanggan')) {
            $path = $request->file('foto_pelanggan')->store('pelanggan', 'public');
            $data['foto_pelanggan'] = $path;
        }

        Pelanggan::updateOrCreate(
            ['id' => $pelanggan?->id],
            $data
        );

        return redirect('/pelanggan')->with('success', 'Data berhasil disimpan');
    }

    public function destroy(Pelanggan $pelanggan)
    {
        $pelanggan->delete();
        return redirect('/pelanggan')->with('success', 'Data berhasil dihapus');
    }
}