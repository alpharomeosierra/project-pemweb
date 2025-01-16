<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .about-section {
            text-align: center;
            padding: 150px 70px;
            background-image: url('https://i0.wp.com/trikmerawat.com/wp-content/uploads/2020/06/budidaya-maggot.jpg'); /* Ganti URL dengan gambar yang diinginkan */
            background-size: cover;
            background-position: center;
            color: #333;
            position: relative;
        }
        .about-section::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.8); /* Warna semi-transparan */
            z-index: 1;
        }
        .about-section h1,
        .about-section p {
            position: relative;
            z-index: 2; /* Agar teks berada di atas layer semi-transparan */
        }
        .team-section {
            padding: 50px 20px;
        }
        .team-img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 15px;
        }
        .team-card {
            text-align: center;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 10px;
            transition: transform 0.3s;
        }
        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        footer {
            background-color: #f8c444;
            padding-bottom: 5px;
            padding-top: 18px;
            text-align: center;
        }
        .navbar-card {
            position: fixed;
            top: 10px;
            right: 250px;
            left: 250px;
            z-index: 1000;
            border-radius: 23px;
        }
        .navbar-brand {
            color: #f8c444;
        }
        .card {
            border-radius: 23px;
        }
        .deskripsi {
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="card shadow-sm navbar-card">
        <div class="card-body">
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <a class="navbar-brand font-weight-bold" href="#">Maggotopia</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('view_userpage')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('view_aboutus')}}">Tentang Kami</a>
                        </li>
                        @if (Route::has('login'))
                        @auth
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit" class="btn nav-link" style="background: none; border: none; padding: 0; cursor: pointer; margin-top: 8px; margin-left: 7px;">
                                    {{ __('Keluar') }}
                                </button>
                            </form>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                        @endauth
                        @endif
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <!-- About Section -->
    <div class="about-section">
        <h1>Tentang Kami</h1>
    </div>

    <!-- Team Section -->
    <div class="team-section container">
        <p class="deskripsi">Maggotopia adalah platform e-commerce inovatif yang menyediakan berbagai produk berbasis maggot untuk mendukung keberlanjutan dan efisiensi di berbagai sektor. Kami berfokus pada solusi berbasis maggot, mulai dari pakan ternak berkualitas tinggi, pupuk organik premium, hingga layanan pengelolaan limbah organik.</p>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="team-card">
                    <img src="https://gdm.id/wp-content/uploads/2024/08/desain-kandang-maggot.webp" alt="Team Member" class="team-img">
                    <h5>Maggot Kecil</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="team-card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwkLfJ9nIQYpcbmvAnYesjgmFuNxUUBrm2Kw&s" alt="Team Member" class="team-img">
                    <h5>Maggot Sedang</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="team-card">
                    <img src="https://waste4change.com/blog/wp-content/uploads/image-136.png" alt="Team Member" class="team-img">
                    <h5>Maggot Besar</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="team-card">
                    <img src="https://down-id.img.susercontent.com/file/5c502b5d4031d9f4764697877e9e6fbf" alt="Team Member" class="team-img">
                    <h5>Telur Maggot</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Maggotopia. Semua hak cipta dilindungi.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
