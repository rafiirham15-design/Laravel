<!DOCTYPE html>
<html>
<head>
    <title>Form Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h3>Tambah Produk</h3>

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <b>Perhatian</b>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ url('produk') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Kategori Produk</label>
            <select name="id_kategori_produk" class="form-control">
                <option value="">- Pilih Kategori Produk -</option>
                @foreach($kategoris as $kategori)
                    <option value="{{ $kategori->id }}" @selected(old('id_kategori_produk') == $kategori->id)>
                        {{ $kategori->nama_kategori }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control" value="{{ old('nama_produk') }}">
        </div>

        <div class="mb-3">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control" value="{{ old('stok') }}">
        </div>

        <div class="mb-3">
            <label>Harga Produk</label>
            <input type="number" name="harga_produk" class="form-control" value="{{ old('harga_produk') }}">
        </div>

        <div class="mb-3">
            <label>Foto Produk</label>
            <input type="file" name="foto_produk" class="form-control">
        </div>

        <button class="btn btn-primary">Simpan</button>
    </form>
</div>

</body>
</html>