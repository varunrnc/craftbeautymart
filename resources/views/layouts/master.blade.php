<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{asset('public/assets/images/favicon.ico')}}" type="image/x-icon">
    <meta name="description" content="@yield('description')">
    <meta name="keyword" content="@yield('keyword')">
    <!-- <link rel="shortcut icon" href="{{ asset('public/favicon.ico') }}" type="image/x-icon"> -->
    {{-- Bootstrap CSS  --}}
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">
    {{-- Bootstrap Icons  --}}
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap-icons.min.css') }}">
    {{-- aos cdn  --}}
    <link rel="stylesheet" href="{{ asset('public/assets/aos/aos.css') }}">
    {{-- owl carousel  --}}
    <link rel="stylesheet" href="{{ asset('public/assets/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/owl-carousel/css/owl.theme.default.min.css') }}">

    {{-- Custom CSS  --}}
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css') }}">
    <style>
        .otp-field {
            flex-direction: row;
            column-gap: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .otp-field input {
            height: 45px;
            width: 42px;
            border-radius: 6px;
            outline: none;
            font-size: 1.125rem;
            text-align: center;
            border: 1px solid #ddd;
        }

        .otp-field input:focus {
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
        }

        .otp-field input::-webkit-inner-spin-button,
        .otp-field input::-webkit-outer-spin-button {
            display: none;
        }

        .resend {
            font-size: 14px;
        }

        .cart-item,
        .wish-item {
            background-color: #ff0000;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            color: #fff;
            text-align: center;
        }

        .wish-item {
            background-color: #2d00aa;
        }
    </style>
    @yield('page-css')


</head>

<body>

    <header>
        <!-- contact content -->
        <div class="header-content-top">
            <div class="content d-flex align-items-center">
                <span class="d-flex align-items-center"><i class="fas fa-phone-square-alt"></i> <a href="#" class="text-white">+0-00000 00000</a></span>
                <span class="d-flex align-items-center"><i class="fas fa-envelope-square"></i><a href="#" class="text-white">info@craftbeautymart.com</a></span>
            </div>
        </div>
        <!-- / contact content -->

        <header>
            <nav class="navbar bg-body-tertiary">
                <div class="container align-items-center">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{asset('public/assets/images/logo.png')}}" alt="logo" class="img-fluid">
                    </a>
                    <form class="d-flex w-50" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2"><i class="bi bi-search"></i></span>
                        </div>

                    </form>
                    <div class="d-flex">
                        @if (auth()->check())
                        <nav class="mx-2 d-flex align-items-center">
                            <label for="" class="login-open position-relative">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-user-circle"></i>&nbsp;
                                    <span class="login-text">
                                        <strong>Account</strong>
                                    </span>
                                </div>

                                <ul class="login-list position-absolute p-2">
                                    @if (auth()->user()->role == 'admin')
                                    <li><a href="{{ route('dashboard') }}">Admin Panel</a></li>
                                    @endif
                                    <li><a href="#">Profile</a></li>
                                    <li><a href="#">My Orders</a></li>
                                    <li><a href="{{ route('logout') }}">Logout</a></li>
                                </ul>
                            </label>
                        </nav>
                        @else
                        <a href="#" class="d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-person-circle font-24"></i>&nbsp;
                            <span>Login</span></a>&nbsp;

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content px-5">
                                    <form id="login-form">
                                        @csrf
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Login</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>You will receive a 4 digit OTP for verification</p>

                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile No.">
                                            </div>

                                            <div class="form-check my-3">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Remember Me
                                                </label>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="text-center my-3">
                                            <button type="submit" class="btn btn-success" id="login_btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                        <!-- OTP Modal -->
                        <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">

                                    <div class="card-body p-5 text-center">
                                        <h4>Verify</h4>
                                        <p>Your code was sent to you via mobile</p>

                                        <form id="verify_form">
                                            <div class="otp-field mb-4">
                                                <input type="number" id="first" />
                                                <input type="number" id="second" disabled />
                                                <input type="number" id="third" disabled />
                                                <input type="number" id="four" disabled />
                                            </div>
                                            <p id="otp_error" class="text-danger"></p>

                                            <button class="btn btn-primary mb-3 mx-3 verify-btn" type="submit" id="verify_btn">
                                                Verify
                                            </button>

                                            <button type="button" class="btn btn-danger mb-3 mx-3" data-bs-dismiss="modal">
                                                Cancel
                                            </button>
                                        </form>



                                        <p class="resend text-muted mb-0">
                                            Didn't receive code? <a href="" class="text-danger">Request
                                                again</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        <a href="#" class="position-relative"><i class="bi bi-cart4 font-24 text-info"></i><span class="position-absolute top-0 end-0 cart-item">3</span></a> &nbsp; &nbsp;
                        <a href="#" class="position-relative"><i class="bi bi-heart-fill font-24 text-danger"></i><span class="position-absolute top-0 end-0 wish-item">5</span></a> &nbsp; &nbsp;
                    </div>

                </div>
            </nav>

            <nav class="navbar navbar-expand-lg navbar-bg">
                <div class="container-fluid">
                    <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="bi bi-list-ul text-white"></i>
                    </button>
                    <div class="collapse navbar-collapse md-nav" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto mb-2 mb-lg-0 ">
                            <li class="nav-item">
                                <a class="nav-link text-white" aria-current="page" href="{{ route('home') }}">SKIN CARE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" aria-current="page" href="{{ route('home') }}">MAKEUP</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" aria-current="page" href="{{ route('home') }}">HAIR CARE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" aria-current="page" href="{{ route('home') }}">PERFUMES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" aria-current="page" href="{{ route('home') }}">FOR KIDS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" aria-current="page" href="{{ route('home') }}">WELLNESS</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Brands
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Clarins</a></li>
                                    <li><a class="dropdown-item" href="#">Hermes</a></li>
                                    <li><a class="dropdown-item" href="#">EltaMD</a></li>
                                    <li><a class="dropdown-item" href="#">Kiehls</a></li>
                                    <li><a class="dropdown-item" href="#">Elizabeth Arden</a></li>
                                    <li><a class="dropdown-item" href="#">Giorgio Armani</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" aria-current="page" href="{{ url('/shop') }}">Shop</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </header>

    </header>


    @yield('main-content')


    <section class="pt-4 mt-5" style="background-color: #445268; color: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="bg-white p-3 rounded-circle text-center" style="width: 50px; height: 50px;">
                            <span class="text-dark font-30 fw-bold" style="line-height: 20px;">1</span>
                        </div>
                        <div class="mx-2">
                            <h6 class="text-uppercase border-bottom border-secondary">The biggest range</h6>
                            <p class="font-14">In our catalog contains more than 30 thousand items of cosmetic products from over 800 brands.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                <div class="d-flex align-items-center justify-content-between">
                        <div class="bg-white p-3 rounded-circle text-center" style="width: 50px; height: 50px;">
                            <span class="text-dark font-30 fw-bold" style="line-height: 20px;">2</span>
                        </div>
                        <div class="mx-2">
                            <h6 class="text-uppercase border-bottom border-secondary">Free shipping</h6>
                            <p class="font-14">We have organized free shipping to anywhere in the world.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                <div class="d-flex align-items-center justify-content-between">
                        <div class="bg-white p-3 rounded-circle text-center" style="width: 50px; height: 50px;">
                            <span class="text-dark font-30 fw-bold" style="line-height: 20px;">3</span>
                        </div>
                        <div class="mx-2">
                            <h6 class="text-uppercase border-bottom border-secondary">Insurance packages</h6>
                            <p class="font-14">All shipments are insured. In case of loss of the parcel by postal services we do a refund.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('public/assets/images/main-girl.png') }}" alt="icon" class="img-fluid pe-3">
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- footer  --}}

    <footer>

        <div class="container py-5">
            <div class="row g-4">
                <div class="col-lg-3 col-md-3 col-12">
                    <a href="{{ route('home') }}" class="bg-white p-3">
                        <img src="{{asset('public/assets/images/logo.png')}}" alt="logo" class="img-fluid">
                    </a>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><hr></li>
                        <li><a href="#">Privacy and Security</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">User Agreement</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <h6>Top Brand</h6>
                    <ul>
                        <li><a href="#">Clarins</a></li>
                        <li><a href="#">Hermes</a></li>
                        <li><a href="#">EltaMD</a></li>
                        <li><a href="#">Kiehls</a></li>
                        <li><a href="#">Elizabeth Arden</a></li>
                        <li><a href="#">Giorgio Armani</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <h6>Top Categories</h6>
                    <ul>
                        <li><a href="#">Skin Care</a></li>
                        <li><a href="#">Makeup</a></li>
                        <li><a href="#">Hair Car</a></li>
                        <li><a href="#">Perfumes</a></li>
                        <li><a href="#">For Kids</a></li>
                        <li><a href="#">Wellness</a></li>                        
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <h6>Follow Us</h6>
                    <ul>
                        <li><a href="#"><i class="bi bi-twitter twitter-color"></i> Twitter</a></li>
                        <li><a href="#"><i class="bi bi-facebook facebook-color"></i> Facebook</a></li>
                        <li><a href="#"><i class="bi bi-whatsapp whatsapp-color"></i> Whatsapp</a></li>
                        <li><a href="#"><i class="bi bi-linkedin linkedin-color"></i> LinkedIn</a></li>
                        <li><a href="#"><i class="bi bi-instagram instagram-color"></i> Instagram</a></li>
                        <li><a href="#"><i class="bi bi-youtube youtube-color"></i> YouTube</a></li>
                        <li><a href="#"><i class="bi bi-pinterest pinterest-color"></i> Pinterest</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </footer>




    <section class="py-2 bg-dark text-white">
        <div class="container">
            <div class="d-flex justify-content-between copyright">
                <div>
                    <p>Copyright @ {{ now()->year }} Craft Beaufy Mart. All Rights Reserved.</p>
                </div>
                <div>
                    <img src="{{ asset('public/assets/images/payments.webp') }}" alt="payments" class="img-fluid">
                </div>
            </div>
        </div>
    </section>




    <script src="{{ asset('public/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/assets/owl-carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/service.js') }}"></script>
    <script src="{{ asset('public/assets/js/main.js') }}"></script>
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

    @yield('page-script')
</body>

</html>