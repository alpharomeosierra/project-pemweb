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
        </div>
        <a href="#">Pesanan</a>
        <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
            @csrf
            <button type="submit" class="btn nav-link">
                {{ __('Keluar') }}
            </button>
        </form>
    </div>
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
    <div class="main-content-prod">
        <div class="form-container w-50">
            <h1 class="mb-4 text-center">Tambah Produk</h1>
            <form action="{{ url('/add_product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="product_name" class="form-label">Nama Produk</label>
                    <input type="text" name="product" id="product" class="form-control" placeholder="Masukkan Nama Produk" required>
                </div>
                <div class="mb-3">
                    <label for="product_desc" class="form-label">Deskripsi</label>
                    <input type="text" name="description" id="description" class="form-control" placeholder="Masukkan Deskripsi" required>
                </div>
                <div class="mb-3">
                    <label for="product_qty" class="form-label">Jumlah</label>
                    <input type="number" min="0" name="quantity" id="quantity" class="form-control" placeholder="Masukkan Jumlah" required>
                </div>
                <div class="mb-3">
                    <label for="product_price" class="form-label">Harga</label>
                    <input type="number" name="price" id="price" class="form-control" placeholder="Masukkan Harga" required>
                </div>
                <div class="mb-3">
                    <label for="product_disc" class="form-label">Diskon</label>
                    <input type="number" name="discount" id="discount" class="form-control" placeholder="Masukkan Harga Diskon">
                </div>
                <div class="mb-3">
                    <label>Kategori: </label>
                    <select name="category" require>
                        @foreach($category as $category)
                        <option>{{$category->category_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label>Foto: </label>
                    <input type="file" name="image" require>
                </div>
                <button type="submit" class="btn btn-warning w-100">Tambah</button>
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
