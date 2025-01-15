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
                                    <a class="nav-link" href="{{url('show_cart')}}">Keranjang</a>
                                </li>
                                <li class="nav-item">
                                    <form method="POST" action="{{ route('logout') }}" class="inline">
                                        @csrf
                                        <button type="submit" class="btn nav-link" style="background: none; border: none; padding: 0; cursor: pointer; margin-top: 9px; margin-left: 10px; margin-right: 7px;">
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
        </div>