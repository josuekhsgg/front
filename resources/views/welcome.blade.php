@extends('template.layout')
@section('container')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6 class="float-start">tabla demo</h6>
                        <button class="float-end btn btn-icon btn-3 bg-gradient-success" type="button" data-bs-toggle="modal"
                            data-bs-target="#exampleModalMessage">
                            <span class="btn-inner--icon"><i class="ni ni-zoom-split-in"></i></span>
                            <span class="btn-inner--text">Agregar</span>
                        </button>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-3">
                            {{-- <table class="table align-items-center mb-0"> --}}
                            <table id="example" class="table align-items-center mb-0" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            ID Producto</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Nombre</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Estatus</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Tipo</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">John Michael</h6>
                                                    <p class="text-xs text-secondary mb-0">john@creative-tim.com
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Manager</p>
                                            <p class="text-xs text-secondary mb-0">Organization</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success">ACTIVO</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <button class="btn btn-icon btn-2 bg-gradient-info"
                                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"
                                                type="button">
                                                <span class="btn-inner--icon">
                                                    <span class="material-icons">
                                                        edit_note
                                                    </span>
                                                </span>
                                            </button>
                                            <button class="btn btn-icon btn-2 bg-gradient-danger"
                                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"
                                                type="button">
                                                <span class="btn-inner--icon">
                                                    <span class="material-icons">
                                                        delete_forever
                                                    </span>
                                                </span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Alexa Liras</h6>
                                                    <p class="text-xs text-secondary mb-0">alexa@creative-tim.com
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Programator</p>
                                            <p class="text-xs text-secondary mb-0">Developer</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-warning">INACTIVO</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <button class="btn btn-icon btn-2 bg-gradient-info"
                                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"
                                                type="button">
                                                <span class="btn-inner--icon">
                                                    <span class="material-icons">
                                                        edit_note
                                                    </span>
                                                </span>
                                            </button>
                                            <button class="btn btn-icon btn-2 bg-gradient-danger"
                                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"
                                                type="button">
                                                <span class="btn-inner--icon">
                                                    <span class="material-icons">
                                                        delete_forever
                                                    </span>
                                                </span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Laurent Perrier</h6>
                                                    <p class="text-xs text-secondary mb-0">laurent@creative-tim.com
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Executive</p>
                                            <p class="text-xs text-secondary mb-0">Projects</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success">ACTIVO</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">19/09/17</span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <button class="btn btn-icon btn-2 bg-gradient-info"
                                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"
                                                type="button">
                                                <span class="btn-inner--icon">
                                                    <span class="material-icons">
                                                        edit_note
                                                    </span>
                                                </span>
                                            </button>
                                            <button class="btn btn-icon btn-2 bg-gradient-danger"
                                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"
                                                type="button">
                                                <span class="btn-inner--icon">
                                                    <span class="material-icons">
                                                        delete_forever
                                                    </span>
                                                </span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Michael Levi</h6>
                                                    <p class="text-xs text-secondary mb-0">michael@creative-tim.com
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Programator</p>
                                            <p class="text-xs text-secondary mb-0">Developer</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success">ACTIVO</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">24/12/08</span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <button class="btn btn-icon btn-2 bg-gradient-info"
                                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"
                                                type="button">
                                                <span class="btn-inner--icon">
                                                    <span class="material-icons">
                                                        edit_note
                                                    </span>
                                                </span>
                                            </button>
                                            <button class="btn btn-icon btn-2 bg-gradient-danger"
                                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"
                                                type="button">
                                                <span class="btn-inner--icon">
                                                    <span class="material-icons">
                                                        delete_forever
                                                    </span>
                                                </span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Richard Gran</h6>
                                                    <p class="text-xs text-secondary mb-0">richard@creative-tim.com
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Manager</p>
                                            <p class="text-xs text-secondary mb-0">Executive</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-warning">INACTIVO</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">04/10/21</span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <button class="btn btn-icon btn-2 bg-gradient-info"
                                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"
                                                type="button">
                                                <span class="btn-inner--icon">
                                                    <span class="material-icons">
                                                        edit_note
                                                    </span>
                                                </span>
                                            </button>
                                            <button class="btn btn-icon btn-2 bg-gradient-danger"
                                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"
                                                type="button">
                                                <span class="btn-inner--icon">
                                                    <span class="material-icons">
                                                        delete_forever
                                                    </span>
                                                </span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Miriam Eric</h6>
                                                    <p class="text-xs text-secondary mb-0">miriam@creative-tim.com
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Programtor</p>
                                            <p class="text-xs text-secondary mb-0">Developer</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-warning">INACTIVO</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">14/09/20</span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <button class="btn btn-icon btn-2 bg-gradient-info"
                                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"
                                                type="button">
                                                <span class="btn-inner--icon">
                                                    <span class="material-icons">
                                                        edit_note
                                                    </span>
                                                </span>
                                            </button>
                                            <button class="btn btn-icon btn-2 bg-gradient-danger"
                                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"
                                                type="button">
                                                <span class="btn-inner--icon">
                                                    <span class="material-icons">
                                                        delete_forever
                                                    </span>
                                                </span>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- modales --}}
        <!-- Modal -->
        <div class="modal fade" id="exampleModalMessage" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Crear nuevo registro</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="recipient-tipo" class="col-form-label">Tipo de Producto:</label>
                                <select class="form-select" aria-label="Default select example" id="recipient-tipo">
                                    <option selected>Seleccione</option>
                                    <option value="1">Servicios</option>
                                    <option value="2">Recargas</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nombre:</label>
                                <input type="text" class="form-control" value="demo" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-estatus" class="col-form-label">Estatus:</label>
                                <select class="form-select" aria-label="Default select example" id="recipient-estatus">
                                    <option selected>Seleccione</option>
                                    <option value="1">activo</option>
                                    <option value="2">inactivo</option>
                                    <option value="3">bloqueado</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="recipient-monto" class="col-form-label">Monto:</label>
                                <input type="number" min="0" class="form-control" value="0"
                                    id="recipient-monto">
                            </div>
                            {{-- <div class="form-group">
                                <label for="message-text" class="col-form-label">Message:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div> --}}
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-gradient-danger" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn bg-gradient-success">Send message</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
