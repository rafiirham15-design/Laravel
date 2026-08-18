<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->get('q');

        $result = Produk::with('kategori')
            ->when($q, function ($query) use ($q) {
                $query->whereHas('kategori', function ($query) use ($q) {
                    $query->where('nama_kategori', 'like', '%' . $q . '%');
                });
            })
            ->paginate(15);

        return view('produk.list', compact('result', 'q'));
    }

    public function create()
    {
        $kategoris = Kategori::all();
        return view('produk.form', compact('kategoris'));
    }

    public function store(Request $request, Produk $produk = null)
    {
        $request->validate([
            'kategori_id' => 'required|exists:kategori,id',
            'nama_produk' => 'required|string|max:255',
            'stok' => 'required|integer',
            'harga_produk' => 'required|integer',
            'foto_produk' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('foto_produk')) {
            $path = $request->file('foto_produk')->store('produk', 'public');
            $data['foto_produk'] = $path;
        }

        Produk::updateOrCreate(
            ['id' => $produk?->id],
            $data
        );

        return redirect('/produk')->with('success', 'Data berhasil disimpan');
    }

    public function edit(Produk $produk)
    {
        $kategoris = Kategori::all();
        return view('produk.form', compact('produk', 'kategoris'));
    }

    public function destroy(Produk $produk)
    {
        $produk->delete();
        return redirect('/produk')->with('success', 'Data berhasil dihapus');
    }
}