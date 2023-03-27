<!DOCTYPE html>
<html lang="en">

<head>
    <title>ITECH Help Desk | login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo_itech.png') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('{{ asset('images/1234.jpeg') }}')">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url({{ asset('images/logo1.png') }});">
                </div>
                @if (session('error'))
                    <div class="alert alert-danger">
                        <b>Opps!</b> {{ session('error') }}
                    </div>
                @endif
                <form class="login100-form" action="{{ route('proses.register') }}" method="post">
                    @csrf
                    <div class="wrap-input100 validate-input m-b-18">
                        <input type="text" class="form-control" placeholder="Username" required name="username"
                            value="" />
                    </div>
                    <div class="wrap-input100 validate-input m-b-18">
                        <input type="email" class="form-control" placeholder="Email" required name="email"
                            value="{{ Session::get('email') }}" />
                    </div>
                    <div class="wrap-input100 validate-input m-b-18">
                        <input type="text" class="form-control" placeholder="Phone" required name="phone"
                            value="" />
                    </div>
                    <div class="wrap-input100 validate-input m-b-18">
                        <select id="inputState" class="input100 form-control" name="location">
                            <option>Choose location</option>
                            <option selected>Kantor Cabang Bakauheni, Provinsi Lampung</option>
                            <option>Kantor Cabang Ambon, Provinsi Maluku</option>
                            <option>Kantor Cabang Bajoe, Provinsi Sulawesi Selatan</option>
                            <option>Kantor Cabang Banda Aceh, Provinsi Aceh</option>
                            <option>Kantor Cabang Balikpapan, Provinsi Kalimantan Timur</option>
                            <option>Kantor Cabang Bangka, Provinsi Kepulauan Bangka Belitung</option>
                            <option>Kantor Cabang Bau-bau, Provinsi Sulawesi Tenggara</option>
                            <option>Kantor Cabang Bengkulu, Provinsi Bengkulu</option>
                            <option>Kantor Cabang Biak,Provinsi Papua</option>
                            <option>Kantor Cabang Bitung, Provinsi Sulawesi Utara</option>
                            <option>Kantor Cabang Jepara, Provinsi Jawa Tengah</option>
                            <option>Kantor Cabang Kayangan, Provinsi Nusa Tenggara Barat</option>
                            <option>Kantor Cabang Ketapang, Provinsi Jawa Timur</option>
                            <option>Kantor Cabang Kupang, Provinsi Nusa Tenggara Timur</option>
                            <option>Kantor Cabang Lembar, Provinsi Nusa Tenggara Barat</option>
                            <option>Kantor Cabang Luwuk, Provinsi Sulawesi Tengah</option>
                            <option>Kantor Cabang Merak, Provinsi Banten</option>
                            <option>Kantor Cabang Merauke, Provinsi Papua</option>
                            <option>Kantor Cabang Padang, Provinsi Sumatera Barat</option>
                        </select>
                    </div>


                    <div class="wrap-input100 form-group m-b-15">
                        <input id="password-field" type="password" class="form-control" placeholder="Password"
                            name="password" required />
                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>

                    <div class="wrap-input100 form-group m-b-15">
                        <input id="password-field-conf" type="password" placeholder="Confirm Password"
                            class="form-control @error('password') is-invalid @enderror" name="password_confirmation"
                            required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        <span toggle="#password-field-conf" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>
                   <div class="flex-sb-m w-full p-b-30">
                        <div>
                            <a href="{{ route('login') }}" class="txt1">
                                i have account
                            </a>
                        </div>
                    </div>
                    <div class="form-group container-login100-form-btn">

                        <button class="login100-form-btn">
                            Register
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/countdowntime/countdowntime.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
