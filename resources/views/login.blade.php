<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Pago 360
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('/assets/css/nucleo-svg.css') }}.." rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('/assets/css/argon-dashboard.css?v=2.0.4') }}" rel="stylesheet" />
</head>

<body class="" onload="Captchas();">
    <!-- End Navbar -->
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
            style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;">
            <span class="mask bg-gradient-dark opacity-6"></span>
        </div>
        <div class="container">
            <div class="row mt-lg-n12 mt-md-n11 mt-n10 justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card z-index-0">
                        <div class="card-header text-center pt-2 pb-2">
                            <img src="{{ asset('/assets/img/logo.png') }}" class="img-fluid w-50" alt="">
                            {{-- <h5>Bienvenido a Pago 360</h5> --}}
                        </div>
                        <div class="card-body pt-2">
                            <form role="form">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Usuario"
                                        aria-label="Usuario">
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" placeholder="Contraseña"
                                        aria-label="clave">
                                    <div class="row">
                                        <div class="col">
                                            <p class="text-sm mt-3 mb-0 text-start"><a
                                                    href="{{ route('recover', ['motivo' => 'contraseña']) }}"
                                                    class="text-dark font-weight-bolder">Olvidaste tu contraseña?</a>
                                            </p>
                                        </div>
                                        <div class="col">
                                            <p class="text-sm mt-3 mb-0 text-end"><a
                                                    href="{{ route('recover', ['motivo' => 'usuario']) }}"
                                                    class="text-dark font-weight-bolder">Olvidaste
                                                    tu usuario? </a></p>
                                        </div>
                                    </div>

                                </div>
                                <div class="row flex-parent justify-content-center mb-3">
                                    <div class="col-xl-7 col-md-8">
                                        <canvas id="mainCaptcha"> </canvas>
                                    </div>
                                    <div class="col-1" style="cursor: pointer">
                                        <img id="refresh" src="{{ asset('/assets/img/centros_recarga.svg') }}"
                                            width="20" value="Refresh" class="pt-2"
                                            onclick="Captcha('mainCaptcha');" />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="txtCode"
                                        placeholder="Ingrese el codigo" aria-label="codigo">
                                </div>
                                <div class="text-center">
                                    <button type="button"
                                        class="btn bg-gradient-dark w-100 my-4 mb-2">Ingresar</button>
                                </div>
                                <p class="text-sm mt-3 mb-0">No posees una cuenta? <a href="{{ route('register') }}"
                                        class="text-dark font-weight-bolder">Registrate</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <!--   Core JS Files   -->
    <script src="{{ asset('/assets/js/core/popper.min.js') }}.."></script>
    <script src="{{ asset('/assets/js/captcha.js') }}"></script>
    <script src="{{ asset('/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }

        function Captchas() {
            Captcha('mainCaptcha');
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('/assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
</body>

</html>
