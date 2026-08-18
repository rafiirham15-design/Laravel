<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Kategori</title>
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
    }
    .topbar-inner{
        max-width:640px; margin:0 auto;
        padding:18px 24px;
    }
    .brand{
        font-family:'Fraunces',serif;
        font-weight:700;
        font-size:24px;
        color:var(--plum);
        letter-spacing:-0.5px;
    }
    .brand span{ color:var(--mustard); }

    .container{
        max-width:640px; margin:0 auto;
        padding:40px 24px 60px;
    }

    .hero h1{
        font-family:'Fraunces',serif;
        font-size:28px;
        font-weight:600;
        margin:0 0 6px;
    }
    .hero p{
        color:var(--ink-soft);
        margin:0 0 28px;
        font-size:15px;
    }

    .form-card{
        background:var(--card-bg);
        border:1px solid var(--border);
        border-radius:14px;
        padding:28px;
    }

    label{
        display:block;
        font-size:13px;
        font-weight:600;
        color:var(--ink);
        margin-bottom:8px;
    }

    input[type="text"]{
        width:100%;
        border:1px solid var(--border);
        border-radius:8px;
        padding:11px 14px;
        font-size:14px;
        font-family:'Inter',sans-serif;
        outline:none;
        color:var(--ink);
    }
    input[type="text"]:focus{
        border-color:var(--plum);
    }

    .form-actions{
        display:flex;
        align-items:center;
        gap:16px;
        margin-top:24px;
    }

    button[type="submit"]{
        border:1px solid var(--plum);
        background:var(--plum);
        color:#fff;
        padding:11px 24px;
        border-radius:8px;
        cursor:pointer;
        font-size:14px;
        font-weight:600;
        font-family:'Inter',sans-serif;
    }
    button[type="submit"]:hover{ background:#3B3159; }

    .link-kembali{
        font-size:14px;
        font-weight:600;
        color:var(--ink-soft);
    }
    .link-kembali:hover{ color:var(--plum); }

    @media (max-width:600px){
        .hero h1{ font-size:24px; }
        .form-card{ padding:20px; }
    }
</style>
</head>
<body>



<div class="container">
    <div class="hero">
        <h1>{{ @$kategori->id ? 'Ubah Kategori' : 'Tambah Kategori' }}</h1>
    </div>

    <div class="form-card">
        <form action="{{ url('kategori/create', @$kategori->id) }}" method="POST">

            @csrf

            <label>Nama Kategori</label>

            <input
                type="text"
                name="nama_kategori"
                value="{{ old('nama_kategori', @$kategori->nama_kategori) }}"
                placeholder="Contoh: Baju, Sepatu, Elektronik"
            >

            @error('nama_kategori')
                <p style="color:#9C2B26; font-size:13px; margin-top:6px;">{{ $message }}</p>
            @enderror

            <div class="form-actions">
                <button type="submit">Simpan</button>
                <a href="{{ url('/kategori') }}" class="link-kembali">Kembali ke daftar</a>
            </div>

        </form>
    </div>
</div>

</body>
</html>