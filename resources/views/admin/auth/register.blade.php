<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css">
    <style>
        .iti.iti--allow-dropdown {
            width: 100%
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <form id="frm" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-9 mt-5 mb-5">
                    <div class="card shadow-lg p-5">

                        <div class="text-center ">
                            <img src="{{ url('public/assets/images/logo.png') }}" width="160">

                        </div>
                        <h4 class="mb-4 text-center">Register</h4>
                        <hr>
                        <div class="row mt-3">
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Name"
                                    value="{{ old('name') }}" oninput="this.value = this.value.toUpperCase()"
                                    required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                    placeholder="Email" required>
                            </div>


                            <div class="col-md-6 mb-3">
                                <input type="password" placeholder="Password" class="form-control" name="password"
                                    required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <input type="password" placeholder="Confirm Password" class="form-control"
                                    name="password_confirmation" required>
                            </div>
                        </div>

                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="mt-3 text-center">
                                    <span class="text-danger mb-3"> {{ $error }}</span>
                                </div>
                            @endforeach
                        @endif
                        <div class="mt-3 text-center">
                            <button id="btnSubmit" style="width: 200px;"
                                class="btn btn-success btn-block"><b>Register</b></button>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
    crossorigin="anonymous"></script>




</html>
