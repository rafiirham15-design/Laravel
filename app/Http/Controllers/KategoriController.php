<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->input('q');

        $result = Kategori::where(function ($query) use ($q) {

            $query->where(
                'nama_kategori',
                'like',
                '%' . $q . '%'
            );

        })->paginate(10);

        return view(
            'kategori.list',
            compact('result', 'q')
        );
    }

    public function create()
    {
        return view('kategori.form');
    }
    public function store(Request $request, Kategori $kategori = null)
{
    $request->validate([
        'nama_kategori' => 'required'
    ]);

    Kategori::updateOrCreate(
        ['id' => @$kategori->id],
        $request->all()
    );

    return redirect('/kategori')
            ->with('success', 'Data berhasil disimpan');
}
public function edit(Kategori $kategori)
{
    return view('kategori.form', compact('kategori'));
}
public function destroy(Kategori $kategori)
{
    $kategori->delete();

    return redirect('/kategori')
            ->with('success', 'Data berhasil dihapus');
}
}