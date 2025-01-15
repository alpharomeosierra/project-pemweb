<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maggotopia | Home</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="home/css/style_home.css">
</head>
<body>
    @include('home.navbar')
    <header>
            <h1>Maggotopia</h1>
            <h2>Maggotopia adalah platform e-commerce inovatif yang menyediakan berbagai produk berbasis maggot untuk mendukung keberlanjutan dan efisiensi di berbagai sektor. Kami berfokus pada solusi berbasis maggot, mulai dari pakan ternak berkualitas tinggi, pupuk organik premium, hingga layanan pengelolaan limbah organik.</h2>
            <div class="button-home">
                <a href="{{url('view_aboutus')}}">
                    <button type="button" class="btn">Pelajari Lebih Lanjut</button>
                </a>
            </div>
        </div>
    </header>
    <main>
        <h3 style="padding-top: 20px;">Manfaat Budidaya Maggot</h3>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card" style="width: 18rem;margin-top: 30px;">
                        <img src="https://placehold.co/100" class="card-img-top" alt="...">
                        <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card" style="width: 18rem;margin-top: 30px;">
                        <img src="https://placehold.co/100" class="card-img-top" alt="...">
                        <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card" style="width: 18rem;margin-top: 30px;">
                        <img src="https://placehold.co/100" class="card-img-top" alt="...">
                        <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-sec">
            <h3 style="padding-top: 20px;"> Produk Kami</h3>
            <div class="container">
                <div class="row">
                    @foreach($product as $product)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card" style="width: 18rem;margin-top: 20px;">
                            <img src="product/{{$product->image}}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">{{$product->title}}</h5>
                            <h5 class="card-title">Rp.{{$product->price}}</h5>
                            <p class="card-text">{{$product->description}}</p>
                            <form action="{{url('add_cart',$product->id)}}" method="POST">
                                @csrf
                                <div class="d-flex align-items-center">
                                    <input type="number" name="quantity" class="form-control text-center" value="1" min="1" max="99" style="width: 60px; margin-right: 10px;">
                                    <input type="submit"class="btn btn-info" value="Masukkan Keranjang">
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    <h3>Hubungi Kami!</h3>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12"> 
                <form>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleInputName">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="button-hform">
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </main>
    <footer>
        <p></p>
    </footer>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
