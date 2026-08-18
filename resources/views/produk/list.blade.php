<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Katalog Produk</title>
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

        --baju-bg:#F7E7E4;   --baju-fg:#8A3B31;
        --sepatu-bg:#DFF0EA; --sepatu-fg:#136953;
        --elektronik-bg:#E9E6F4; --elektronik-fg:#3E3468;
        --celana-bg:#F5EAD6; --celana-fg:#8A5D14;
        --topi-bg:#EFE4D8;   --topi-fg:#6B4526;
        --default-bg:#EDEDED; --default-fg:#555;
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

    .kategori-chips{
        max-width:1180px; margin:0 auto;
        padding:20px 24px 0;
        display:flex; gap:10px; flex-wrap:wrap;
    }
    .chip{
        padding:7px 16px;
        border-radius:999px;
        font-size:13px;
        font-weight:600;
        border:1px solid transparent;
        transition:transform .12s ease;
    }
    .chip:hover{ transform:translateY(-1px); }
    .chip.all{ background:var(--ink); color:#fff; }
    .chip.baju{ background:var(--baju-bg); color:var(--baju-fg); }
    .chip.sepatu{ background:var(--sepatu-bg); color:var(--sepatu-fg); }
    .chip.elektronik{ background:var(--elektronik-bg); color:var(--elektronik-fg); }
    .chip.celana{ background:var(--celana-bg); color:var(--celana-fg); }
    .chip.topi{ background:var(--topi-bg); color:var(--topi-fg); }

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

    .grid{
        display:grid;
        grid-template-columns:repeat(auto-fill, minmax(220px, 1fr));
        gap:20px;
    }

    .card{
        background:var(--card-bg);
        border:1px solid var(--border);
        border-radius:14px;
        overflow:hidden;
        display:flex;
        flex-direction:column;
        transition:box-shadow .15s ease, transform .15s ease;
        position:relative;
    }
    .card:hover{
        box-shadow:0 8px 24px rgba(42,39,36,0.08);
        transform:translateY(-2px);
    }

    .card-img{
        aspect-ratio:1/1;
        background:#F0EEE7;
        display:flex; align-items:center; justify-content:center;
        overflow:hidden;
        position:relative;
    }
    .card-img img{
        width:100%; height:100%; object-fit:cover;
    }
    .card-img .placeholder{
        font-family:'Fraunces',serif;
        font-size:40px;
        color:#C6C1B5;
    }

    .stock-badge{
        position:absolute;
        top:10px; right:10px;
        padding:4px 10px;
        border-radius:999px;
        font-size:11px;
        font-weight:700;
        letter-spacing:.02em;
    }
    .stock-habis{ background:#F7E2E1; color:#9C2B26; }
    .stock-terbatas{ background:#FBEFD9; color:#8A5D14; }
    .stock-tersedia{ background:#E1F0E7; color:#1F6B44; }

    .card-body{
        padding:14px 16px 16px;
        display:flex;
        flex-direction:column;
        gap:6px;
        flex:1;
    }
    .kategori-label{
        font-size:11px;
        font-weight:700;
        text-transform:uppercase;
        letter-spacing:.05em;
        padding:3px 9px;
        border-radius:6px;
        display:inline-block;
        width:fit-content;
    }
    .kategori-label.baju{ background:var(--baju-bg); color:var(--baju-fg); }
    .kategori-label.sepatu{ background:var(--sepatu-bg); color:var(--sepatu-fg); }
    .kategori-label.elektronik{ background:var(--elektronik-bg); color:var(--elektronik-fg); }
    .kategori-label.celana{ background:var(--celana-bg); color:var(--celana-fg); }
    .kategori-label.topi{ background:var(--topi-bg); color:var(--topi-fg); }
    .kategori-label.default{ background:var(--default-bg); color:var(--default-fg); }

    .product-name{
        font-family:'Fraunces',serif;
        font-weight:600;
        font-size:16px;
        line-height:1.3;
        margin:2px 0 0;
        color:var(--ink);
    }

    .product-footer{
        margin-top:auto;
        display:flex;
        align-items:center;
        justify-content:space-between;
        padding-top:8px;
    }
    .price{
        font-size:16px;
        font-weight:700;
        color:var(--plum);
    }
    .stok-text{
        font-size:12px;
        color:var(--ink-soft);
    }

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

    .alert-success{
        max-width:1180px; margin:20px auto 0;
        padding:12px 20px;
        background:#E1F0E7;
        color:#1F6B44;
        border-radius:10px;
        font-size:14px;
        font-weight:500;
    }

    .pagination-wrap{
        margin-top:36px;
        display:flex;
        justify-content:center;
    }
    .pagination-wrap nav{
        display:flex;
        gap:4px;
    }
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
        .grid{ grid-template-columns:repeat(auto-fill, minmax(150px, 1fr)); gap:14px; }
        .product-name{ font-size:14px; }
    }
</style>
</head>
<body>



<div class="hero">
    <h1>Daftar Produk</h1>

</div>

<div class="kategori-chips">
    <a href="{{ url('/produk') }}" class="chip all">Semua</a>
    <a href="{{ url('/produk') }}?q=Baju" class="chip baju">Baju</a>
    <a href="{{ url('/produk') }}?q=Sepatu" class="chip sepatu">Sepatu</a>
    <a href="{{ url('/produk') }}?q=Elektronik" class="chip elektronik">Elektronik</a>
    <a href="{{ url('/produk') }}?q=Celana" class="chip celana">Celana</a>
    <a href="{{ url('/produk') }}?q=Topi" class="chip topi">Topi</a>
</div>

@if(session('success'))
    <div class="alert-success">{{ session('success') }}</div>
@endif

<div class="container">

    <div class="result-info">
        Menampilkan <strong>{{ $result->total() }}</strong> produk
        @if($q) untuk kategori "<strong>{{ $q }}</strong>" @endif
    </div>

    @if($result->count() > 0)
        <div class="grid">
            @foreach($result as $produk)
                @php
                    $namaKategori = strtolower($produk->kategori->nama_kategori ?? '');
                    $kategoriClass = in_array($namaKategori, ['baju','sepatu','elektronik','celana','topi'])
                        ? $namaKategori : 'default';

                    if ($produk->stok == 0) {
                        $stockClass = 'stock-habis';
                        $stockLabel = 'Habis';
                    } elseif ($produk->stok <= 10) {
                        $stockClass = 'stock-terbatas';
                        $stockLabel = 'Stok terbatas';
                    } else {
                        $stockClass = 'stock-tersedia';
                        $stockLabel = 'Tersedia';
                    }
                @endphp
                <div class="card">
                    <div class="card-img">
                        @if($produk->foto_produk)
                            <img src="{{ asset('storage/'.$produk->foto_produk) }}" alt="{{ $produk->nama_produk }}">
                        @else
                            <span class="placeholder">{{ strtoupper(substr($produk->nama_produk, 0, 1)) }}</span>
                        @endif
                        <span class="stock-badge {{ $stockClass }}">{{ $stockLabel }}</span>
                    </div>
                    <div class="card-body">
                        <span class="kategori-label {{ $kategoriClass }}">
                            {{ $produk->kategori->nama_kategori ?? 'Tanpa Kategori' }}
                        </span>
                        <h3 class="product-name">{{ $produk->nama_produk }}</h3>
                        <div class="product-footer">
                            <span class="price">Rp {{ number_format($produk->harga_produk, 0, ',', '.') }}</span>
                            <span class="stok-text">Stok: {{ $produk->stok }}</span>
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
            <h2>Produk tidak ditemukan</h2>
            <p>Coba kata kunci kategori lain, atau lihat semua produk.</p>
        </div>
    @endif

</div>

</body>
</html>