<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>YW Web Development Provider</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('applicants/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('applicants/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('applicants/vendor/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet"
          type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
          type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('applicants/css/landing-page.min.css') }}" rel="stylesheet">

</head>

<body>
@include('sweetalert::alert')
<!-- Navigation -->
<!-- navbar -->
<!-- ============================================================== -->
<div class="dashboard-header">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ 'YW' }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav ml-auto navbar-right-top">
                    <li class="nav-item dropdown nav-user">
                        <a href=" {{route('login')}} " class="btn btn-primary"> <i class="fa fa-sign-in"> Sign-in</i>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</div>
<!-- ============================================================== -->
<!-- end navbar -->


<!-- Masthead -->
<header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container header">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h1 class="mb-5">Talk is Cheap! Show me the code. <i class="fa fa-code"></i></h1>
            </div>
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                <center>
                    <div class="col-12 col-md-4">
                        <a href=" {{ route('register') }}" class="btn btn-block btn-lg btn-primary">Apply now!</a>
                    </div>
                </center>
            </div>
        </div>
    </div>
</header>
<!-- Testimonials -->
<section id="#about-us" class="testimonials text-center bg-light">
    <div class="container">
        <h2 class="mb-5">Available Positions</h2>
        @if($data !== null)
            <div class="row">
                @foreach($data as $data)
                    <div class="col-md-4">
                        <div class="card shadow p-3 mb-5 rounded" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $data->positions_desc }}</h5>
                                <p class="card-text">Where are now hiring for a position
                                    of {{ $data->positions_desc }}</p>
                                <a href="{{ route('register') }}" class="btn btn-primary">Apply Now!</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="row">
                <p class="font-weight-light mb-0">
                    No Available Jobs yet! <span class="fa fa-search"> </span>
                </p>
            </div>
        @endif
    </div>

</section>
<section id="#about-us" class="testimonials text-center bg-light">
    <div class="container">
        <h2 class="mb-5">About Us</h2>
        <div class="row">
            <p class="font-weight-light mb-0">We're a US based IT services firm around for over 10 years and many
                amazing
                clients. We have several awesome PH team members and we are ready to grow it more.
            </p>
        </div>
    </div>
</section>
<!-- Footer -->
<footer class="footer bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                <ul class="list-inline mb-2">
                    <li class="list-inline-item">
                        <a href="#about-us">Available Position</a>
                    </li>
                    <li class="list-inline-item">&sdot;</li>
                    <li class="list-inline-item">
                        <a href="#">About</a>
                    </li>
                </ul>
                <p class="text-muted small mb-4 mb-lg-0">&copy; YW HR Portal 2020. All Rights Reserved.</p>
            </div>
            <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item mr-3">
                        <a href="#">
                            <i class="fab fa-facebook fa-2x fa-fw"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mr-3">
                        <a href="#">
                            <i class="fab fa-twitter-square fa-2x fa-fw"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab fa-instagram fa-2x fa-fw"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('applicants/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('applicants/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
