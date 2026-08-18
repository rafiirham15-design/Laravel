<!DOCTYPE html>
<html>
<head>
    <title>Detail Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h3>Detail Produk</h3>

    <table class="table table-bordered">
        <tr>
            <th>Kategori Produk</th>
            <td>{{ $kategori_produk }}</td>
        </tr>
        <tr>
            <th>Nama Produk</th>
            <td>{{ $nama_produk }}</td>
        </tr>
        <tr>
            <th>Stok</th>
            <td>{{ $stok }}</td>
        </tr>
        <tr>
            <th>Harga Produk</th>
            <td>Rp {{ number_format($harga_produk, 0, ',', '.') }}</td>
        </tr>
        <tr>
    <th>Foto Produk</th>
    <td>
        @if(!empty($foto_produk))
            <img src="{{ asset('storage/produk/'.$foto_produk) }}" width="150">
        @else
            Tidak ada foto
        @endif
    </td>
</tr>
    </table>
</div>

</body>
</html>