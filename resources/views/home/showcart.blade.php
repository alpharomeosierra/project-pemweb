<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Tokopedia Style</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }

        .checkout-header {
            background-color:rgb(219, 206, 25);
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }

        .btn-orange {
            background-color: #ff5722;
            color: white;
            font-weight: bold;
        }

        .btn-orange:hover {
            background-color: #e64a19;
        }

        .summary-card,
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .summary-card h5,
        .card-header {
            font-weight: bold;
        }

        .product-card img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 10px;
        }

        .card-header {
            background-color: #f0f0f0;
        }

        .summary-card {
            padding: 20px;
            background-color: white;
        }

        .btn-outline-secondary {
            border-color: #4CAF50;
            color: #4CAF50;
        }

        .btn-outline-secondary:hover {
            background-color: #4CAF50;
            color: white;
        }

        .badge {
            font-size: 0.9rem;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <div class="checkout-header">
        <i class="fas fa-shopping-cart me-2"></i> Keranjang
    </div>

    <div class="container my-4">
        <div class="row">
            <!-- Left Section -->
            <div class="col-md-8">
                <!-- Produk yang Dibeli -->
                <div class="card mb-3">
                    <div class="card-header">
                        <h5>Produk yang Dibeli</h5>
                    </div>
                    <?php $totalprice=0; ?>
                    @foreach($cart as $cart)
                    <div class="card-body position-relative">
                        <div class="d-flex align-items-center mb-3 product-card">
                            <img src="product/{{$cart->image}}" alt="Product Image">
                            <div class="ms-3">
                                <p class="mb-1"><strong>{{$cart->product_title}}</strong></p>
                                <p class="text-muted mb-1">Rp.{{$cart->price}}</p>
                                <p class="text-muted mb-1">{{$cart->quantity}}</p>
                            </div>
                        </div>
                        <!-- Remove Button -->
                        <a class="btn btn-sm btn-danger position-absolute" style="bottom: 45px; right: 10px;" href="{{url('/remove_cart',$cart->id)}}">Hapus</a>
                        <hr>
                    </div>
                    <?php $totalprice=$totalprice+$cart->price ?>
                    @endforeach
                </div>
            </div>

            <!-- Right Section -->
            <div class="col-md-4">
                <!-- Ringkasan Belanja -->
                <div class="summary-card">
                    <h5><i class="fas fa-receipt me-2"></i>Ringkasan Belanja</h5>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <strong>Total Tagihan</strong>
                        <strong>Rp.{{$totalprice}}</strong>
                    </div>
                    <hr>
                        <a class="btn btn-sm btn-warning w-100" href="{{url('checkout')}}">Beli</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
