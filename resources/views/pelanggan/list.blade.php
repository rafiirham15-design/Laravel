<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Pelanggan</title>
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
        --lk-bg:#E6F1FB; --lk-fg:#185FA5;
        --pr-bg:#FBEAF0; --pr-fg:#993556;
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

    .grid{
        display:grid;
        grid-template-columns:repeat(auto-fill, minmax(260px, 1fr));
        gap:18px;
    }

    .card{
        background:var(--card-bg);
        border:1px solid var(--border);
        border-radius:14px;
        padding:18px;
        display:flex;
        gap:14px;
        align-items:flex-start;
        transition:box-shadow .15s ease, transform .15s ease;
    }
    .card:hover{
        box-shadow:0 8px 24px rgba(42,39,36,0.08);
        transform:translateY(-2px);
    }

    .avatar{
        width:56px; height:56px;
        border-radius:50%;
        background:#F0EEE7;
        flex-shrink:0;
        display:flex; align-items:center; justify-content:center;
        overflow:hidden;
        font-family:'Fraunces',serif;
        font-weight:600;
        font-size:20px;
        color:var(--plum);
    }
    .avatar img{
        width:100%; height:100%; object-fit:cover;
    }

    .card-body{ flex:1; min-width:0; }
    .card-body h3{
        font-family:'Fraunces',serif;
        font-weight:600;
        font-size:16px;
        margin:0 0 6px;
        color:var(--ink);
    }
    .gender-badge{
        display:inline-block;
        font-size:11px;
        font-weight:700;
        text-transform:uppercase;
        letter-spacing:.04em;
        padding:3px 9px;
        border-radius:6px;
        margin-bottom:8px;
    }
    .gender-badge.lk{ background:var(--lk-bg); color:var(--lk-fg); }
    .gender-badge.pr{ background:var(--pr-bg); color:var(--pr-fg); }

    .contact-row{
        font-size:13px;
        color:var(--ink-soft);
        margin:3px 0;
        overflow:hidden;
        text-overflow:ellipsis;
        white-space:nowrap;
    }

    .card-actions{
        display:flex;
        gap:8px;
        margin-top:10px;
    }
    .card-actions a, .card-actions button{
        font-size:12px;
        font-weight:600;
        padding:5px 12px;
        border-radius:6px;
        border:1px solid var(--border);
        background:#fff;
        cursor:pointer;
        color:var(--ink);
    }
    .card-actions a:hover{ border-color:var(--plum); color:var(--plum); }
    .card-actions .delete-btn:hover{ border-color:#9C2B26; color:#9C2B26; }

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
        .grid{ grid-template-columns:1fr; }
    }
</style>
</head>
<body>

<div class="topbar">
    <div class="topbar-inner">
        <form class="search-form" method="GET" action="{{ url('/pelanggan') }}">
            <input type="text" name="q" value="{{ $q }}" placeholder="Cari nama pelanggan...">
            <button type="submit">Cari</button>
        </form>
        <a href="{{ url('/pelanggan/create') }}" class="btn-add">+ Tambah Pelanggan</a>
    </div>
</div>

<div class="hero">
    <h1>Data Pelanggan</h1>
</div>

@if(session('success'))
    <div class="alert-success">{{ session('success') }}</div>
@endif

<div class="container">

    <div class="result-info">
        Menampilkan <strong>{{ $result->total() }}</strong> pelanggan
        @if($q) untuk pencarian "<strong>{{ $q }}</strong>" @endif
    </div>

    @if($result->count() > 0)
        <div class="grid">
            @foreach($result as $pelanggan)
                @php
                    $jk = strtolower($pelanggan->jenis_kelamin ?? '');
                    $genderClass = str_starts_with($jk, 'l') ? 'lk' : 'pr';
                    $genderLabel = str_starts_with($jk, 'l') ? 'Laki-laki' : 'Perempuan';
                @endphp
                <div class="card">
                    <div class="avatar">
                        @if($pelanggan->foto_pelanggan)
                            <img src="{{ asset('storage/'.$pelanggan->foto_pelanggan) }}" alt="{{ $pelanggan->nama_lengkap }}">
                        @else
                            {{ strtoupper(substr($pelanggan->nama_lengkap, 0, 1)) }}
                        @endif
                    </div>
                    <div class="card-body">
                        <h3>{{ $pelanggan->nama_lengkap }}</h3>
                        <span class="gender-badge {{ $genderClass }}">{{ $genderLabel }}</span>
                        <div class="contact-row">📞 {{ $pelanggan->no_hp }}</div>
                        <div class="contact-row">✉️ {{ $pelanggan->email }}</div>
                        <div class="card-actions">
                            <a href="{{ url('/pelanggan/'.$pelanggan->id.'/edit') }}">Edit</a>
                            <form action="{{ url('/pelanggan/'.$pelanggan->id) }}" method="POST" onsubmit="return confirm('Yakin hapus data ini?');" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-btn">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pagination-wrap">
            {{ $result->appends(['q' => $q])->links() }}
        </div>

    @else
        <div class="empty-state">
            <h2>Pelanggan tidak ditemukan</h2>
            <p>Coba kata kunci lain, atau tambah pelanggan baru.</p>
        </div>
    @endif

</div>

</body>
</html>