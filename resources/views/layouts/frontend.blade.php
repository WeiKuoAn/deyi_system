<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/LumenMethod.css">
    <title>流明法 - 得毅照明</title>
    <script src="assets/js/LumenMethod.js" defer></script>
    
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <div id="app">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light py-3 fixed-top" style="background-color: #adb5bd;">
            <div class="container">
                <a href="#" class="navbar-brand">得毅照明</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="#" class="nav-link">首頁</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">燈具挑選</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/LumenMethod') }}" class="nav-link">流明法</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">知識百科</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">成品展示</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">預約諮詢</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">關於我們</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                    <a href="#" class="nav-link">購物車</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
                                        會員登出
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a href="#" class="nav-link">購物車</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('login') }}" class="nav-link">會員登入</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a href="{{ route('register') }}" class="nav-link">註冊會員</a>
                                    </li>
                                @endif
                            @endauth

                        @endif
                    </ul>
                </div>
            </div>

        </nav>

        <!-- Showcase -->
        <section class="bg-light text-dark p-5 text-center text-sm-start">
            <div class="container">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <img class="img-fluid d-none d-sm-block" src="assets/image/test.jpg" alt="">
                </div>
            </div>
        </section>

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=AM_HTMLorMML-full">
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('scripts')
</body>

</html>