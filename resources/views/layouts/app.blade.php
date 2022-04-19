<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="background-color: #000000;">

    <nav style="margin-bottom: 30px; position: fixed; width: 100%; background-color: #171717;"
        class="navbar navbar-expand-lg navbar-dark px-5">
        <div class="container-fluid">
            <a class="navbar-brand fw-bolder" href="@auth {{ route('dashboard') }} @endauth
                @guest {{ route('home') }} @endguest">
                Posty
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex justify-content-end w-auto" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link text-light" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                    @endguest

                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('posts') }}" tabindex="-1"
                            aria-disabled="true">Post</a>
                    </li>

                    @auth
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('dashboard') }}">Dashboard</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('profile') }}">Profile</a>
                        </li>

                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button class="nav-link border-0 bg-transparent text-light" tabindex="-1" type="submit"
                                    aria-disabled="true">Logout</button>
                            </form>
                        </li>
                    @endauth

                    @guest
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('login') }}">Login</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('register') }}" tabindex="-1"
                                aria-disabled="true">Register</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
