{{-- link css --}}
<link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">

        <nav class="navbar navbar-expand-md shadow-sm  bg-1" style="background-color: #2e1792">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    <h3 class="nav-item color-4" style="font-weight: 800"> Toko Sebelah </h3>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <ul class="navbar-nav justify-content-center">
                        <a style="text-decoration: none; font-weight: 200" class="color-4 m-1" href="{{ url('/home') }}">
                            Home
                        </a>
                        <a style="text-decoration: none; font-weight: 200" class="color-4 m-1" href="#">
                            Order
                        </a>
                        <a style="text-decoration: none; font-weight: 200" class="color-4 m-1" href="#">
                            about
                        </a>
                        @if (Auth()->user()->role == 'admin')
                            <a style="text-decoration: none; font-weight: 200; background-color: #160749; border-radius: 25px; " class="color-4 px-3 py-1 mx-2" href="{{ url('/admin') }}">
                                Dashboard Admin
                            </a>
                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto color-4">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item color-4">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown color-4">
                                <a id="navbarDropdown" style="text-decoration: none; font-weight: 300" class="color-4 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>