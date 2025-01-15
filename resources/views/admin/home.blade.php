<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Admin Dashboard for E-Commerce">
    <meta name="author" content="Your Name">
    <title>Maggotopia | Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/css/style_adhome.css">
</head>
<body>
    <div class="sidebar">
        <h2 class="text-center">Maggotopia Admin</h2>
        <div class="divider"></div>
        <a href="{{url('view_adhome')}}">Dashboard</a>
        <a href="{{url('view_category')}}">Kategori</a>
        <button class="toggle-btn">Produk</button>
        <div class="submenu">
            <a href="{{url('/show_product')}}">Lihat Produk</a>
            <a href="{{url('/view_product')}}">Tambah Produk</a>
        </div>
        <a href="#">Pesanan</a>
        <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
            @csrf
            <button type="submit" class="btn nav-link">
                {{ __('Keluar') }}
            </button>
        </form>
    </div>
    <div class="main-content">
        <div class="header">
            <h1>Selamat Datang!</h1>
        </div>
        <div class="card-container">
            <div class="card">
                <h3>Produk</h3>
                <p>Lihat daftar produk</p>
                <a href="{{ url('/show_product') }}" class="btn btn-warning">Lihat</a>
            </div>
            <div class="card">
                <h3>Kategori</h3>
                <p>Lihat daftar kategori</p>
                <a href="{{ url('/view_category') }}" class="btn btn-warning">Lihat</a>
            </div>
            <div class="card">
                <h3>Pesanan</h3>
                <p>Lihat daftar pesanan</p>
                <a href="{{ url('/show_order') }}" class="btn btn-warning">Lihat</a>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // submenu
        document.querySelector('.toggle-btn').addEventListener('click', function() {
            const submenu = document.querySelector('.submenu');
            submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
        });
    </script>
</body>
</html>
