<!DOCTYPE html>
<html>
<head>
    <title>Laravel 10.48.0 - CRUD User Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css-bootstrap/css/styles.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('css-bootstrap/js/scripts.js') }}"></script>
</head>
<body>
<nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: red;">
    <div class="container">
        <a class="navbar-brand mr-auto" href="#">Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="">Đăng Nhập</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('category.index') }}">Danh mục</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="">Đăng Xuất</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

@yield('content')

</body>
</html>