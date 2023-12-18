<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light ">
        <div class="container">
            <div class="login-brand">
                <img src="assets/img/stisla-fill.svg" alt="logo" width="50" class="shadow-light rounded-circle ms-3">
              </div>

            <a class="nav-link {{ $title === 'About' ? 'active' : '' }} fw-medium text-primary-emphasis  ms-4"
                aria-current="page" href="/about">About</a>

            <a class="nav-link {{ $title === 'News' ? 'active' : '' }} fw-medium text-primary-emphasis ms-3"  "
                href="/news">News</a>


            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Login' ? 'active' : '' }} fw-bolder text-primary-emphasis"
                            href="/login">Login</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>
    </div>

    <div class="container">
        @yield('conten')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
