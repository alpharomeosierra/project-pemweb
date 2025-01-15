<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Admin Dashboard for E-Commerce">
    <meta name="author" content="Your Name">
    <title>Maggotopia | Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/css/style_dashboard.css">
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
        <h2 class="text-center">Maggotopia Admin</h2>
        <div class="divider"></div>
        <a href="{{url('view_adhome')}}">Dashboard</a>
        <a href="{{url('view_category')}}">Kategori</a>
        <button class="toggle-btn">Produk</button>
        <div class="submenu">
            <a href="{{url('/show_product')}}">Lihat Produk</a>
            <a href="{{url('/view_product')}}">Tambah Produk</a>
        </div>
        <a href="{{url('/show_order')}}">Pesanan</a>
        <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
            @csrf
            <button type="submit" class="btn nav-link">
                {{ __('Keluar') }}
            </button>
        </form>
    </div>
    <a href="#">Pesanan</a>
    <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
        @csrf
        <button type="submit" class="btn nav-link">
            {{ __('Keluar') }}
        </button>
    </form>
</div>

@if(session()->has('message'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
    {{session()->get('message')}}
</div>
@endif

<!-- Daftar Kategori -->
<div class="table-kategori">
    <h2 class="mb-4 text-center">Daftar Kategori</h2>
    <div class="table-responsive">
        <table class="table table-hover table-bordered align-middle">
            <thead class="table-dark">
                <tr class="text-center">
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $data)
                <tr>
                    <td class="text-capitalize">{{ $data->category_name }}</td>
                    <td class="text-center">
                        <a onclick="return confirm('Hapus Data?')" class="btn btn-sm btn-danger me-2" href="{{ url('delete_category', $data->id) }}">
                            <i class="bi bi-trash"></i> Hapus
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Tambah Kategori -->
<div class="main-content">
    <div class="form-container w-50">
        <h1 class="mb-4 text-center">Tambah Kategori</h1>
        <form action="{{ url('/add_category') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="category_name" class="form-label">Nama Kategori</label>
                <input type="text" name="category" id="category" class="form-control" placeholder="Masukkan Kategori" required>
            </div>
            <button type="submit" class="btn btn-warning w-100">Tambah Kategori</button>
        </form>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
