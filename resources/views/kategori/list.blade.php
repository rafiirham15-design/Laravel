<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Kategori</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
    :root{
        --ink:#2A2724;
        --ink-soft:#6B665F;
        --page-bg:#F6F4EF;
        --card-bg:#FFFFFF;
        --border:#E6E2D8;
        --plum:#4B3F72;
        --mustard:#B8791F;
    }
    *{box-sizing:border-box;}
    body{
        margin:0;
        background:var(--page-bg);
        font-family:'Inter',sans-serif;
        color:var(--ink);
    }
    a{ text-decoration:none; color:inherit; }

    .topbar{
        background:var(--card-bg);
        border-bottom:1px solid var(--border);
        position:sticky; top:0; z-index:10;
    }
    .topbar-inner{
        max-width:1180px; margin:0 auto;
        padding:18px 24px;
        display:flex; align-items:center; gap:24px;
        flex-wrap:wrap;
    }
    .brand{
        font-family:'Fraunces',serif;
        font-weight:700;
        font-size:24px;
        color:var(--plum);
        letter-spacing:-0.5px;
    }
    .brand span{ color:var(--mustard); }
    .search-form{
        flex:1;
        min-width:220px;
        display:flex;
        max-width:480px;
    }
    .search-form input{
        flex:1;
        border:1px solid var(--border);
        border-right:none;
        padding:10px 14px;
        border-radius:8px 0 0 8px;
        font-size:14px;
        font-family:'Inter',sans-serif;
        outline:none;
    }
    .search-form input:focus{ border-color:var(--plum); }
    .search-form button{
        border:1px solid var(--plum);
        background:var(--plum);
        color:#fff;
        padding:0 18px;
        border-radius:0 8px 8px 0;
        cursor:pointer;
        font-size:14px;
        font-weight:600;
    }
    .search-form button:hover{ background:#3B3159; }
    .btn-add{
        border:1px solid var(--plum);
        background:#fff;
        color:var(--plum);
        padding:10px 18px;
        border-radius:8px;
        font-size:14px;
        font-weight:600;
        white-space:nowrap;
    }
    .btn-add:hover{ background:var(--plum); color:#fff; }

    .hero{
        max-width:1180px; margin:0 auto;
        padding:32px 24px 8px;
    }
    .hero h1{
        font-family:'Fraunces',serif;
        font-size:32px;
        font-weight:600;
        margin:0 0 6px;
    }
    .hero p{
        color:var(--ink-soft);
        margin:0;
        font-size:15px;
    }

    .container{
        max-width:1180px; margin:0 auto;
        padding:28px 24px 60px;
    }

    .result-info{
        font-size:14px;
        color:var(--ink-soft);
        margin-bottom:18px;
    }
    .result-info strong{ color:var(--ink); }

    .alert-success{
        max-width:1180px; margin:20px auto 0;
        padding:12px 20px;
        background:#E1F0E7;
        color:#1F6B44;
        border-radius:10px;
        font-size:14px;
        font-weight:500;
    }

    .table-card{
        background:var(--card-bg);
        border:1px solid var(--border);
        border-radius:14px;
        overflow:hidden;
    }
    table{
        width:100%;
        border-collapse:collapse;
        font-size:14px;
    }
    thead th{
        text-align:left;
        font-size:12px;
        font-weight:700;
        text-transform:uppercase;
        letter-spacing:.05em;
        color:var(--ink-soft);
        background:#FAF9F6;
        padding:14px 20px;
        border-bottom:1px solid var(--border);
    }
    tbody td{
        padding:14px 20px;
        border-bottom:1px solid var(--border);
        vertical-align:middle;
    }
    tbody tr:last-child td{ border-bottom:none; }
    tbody tr:hover{ background:#FAF9F6; }

    .no-col{ width:60px; color:var(--ink-soft); }
    .aksi-col{ width:200px; }

    .nama-kategori{
        font-family:'Fraunces',serif;
        font-weight:600;
        font-size:15px;
    }

    .aksi-group{
        display:flex;
        gap:8px;
    }
    .aksi-group a, .aksi-group button{
        font-size:12px;
        font-weight:600;
        padding:6px 14px;
        border-radius:6px;
        border:1px solid var(--border);
        background:#fff;
        cursor:pointer;
        color:var(--ink);
    }
    .aksi-group a:hover{ border-color:var(--plum); color:var(--plum); }
    .aksi-group .delete-btn:hover{ border-color:#9C2B26; color:#9C2B26; }

    .empty-state{
        text-align:center;
        padding:80px 20px;
        color:var(--ink-soft);
    }
    .empty-state h2{
        font-family:'Fraunces',serif;
        font-size:22px;
        color:var(--ink);
        margin-bottom:8px;
    }

    .pagination-wrap{
        margin-top:36px;
        display:flex;
        justify-content:center;
    }
    .pagination-wrap nav{ display:flex; gap:4px; }
    .pagination-wrap a, .pagination-wrap span{
        display:inline-flex;
        align-items:center;
        justify-content:center;
        min-width:36px;
        height:36px;
        padding:0 10px;
        border-radius:8px;
        border:1px solid var(--border);
        font-size:13px;
        color:var(--ink);
        background:#fff;
    }
    .pagination-wrap a:hover{ border-color:var(--plum); color:var(--plum); }
    .pagination-wrap span[aria-current="page"] span{
        background:var(--plum);
        border-color:var(--plum);
        color:#fff;
    }
    .pagination-wrap svg{ display:none; }

    @media (max-width:600px){
        .hero h1{ font-size:26px; }
        thead th:nth-child(1), tbody td:nth-child(1){ display:none; }
    }
</style>
</head>
<body>

<div class="topbar">
    <div class="topbar-inner">
        <form class="search-form" method="GET" action="{{ url('/kategori') }}">
            <input type="text" name="q" value="{{ @$q }}" placeholder="Cari kategori...">
            <button type="submit">Cari</button>
        </form>
        <a href="{{ url('/kategori/create') }}" class="btn-add">+ Tambah Data</a>
    </div>
</div>

<div class="hero">
    <h1>Data Kategori</h1>
</div>

@if(session('success'))
    <div class="alert-success">{{ session('success') }}</div>
@endif

<div class="container">

    <div class="result-info">
        Menampilkan <strong>{{ $result->total() }}</strong> kategori
        @if(@$q) untuk pencarian "<strong>{{ $q }}</strong>" @endif
    </div>

    @if($result->count() > 0)
        <div class="table-card">
            <table>
                <thead>
                    <tr>
                        <th class="no-col">No</th>
                        <th>Nama Kategori</th>
                        <th class="aksi-col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($result as $item)
                        <tr>
                            <td class="no-col">{{ $loop->iteration }}</td>
                            <td class="nama-kategori">{{ $item->nama_kategori }}</td>
                            <td>
                                <div class="aksi-group">
                                    <a href="{{ route('kategori.edit', $item->id) }}">Ubah</a>
                                    <form action="{{ route('kategori.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin hapus kategori ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="delete-btn">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="pagination-wrap">
            {{ $result->links() }}
        </div>

    @else
        <div class="empty-state">
            <h2>Kategori tidak ditemukan</h2>
            <p>Coba kata kunci lain, atau tambah kategori baru.</p>
        </div>
    @endif

</div>

</body>
</html>