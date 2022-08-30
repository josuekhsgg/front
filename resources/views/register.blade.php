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
        Pago 360%
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('/assets/css/argon-dashboard.css?v=2.0.4') }}" rel="stylesheet" />
</head>

<body class="">
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container" style="max-width: 100%">
                    <div class="row">
                        <div class="col-xl-6 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-start">
                                    <h4 class="font-weight-bolder">Registro</h4>
                                    <p class="mb-0">Datos basicos</p>
                                </div>
                                <div class="card-body">
                                    <form role="form">
                                        <div class="row mb-3">
                                            <div class="col-xl-6 col-lg-6 col-md-12">
                                                <input type="text" class="form-control form-control-lg"
                                                    placeholder="Nombre" aria-label="Nombre">
                                            </div>
                                            <div class="col ">
                                                <input type="text" class="form-control form-control-lg"
                                                    placeholder="Representante legal" aria-label="Representante legal">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-xl-6 col-lg-6 col-md-12">
                                                <input type="text" class="form-control form-control-lg"
                                                    placeholder="Rif" aria-label="Rif" aria-describedby="rifHelpBlock">
                                                <div id="rifHelpBlock" class="form-text">
                                                    Rif (Debe comenzar con una letra y tener 9 digitos si los digitos
                                                    son menores a 9 colocar ceros al principio, ejemplo V012345678)
                                                </div>

                                            </div>
                                            <div class="col ">
                                                <input type="text" class="form-control form-control-lg"
                                                    placeholder="Ramo" aria-label="Ramo">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-xl-6 col-lg-6 col-md-12">
                                                <input type="email" class="form-control form-control-lg"
                                                    placeholder="Email" aria-label="Email">
                                            </div>
                                            <div class="col ">
                                                <input type="text" class="form-control form-control-lg"
                                                    placeholder="Telefono local" aria-label="Telefono local">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-xl-6 col-lg-6 col-md-12">
                                                <input type="text" class="form-control form-control-lg"
                                                    placeholder="Telefono celular" aria-label="Telefono celular">
                                            </div>
                                            <div class="col ">
                                                <input type="text" class="form-control form-control-lg"
                                                    placeholder="Usuario" aria-label="Usuario">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-xl-6 col-lg-6 col-md-12">
                                                <input type="text" class="form-control form-control-lg"
                                                    placeholder="Contraseña" aria-label="Contraseña">
                                            </div>
                                            <div class="col ">
                                                <input type="text" class="form-control form-control-lg"
                                                    placeholder="Confirmar contraseña"
                                                    aria-label="Confirmar contraseña">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <p class="mb-0">Ubicacion</p>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-xl-6 col-lg-6 col-md-12">
                                                <input type="text" class="form-control form-control-lg"
                                                    placeholder="Estado" aria-label="Estado">
                                            </div>
                                            <div class="col ">
                                                <input type="text" class="form-control form-control-lg"
                                                    placeholder="Parroquia" aria-label="Parroquia">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-xl-6 col-lg-6 col-md-12">
                                                <input type="text" class="form-control form-control-lg"
                                                    placeholder="Calle/Punto Ref" aria-label="Calle/Punto Ref">
                                            </div>
                                            <div class="col ">
                                                <input type="text" class="form-control form-control-lg"
                                                    placeholder="Codigo postal" aria-label="Codigo postal">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="button"
                                                class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Enviar</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        Ya tienes una cuenta?
                                        <a href="{{ route('login') }}"
                                            class="text-primary text-gradient font-weight-bold">Inicia sesion</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                                style="background-image: url('https://cdn.pixabay.com/photo/2016/06/25/13/00/purse-1478852_960_720.jpg');
          background-size: cover;">
                                <span class="mask bg-gradient-primary opacity-6"></span>
                                <h4 class="mt-5 text-white font-weight-bolder position-relative">"La atencion es la
                                    nueva moneda"</h4>
                                <p class="text-white position-relative">texto adicional.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--   Core JS Files   -->
    <script src="{{ asset('/assets/js/core/popper.min.js') }}"></script>
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
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('/assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
</body>

</html>
