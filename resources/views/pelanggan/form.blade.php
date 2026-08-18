<!DOCTYPE html>
<html>
<head>
    <title>{{ isset($pelanggan) ? 'Edit Pelanggan' : 'Tambah Pelanggan' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4" style="max-width: 600px;">
    <h3>{{ isset($pelanggan) ? 'Edit Pelanggan' : 'Tambah Pelanggan' }}</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ isset($pelanggan) ? url('pelanggan/create/'.$pelanggan->id) : url('pelanggan/create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="form-control" value="{{ old('nama_lengkap', $pelanggan->nama_lengkap ?? '') }}">
        </div>
        <div class="mb-3">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-select">
                <option value="">- Pilih Jenis Kelamin -</option>
                <option value="Laki-laki" {{ old('jenis_kelamin', $pelanggan->jenis_kelamin ?? '') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ old('jenis_kelamin', $pelanggan->jenis_kelamin ?? '') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label>No HP</label>
            <input type="text" name="no_hp" class="form-control" value="{{ old('no_hp', $pelanggan->no_hp ?? '') }}">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $pelanggan->email ?? '') }}">
        </div>
        <div class="mb-3">
            <label>Foto Pelanggan</label>
            <input type="file" name="foto_pelanggan" class="form-control">
            @if(!empty($pelanggan->foto_pelanggan))
                <img src="{{ Storage::url($pelanggan->foto_pelanggan) }}" width="100" class="mt-2">
            @endif
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
</body>
</html>