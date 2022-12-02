<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href = "{{ asset('fontawesome/css/all.css') }}" rel = "stylesheet">
    <link rel="stylesheet" href = '{{ asset('style.css') }} ' rel = "stylesheet">
    <title>Job Seeker</title>
</head>
<body>

    <!-- Navigation Bar-->
    <ul class="nav justify-content-between py-2">
        <div class = "left-logo">
            <li class="nav-item">
                <a href = "/" class = "nav-link fs-3 fw-bold text-danger">JOB SEEKER</a>
            </li>
        </div>

        <div class="right-menu d-flex px-3">

            @auth
            <li class="nav-item ">
                <a class = "nav-link text-dark text-uppercase fw-bold" href = "#">WELCOME {{ auth()->user()->name }}</a>
            </li>
            <li class="nav-item">
                <a class = "nav-link text-dark text-uppercase fw-bold" href = "/listings/manage"><i class="fa-solid fa-gear"></i> Manage User</a>
            </li>
            <li class="nav-item">
                <form action = "/logout" method = "post">
                    @csrf 
                    <button type = "submit" class = "btn btn-outline-danger">
                        <i class="fa-solid fa-door-closed"></i>&nbsp; Logout
                    </button>
                </form>
            </li>

            @else

            <li class="nav-item ">
                <a class = "nav-link text-dark text-uppercase fw-bold" href = "/login"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
            </li>
            <li class="nav-item">
                <a class = "nav-link text-dark text-uppercase fw-bold" href = "/register"><i class="fa-solid fa-circle-user"></i> Register</a>
            </li>

            @endauth
        </div>
        <x-flash-message />
    </ul>
    <!-- End Navigation -->

    <!-- Backgorund Picture -->
    <section class="background">
       <div class="card">
        <img src = '{{ asset("img/laravel.png") }}' class = "img-fluid" style = "height: 400px ">
        <div class="card-img-overlay">
            <div class="wrap">
                <h1 class="fw-bold">JOB SEEKER</h1>
                <p class = "text-danger">Find or post laravel job & projects</p>
                <button class = "btn btn-outline-danger rounded-pill">SIGN UP TO JOB SEEKER</button>
            </div>
        </div>
       </div>
    </section>
    <!-- End Background Picture -->

    <!-- Search Bar -->
    <section class="serach container">
        <form action = "/">
        <div class="row">
            <div class="col-8 col-sm-8 col-md-10 col-lg-10">
                <input type = "text" name = "search" class = "form-control mt-3" placeholder = "Serach From Jobseeker..." >
            </div>
            <div class="col-3 col-sm-2 col-md-2 col-lg-2">
                <button type = "submit" class = "btn btn-danger mt-3"> Search</button>
            </div>
        </div>
        </form>
    </section>
    <!-- End Search Bar -->

    <!-- Line Break -->
    <div class="line-break mt-6">
        <hr class = "text-danger">
    </div>
    <!-- End Lind Break -->

    <!-- view output -->
    <main>
    @yield('content')
    </main>


    <!-- Footer -->
    <section class="footer">
        <div class="mt-4 bg-danger text-center fw-bold">
            <div class="row">
                <div class="col-11 text-center py-2">
                    &copy; 2022 All right reversed. &nbsp; <a href = "#" class = "text-light"><i class="fa-brands fa-facebook"></i></a> &nbsp; <a href = "#" class = "text-light"><i class="fa-brands fa-twitter"></i></a> &nbsp; <a href = "#" class = "text-light"><i class="fa-brands fa-instagram-square"></i></a> &nbsp; <a href = "#" class = "text-light"><i class="fa-solid fa-phone"></i></a> &nbsp; <a href = "#" class = "text-light"><i class="fa-solid fa-envelope"></i></a>
                </div>
                <div class="col-1">
                    <button type = "submit" class = "btn btn-dark"><a href = "listings/create" class = "text-decoration-none text-white">Post Job</a></button>
                </div>
            </div>
            
        </div>
    </section>
    <!-- End Footer -->
    {{-- @include('sweetalert::alert') --}}

<script src="js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/cdn.min.js') }}"></script>
<script>
    setTimeout(function() {
      $('.alert').slideUp() ;
    },4000) ;
    
    </script>
</body>
</html>