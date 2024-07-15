<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons Bootstrap 5 -->
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css” />

    <!-- Style form element (button, adding padding, dll) -->
    <link rel=”stylesheet” href=”https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css” integrity=”sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T” crossorigin=”anonymous”>

    <!-- Link style.css -->
    <link rel="stylesheet" href="css/style.css">
    <title>SIRIP PMO | LOGIN</title>
    <script src="https://kit.fontawesome.com/a29b04c384.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Main Container -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!-- Login Container -->
        <div class="row border rounded-5 p-3 shadow box-area" style="background-image: radial-gradient(circle at 67% 83%, hsla(317,0%,96%,0.05) 0%, hsla(317,0%,96%,0.05) 1%,transparent 1%, transparent 5%,transparent 5%, transparent 100%),radial-gradient(circle at 24% 80%, hsla(317,0%,96%,0.05) 0%, hsla(317,0%,96%,0.05) 27%,transparent 27%, transparent 63%,transparent 63%, transparent 100%),radial-gradient(circle at 23% 5%, hsla(317,0%,96%,0.05) 0%, hsla(317,0%,96%,0.05) 26%,transparent 26%, transparent 82%,transparent 82%, transparent 100%),radial-gradient(circle at 21% 11%, hsla(317,0%,96%,0.05) 0%, hsla(317,0%,96%,0.05) 35%,transparent 35%, transparent 45%,transparent 45%, transparent 100%),radial-gradient(circle at 10% 11%, hsla(317,0%,96%,0.05) 0%, hsla(317,0%,96%,0.05) 21%,transparent 21%, transparent 81%,transparent 81%, transparent 100%),radial-gradient(circle at 19% 61%, hsla(317,0%,96%,0.05) 0%, hsla(317,0%,96%,0.05) 20%,transparent 20%, transparent 61%,transparent 61%, transparent 100%),radial-gradient(circle at 13% 77%, hsla(317,0%,96%,0.05) 0%, hsla(317,0%,96%,0.05) 63%,transparent 63%, transparent 72%,transparent 72%, transparent 100%),radial-gradient(circle at 30% 93%, hsla(317,0%,96%,0.05) 0%, hsla(317,0%,96%,0.05) 33%,transparent 33%, transparent 82%,transparent 82%, transparent 100%),linear-gradient(90deg, rgb(22, 176, 207),rgb(99,122,159));">

            <!-- Left Box -->
            <!-- <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box bg-warning"
                ">
                <div class="featured-image mb-3">
                    <img src="css/note.png" class="img-fluid" style="width: 250px;">
                </div>
                <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Silahkan Login</p>
                <small class="text-white text-wrap text-center"
                    style="width: 17rem; font-family: 'Courier New', Courier, monospace;">Untuk bisa mengakses web PPDB</small>
            </div> -->

            <!-- Right Box -->
            <div class="col-md-12 right-box">
                <div class="row align-items-center">
                    <div class="header-text mt-3 mb-1">
                        <h2 class="text-white text-center">SIRIP <span class="rounded shadow px-2"
                        style="background-color: white; color:#637A9F">PMO</span></h2>
                        <p class="text-white text-center">(Sistem Informasi Realisasi Proyek PMO)</p>
                        <!-- <p class="text-warning text-center">Silakan Anda login terlebih dahulu!</p> -->

                    </div>

                    <!-- FORM LOGIN -->
                    <form action="/session/login" method="POST">
                        @csrf
                        <!-- ERROR VALIDATE MESSAGE -->
                        {{-- @if ($errors->has('error'))
                            <div class="alert alert-danger" role="alert">
                                <!-- {{ $errors->first('error') }} -->
                                Username <strong>{{ Session::get('name') }}</strong> tidak valid!
                            </div>
                        @endif --}}
                        <!-- SUCCESS VALIDATE MESSAGE -->
                        {{-- @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif --}}

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                        <input type="text" class="form-control form-control-lg bg-light fs-6" name="name" value="{{ Session::get('name') }}"
                            placeholder="Username" required>
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" class="form-control form-control-lg bg-light fs-6" name="password"
                            placeholder="Password" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="submit" name="submit" class="btn btn-lg btn-warning w-100 fs-6" value="Login">
                    </div>
                    </form>
                </div>
                <!-- <br> -->
                    <p class="text-center text-white login-box-msg">Copyright © 2024 PT PAL Indonesia </p>
            </div>
        </div>
    </div>

    @include('sweetalert::alert')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

</body>
</html>
