@section('menu_admin')
    <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="#">
                <img src="{{ asset('/assets/img/logo.png') }}" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold">Pago 360</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto h-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="../pages/tables.html">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <span class="material-icons md-24 text-primary text-md opacity-10">home</span>
                        </div>
                        <span class="nav-link-text ms-1">Inicio</span>
                    </a>
                </li>
                <li class="nav-item">
                    <div class="nav-link">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            {{-- <i class="ni ni-envelope-open-dollar text-primary text-md opacity-10"></i> --}}
                            {{-- <i class="fa-solid fa-cat"></i> --}}
                            <span class="material-icons md-24 text-success text-md opacity-10">real_estate_agent</span>
                        </div>
                        <a data-bs-toggle="collapse" href="#collapseVentas" role="button" aria-expanded="false"
                            aria-controls="collapseVentas">
                            <span class="nav-link-text ms-1 dropdown-toggle">Transacciones</span>
                        </a>
                    </div>
                    <div class="collapse" id="collapseVentas">
                        <ul class="navbar-nav p-1">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Asignar Recargas a Local</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Asignar Servicios a Local</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="nav-link">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            {{-- <i class="ni ni-tv-2 text-primary text-md opacity-10"></i> --}}
                            <span class="material-icons md-24 text-danger text-md opacity-10">shopping_cart</span>
                        </div>
                        <a data-bs-toggle="collapse" href="#collapseCompras" role="button" aria-expanded="false"
                            aria-controls="collapseCompras">
                            <span class="nav-link-text ms-1 dropdown-toggle">Compras</span>
                        </a>
                    </div>
                    <div class="collapse" id="collapseCompras">
                        <ul class="navbar-nav p-1">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Comprar Recargas</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <div class="nav-link">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            {{-- <i class="ni ni-tv-2 text-primary text-md opacity-10"></i> --}}
                            <span class="material-icons md-24 text-warning text-md opacity-10">receipt_long</span>
                        </div>
                        <a data-bs-toggle="collapse" href="#collapseFacturacion" role="button" aria-expanded="false"
                            aria-controls="collapseFacturacion">
                            <span class="nav-link-text ms-1 dropdown-toggle">Facturacion</span>
                        </a>
                    </div>
                    <div class="collapse" id="collapseFacturacion">
                        <ul class="navbar-nav p-1">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Nota de Entrega al local</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="nav-link">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            {{-- <i class="ni ni-tv-2 text-primary text-md opacity-10"></i> --}}
                            <span class="material-icons md-24 text-warning text-md opacity-10">summarize</span>
                        </div>
                        <a data-bs-toggle="collapse" href="#collapseReportes" role="button" aria-expanded="false"
                            aria-controls="collapseReportes">
                            <span class="nav-link-text ms-1 dropdown-toggle">Reportes</span>
                        </a>
                    </div>
                    <div class="collapse" id="collapseReportes">
                        <ul class="navbar-nav p-1">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Por estado</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Por localidad</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Por forma de pagos</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Por operadora</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Por cajas</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="nav-link">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <span class="material-icons md-24 text-primary text-md opacity-10">admin_panel_settings</span>
                        </div>
                        <a data-bs-toggle="collapse" href="#collapseFacturacion" role="button" aria-expanded="false"
                            aria-controls="collapseFacturacion">
                            <span class="nav-link-text ms-1 dropdown-toggle">Administracion</span>
                        </a>
                    </div>
                    <div class="collapse" id="collapseFacturacion">
                        <ul class="navbar-nav p-1">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Facturacion</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Conciliacion</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Balances</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Reglas de negocio</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Administracion</h6>
                </li>
                <li class="nav-item">
                    <div class="nav-link">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <span class="material-icons md-24 text-primary text-md opacity-10">manage_accounts</span>
                        </div>
                        <a data-bs-toggle="collapse" href="#collapseUsuario" role="button" aria-expanded="false"
                            aria-controls="collapseUsuario">
                            <span class="nav-link-text ms-1 dropdown-toggle">Usuarios</span>
                        </a>
                    </div>
                    <div class="collapse" id="collapseUsuario">
                        <ul class="navbar-nav p-1">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Crear Usuario</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Consultar usuario</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Actualizar usuario</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Inactivar usuario</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Cambiar contraseña</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
@endsection

@section('menu_gerente')
    <aside
        class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="#">
                <img src="{{ asset('/assets/img/logo.png') }}" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold">Pago 360</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto h-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="../pages/tables.html">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <span class="material-icons md-24 text-primary text-md opacity-10">home</span>
                        </div>
                        <span class="nav-link-text ms-1">Inicio</span>
                    </a>
                </li>
                <li class="nav-item">
                    <div class="nav-link">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <span class="material-icons md-24 text-success text-md opacity-10">real_estate_agent</span>
                        </div>
                        <a data-bs-toggle="collapse" href="#collapseVentas" role="button" aria-expanded="false"
                            aria-controls="collapseVentas">
                            <span class="nav-link-text ms-1 dropdown-toggle">Transacciones</span>
                        </a>
                    </div>
                    <div class="collapse" id="collapseVentas">
                        <ul class="navbar-nav p-1">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Asignar Recargas a vendedor</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Asignar Servicios a vendedor</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="nav-link">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            {{-- <i class="ni ni-tv-2 text-primary text-md opacity-10"></i> --}}
                            <span class="material-icons md-24 text-danger text-md opacity-10">shopping_cart</span>
                        </div>
                        <a data-bs-toggle="collapse" href="#collapseCompras" role="button" aria-expanded="false"
                            aria-controls="collapseCompras">
                            <span class="nav-link-text ms-1 dropdown-toggle">Compras</span>
                        </a>
                    </div>
                    <div class="collapse" id="collapseCompras">
                        <ul class="navbar-nav p-1">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Comprar Billetera</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="nav-link">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            {{-- <i class="ni ni-tv-2 text-primary text-md opacity-10"></i> --}}
                            <span class="material-icons md-24 text-warning text-md opacity-10">summarize</span>
                        </div>
                        <a data-bs-toggle="collapse" href="#collapseReportes" role="button" aria-expanded="false"
                            aria-controls="collapseReportes">
                            <span class="nav-link-text ms-1 dropdown-toggle">Reportes</span>
                        </a>
                    </div>
                    <div class="collapse" id="collapseReportes">
                        <ul class="navbar-nav p-1">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Por fecha</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Por vendedor</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Por forma de pagos</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Por operadora</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Por cajas</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="nav-link">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <span class="material-icons md-24 text-primary text-md opacity-10">admin_panel_settings</span>
                        </div>
                        <a data-bs-toggle="collapse" href="#collapseFacturacion" role="button" aria-expanded="false"
                            aria-controls="collapseFacturacion">
                            <span class="nav-link-text ms-1 dropdown-toggle">Administracion</span>
                        </a>
                    </div>
                    <div class="collapse" id="collapseFacturacion">
                        <ul class="navbar-nav p-1">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Facturacion</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Conciliacion</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Balances</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Cerrar cajas</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Administracion</h6>
                </li>
                <li class="nav-item">
                    <div class="nav-link">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <span class="material-icons md-24 text-primary text-md opacity-10">manage_accounts</span>
                        </div>
                        <a data-bs-toggle="collapse" href="#collapseUsuario" role="button" aria-expanded="false"
                            aria-controls="collapseUsuario">
                            <span class="nav-link-text ms-1 dropdown-toggle">Vendedores</span>
                        </a>
                    </div>
                    <div class="collapse" id="collapseUsuario">
                        <ul class="navbar-nav p-1">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Crear vendedor</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Consultar vendedor</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Actualizar vendedor</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Inactivar vendedor</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Cambiar contraseña</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
@endsection

@section('menu_vendedor')
    <aside
        class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="#">
                <img src="{{ asset('/assets/img/logo.png') }}" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold">Pago 360</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto h-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="../pages/tables.html">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <span class="material-icons md-24 text-primary text-md opacity-10">home</span>
                        </div>
                        <span class="nav-link-text ms-1">Inicio</span>
                    </a>
                </li>
                <li class="nav-item">
                    <div class="nav-link">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <span class="material-icons md-24 text-success text-md opacity-10">real_estate_agent</span>
                        </div>
                        <a data-bs-toggle="collapse" href="#collapseVentas" role="button" aria-expanded="false"
                            aria-controls="collapseVentas">
                            <span class="nav-link-text ms-1 dropdown-toggle">Transacciones</span>
                        </a>
                    </div>
                    <div class="collapse" id="collapseVentas">
                        <ul class="navbar-nav p-1">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Recargar</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Pagar servicios</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="nav-link">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            {{-- <i class="ni ni-tv-2 text-primary text-md opacity-10"></i> --}}
                            <span class="material-icons md-24 text-warning text-md opacity-10">summarize</span>
                        </div>
                        <a data-bs-toggle="collapse" href="#collapseReportes" role="button" aria-expanded="false"
                            aria-controls="collapseReportes">
                            <span class="nav-link-text ms-1 dropdown-toggle">Reportes</span>
                        </a>
                    </div>
                    <div class="collapse" id="collapseReportes">
                        <ul class="navbar-nav p-1">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Consultar balances</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-calendar-grid-58 text-warning text-md opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Consultar transacciones</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
@endsection
