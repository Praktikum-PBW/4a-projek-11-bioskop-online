<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/sidebar.css') !!}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Cinematix | {{ $title }}</title>
</head>

<body>

    <header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-2 col-md-3 col-lg-2 me-0 px-3" href="#"><img src="assets/img/ticket.png" width="32px"
                class="mb-1 ms-2" alt=""><b> CINEMATIC</b></a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
                <div class="position-sticky pt-3">
                    <div class="card ms-2 me-2">
                        <div class="card-body">
                            <img src="assets/img/user1.jpg" width="50px"
                                class="img-fluid float-start rounded-circle mt-2 me-3" alt=""><span
                                class="font"><b>{{ Auth::user()->username }}</b></span>
                            <p>{{ Auth::user()->level }}</p>
                            <hr class="mb-0">
                        </div>
                    </div>
                </div>
                <ul class="nav flex-column mt-3">
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" aria-current="page"
                            href="/dashboard">
                            <span data-feather="home"></span>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Film' ? 'active' : '' }}" href="/film">
                            <span data-feather="file"></span>
                            Films
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Ticket' ? 'active' : '' }}" href="/ticket">
                            <span data-feather="shopping-cart"></span>
                            Ticket
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'User' ? 'active' : '' }}" href="/user">
                            <span data-feather="users"></span>
                            Customers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Transaction' ? 'active' : '' }}" href="/transaction">
                            <span data-feather="bar-chart-2"></span>
                            Transaction
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Jadwal' ? 'active' : '' }}" href="/jadwal">
                            <span data-feather="layers"></span>
                            Jadwal
                        </a>
                    </li>
                    <hr class="hr1">
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: 20px;" href="/logout">
                            <b><i class="bi bi-box-arrow-left"></i>
                                Logout</b>
                        </a>
                    </li>
                </ul>

            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="container mt-3">
                    @yield('content')
                </div>
            </main>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
            </script>
            <script src="assets/js/dashboard.js"></script>
            <!-- Option 2: Separate Popper and Bootstrap JS -->
            <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
                integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
                integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
        </script>
        -->
</body>

</html>
