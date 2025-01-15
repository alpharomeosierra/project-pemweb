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
        <a href="{{url('/show_order')}}">Pesanan</a>
        <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
            @csrf
            <button type="submit" class="btn nav-link">
                {{ __('Keluar') }}
            </button>
        </form>
    </div>
    
    <main>
    
    <div class="content">
        <div class="table-container">
            <h2 class="mb-4 text-center">Daftar Pesanan</h2>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Nama Pesanan</th>
                        <th>Email</th>
                        <th>Nomor Telepon</th>
                        <th>Alamat</th>
                        <th>Barang</th>
                        <th>Jumlah</th>
                        <th>Total Harga</th>
                        <th>Foto</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order as $order)
                    <tr>
                        <td>{{$order->name}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->product_title}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->price}}</td>
                        <td><img src="/product/{{$order->image}}" style="max-width: 100px; max-height: 100px;"></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
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
