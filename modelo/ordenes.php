<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Gestor de Puertos</title>
    <link rel="icon" href="../vista/img/1.ico">
    <link rel="stylesheet" href="../vista/css/bootstrap.css">
    <link rel="stylesheet" href="../vista/css/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../vista/css/sweetalert2.css">
</head>

<body>

    <div id="app">

        <!--Bootstrap NAV-->
        <nav class="navbar navbar-expand-lg bg-secondary ">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="/puerto/principal.html">🚢 SGP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                📑 Despacho
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="../modelo/ordenes.php">Creacion de Orden</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="../modelo/espera.php">Espera en Patio</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="../modelo/muelle_espera.php">Espera Muelle</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="../modelo/carga.php">Carga</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="../modelo/despacho.php">Despacho</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="../modelo/bascula_salida.php">Pesaje Salida</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="../modelo/salida.php">Salida de Puerto</a></li>
                            </ul>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                🖨 Informes
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="../modelo/dashboard.php">DashBoard</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="../modelo/qrlotes.php">QR por Lotes</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="../modelo/info_unidades.php">Unidades Despachadas</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="../modelo/info_empresa.php">Por Empresa</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="../modelo/info_buques.php">Buques</a></li>
                            </ul>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                ⚙️ Configuracion
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="../modelo/buques.php">Buques</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="../modelo/empresas.php">Empresas</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="../modelo/usuarios.php">Usuarios</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="../modelo/torres.php">Torres de Carga</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="../modelo/aparcamientos.php">Aparcamientos</a></li> 
                            </ul>
                          </li>
                    </ul>
                    <button class="btn btn-outline-danger border-white" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Sesion" v-on:click="MostrarUsuario()">🧑🏻‍💻 </button>
                </div>
            </div>
        </nav>

        <!--Bootstrap NAV -->
        <div class="imagen">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-outline-danger me-2" v-on:click="QR_Modal" title="Imprimir QR">🪪</button>
                <button class="btn btn-outline-danger" v-on:click="Reload()" title="Nueva Orden">🔄️</button>
                <label><strong class="text-black fs-5 me-4">📓 ORDENES - ENTRADA A PUERTO</strong></label>
            </div>
        </div>

        <!-- USUARIO ACTIVO MODAL -->

        <div class="modal" tabindex="-1" id="exampleModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Usuario Activo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <h1>👤</h1><br />
                            <table class="table table-hover">
                                <thead>
                                    <tr class="table-info">
                                        <th scope="col">Nombre</th>
                                        <th scope="col">CI</th>
                                        <th scope="col">Nivel</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="User in User" :key="User.id">
                                        <td>{{User.nombre}}</td>
                                        <td>{{User.cedula}}</td>
                                        <td>{{User.nivel}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" v-on:click="CerrarSesion()" data-bs-dismiss="modal">🔵
                            Cerrar Sesion</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">❌ Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <br />

        <div class="text-center" id="Lista">
            <!-- CUERPO DEL PROGRAMA -->

            <div class="modal" tabindex="-1" id="ModificarUsuario">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title">
                                <div class="h4 pb-2 mb-2 text-light border-danger">
                                    📓 Ordenes de Carga - Modificar
                                </div>
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="text-center">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="table-info">Placa Unidad</th>
                                            <td>
                                                <input type="text" v-model="TxtPlacaU2" id="TxtPlacaU2" class="form-control me-1 border-danger" placeholder="Placa Unidad" maxlength="50" v-on:keypress="BuscarU" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Placa Chuto</th>
                                            <td>
                                                <input type="text" v-model="TxtPlacaC2" id="TxtPlacaC2" class="form-control me-1 border-danger" placeholder="Placa Chuto" maxlength="50" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Nro de Orden</th>
                                            <td>
                                                <input type="text" v-model="TxtNroOrden2" id="TxtNroOrden2" class="form-control me-1 border-danger" placeholder="" maxlength="50" disabled />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Chofer</th>
                                            <td>
                                                <input type="text" v-model="TxtChofer2" id="TxtChofer2" class="form-control me-1 border-danger" placeholder="Nombre Apellido" maxlength="50" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">N# C.I. Chofer</th>
                                            <td>
                                                <input type="text" v-model="TxtCIChofer2" id="TxtCIChofer2" class="form-control me-1 border-danger" placeholder="N# de CI" maxlength="50" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Empresa</th>
                                            <td>
                                                <select v-model="TxtEmpresa2" id="TxtEmpresa2" class="form-select border-danger" aria-label="Default select example" placeholder="Empresas" v-on:click="Rif2()">
                                                    <option v-bind:value="Registro6.empresa" v-for="Registro2 in Registro6" :key="Registro6.id">{{
                                                            Registro2.empresa }}</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">N# RIF Empresa</th>
                                            <td>
                                                <input type="text" v-model="TxtRif2" id="TxtRif2" class="form-control me-1 border-danger" placeholder="N# RIF Empresa" maxlength="50" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Ayudante</th>
                                            <td>
                                                <input type="text" v-model="TxtAyudante2" id="TxtAyudante2" class="form-control me-1 border-danger" placeholder="Ayudante" maxlength="50" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">N# CI Ayudante</th>
                                            <td>
                                                <input type="text" v-model="TxtCIAyudante2" id="TxtCIAyudante2" class="form-control me-1 border-danger" placeholder="CI Ayudante" maxlength="50" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Buque</th>
                                            <td>
                                                <select v-model="TxtBuque2" id="TxtBuque2" class="form-select border-danger" aria-label="Default select example" placeholder="Buque" v-on:click="DatosT2()">
                                                    <option v-bind:value="Registro2.descripcion" v-for="Registro2 in Registro2" :key="Registro2.id">{{
                                                                    Registro2.descripcion }}</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Muelle</th>
                                            <td>
                                                <input type="text" v-model="TxtMuelle2" id="TxtCIAyudante2" class="form-control me-1 border-danger" placeholder="Muelle" maxlength="50" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Torre</th>
                                            <td>
                                                <input type="text" v-model="TxtTorre2" id="TxtTorre2" class="form-control me-1 border-danger" placeholder="Torre" maxlength="50" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Carga</th>
                                            <td>
                                                <input type="text" v-model="TxtCarga2" id="TxtCarga2" class="form-control me-1 border-danger" placeholder="Carga" maxlength="50" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Destino de la Carga</th>
                                            <td>
                                                <input type="text" v-model="TxtDestino2" id="TxtDestino2" class="form-control me-1 border-danger" placeholder="Destino" maxlength="50" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Peso Orden</th>
                                            <td>
                                                <input type="text" v-model="TxtPesoO2" id="TxtPesoO2" class="form-control me-1 border-danger" placeholder="Peso Orden" maxlength="50" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Estacionamiento</th>
                                            <td>
                                                <input type="text" v-model="TxtEstacionamiento2" id="TxtEstacionamiento2" class="form-control me-1 border-danger" placeholder="Estacionamiento" maxlength="50" disabled />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Orden de Llegada</th>
                                            <td>
                                                <input type="text" v-model="TxtLlegada2" id="TxtLlegada2" class="form-control me-1 border-danger" placeholder="Orden de Llegada" maxlength="50" disabled />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Fecha Entrada</th>
                                            <td>
                                                <input type="text" v-model="TxtFechaE2" id="TxtFechaE2" class="form-control me-1 border-danger" placeholder="Orden de Llegada" maxlength="50" disabled />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Hora Entrada</th>
                                            <td>
                                                <input type="text" v-model="TxtFechaH2" id="TxtFechaH2" class="form-control me-1 border-danger" placeholder="Orden de Llegada" maxlength="50" disabled />
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="Id1" v-model="Id1">
                            <button type="button" class="btn btn-outline-primary" v-on:click="ActualizarRegistro()" data-bs-dismiss="modal">💾 Guardar</button>
                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">❌ Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!--NODAL PARA AGREGAR un Registro-->

            <div class="modal" tabindex="-1" id="CrearUsuario">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title">
                                <div class="h4 pb-2 mb-2 text-light border-danger">
                                    📓 Ordenes de Carga - Crear
                                </div>
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="text-center">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="table-info">Placa Unidad</th>
                                            <td>
                                                <input type="text" v-model="TxtPlacaU1" id="TxtPlacaU1" class="form-control me-1 border-danger" placeholder="Placa Unidad" maxlength="50" v-on:keypress="BuscarU" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Placa Chuto</th>
                                            <td>
                                                <input type="text" v-model="TxtPlacaC1" id="TxtPlacaC1" class="form-control me-1 border-danger" placeholder="Placa Chuto" maxlength="50" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Nro de Orden</th>
                                            <td>
                                                <input type="text" v-model="TxtNroOrden1" id="TxtNroOrden1" class="form-control me-1 border-danger" placeholder="" maxlength="50" disabled />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Chofer</th>
                                            <td>
                                                <input type="text" v-model="TxtChofer1" id="TxtChofer1" class="form-control me-1 border-danger" placeholder="Nombre Apellido" maxlength="50" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">N# C.I. Chofer</th>
                                            <td>
                                                <input type="text" v-model="TxtCIChofer1" id="TxtCIChofer1" class="form-control me-1 border-danger" placeholder="N# de CI" maxlength="50" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Empresa</th>
                                            <td>
                                                <select v-model="TxtEmpresa1" id="TxtEmpresa1" class="form-select border-danger" aria-label="Default select example" placeholder="Empresas" v-on:click="Rif1()">
                                                    <option v-bind:value="Registro6.empresa" v-for="Registro2 in Registro6" :key="Registro6.id">{{
                                                            Registro2.empresa }}</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">N# RIF Empresa</th>
                                            <td>
                                                <input type="text" v-model="TxtRif1" id="TxtRif1" class="form-control me-1 border-danger" placeholder="N# RIF Empresa" maxlength="50" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Ayudante</th>
                                            <td>
                                                <input type="text" v-model="TxtAyudante1" id="TxtAyudante1" class="form-control me-1 border-danger" placeholder="Ayudante" maxlength="50" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">N# CI Ayudante</th>
                                            <td>
                                                <input type="text" v-model="TxtCIAyudante1" id="TxtCIAyudante1" class="form-control me-1 border-danger" placeholder="CI Ayudante" maxlength="50" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Buque</th>
                                            <td>
                                                <select v-model="TxtBuque1" id="TxtBuque1" class="form-select border-danger" aria-label="Default select example" placeholder="Buque" v-on:click="DatosT()">
                                                    <option v-bind:value="Registro2.descripcion" v-for="Registro2 in Registro2" :key="Registro2.id">{{
                                                                Registro2.descripcion }}</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Muelle</th>
                                            <td>
                                                <input type="text" v-model="TxtMuelle1" id="TxtCIAyudante1" class="form-control me-1 border-danger" placeholder="Muelle" maxlength="50" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Torre</th>
                                            <td>
                                                <input type="text" v-model="TxtTorre1" id="TxtTorre1" class="form-control me-1 border-danger" placeholder="Torre" maxlength="50" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Carga</th>
                                            <td>
                                                <input type="text" v-model="TxtCarga1" id="TxtCarga1" class="form-control me-1 border-danger" placeholder="Carga" maxlength="50" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Destino de la Carga</th>
                                            <td>
                                                <input type="text" v-model="TxtDestino1" id="TxtDestino1" class="form-control me-1 border-danger" placeholder="Destino" maxlength="50" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Peso Orden</th>
                                            <td>
                                                <input type="text" v-model="TxtPesoO1" id="TxtPesoO1" class="form-control me-1 border-danger" placeholder="Peso Orden" maxlength="50" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Estacionamiento</th>
                                            <td>
                                                <input type="text" v-model="TxtEstacionamiento1" id="TxtEstacionamiento1" class="form-control me-1 border-danger" placeholder="Estacionamiento" maxlength="50" disabled />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Orden de Llegada</th>
                                            <td>
                                                <input type="text" v-model="TxtLlegada1" id="TxtLlegada1" class="form-control me-1 border-danger" placeholder="Orden de Llegada" maxlength="50" disabled />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Fecha Entrada</th>
                                            <td>
                                                <input type="text" v-model="TxtFechaE1" id="TxtFechaE1" class="form-control me-1 border-danger" placeholder="Orden de Llegada" maxlength="50" disabled />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Hora Entrada</th>
                                            <td>
                                                <input type="text" v-model="TxtFechaH1" id="TxtFechaH1" class="form-control me-1 border-danger" placeholder="Orden de Llegada" maxlength="50" disabled />
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary" v-on:click="SalvarRegistro()" data-bs-dismiss="modal">💾 Guardar</button>
                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">❌ Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hasta Aqui-->



            <!--NODAL PARA REALIZAR UN QR DESPUES DE INGRESAR UN NUEVO REGISTRO-->

            <div class="modal" tabindex="-1" id="CrearQR">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title">
                                <div class="h4 pb-2 mb-2 text-light border-danger ">
                                    🪪 QR
                                </div>
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container vh-10 d-flex justify-content-center align-items-center">
                                <div class="col">
                                    <div class="container py-4">
                                        <div class="card">
                                            <div class="card-body" id="C1">
                                                <h1 class="fs-2 card-title text-center" id="codigo-qr">Card Title 1</h1>
                                                <table class="table table-striped table-hover">
                                                    <tr>
                                                        <th>PLACA</th>
                                                        </th>
                                                        <td>
                                                            <h4 class="h4 card-subtitle text-left" id="NomQR"></h4>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>CONDUCTOR</th>
                                                        <td>
                                                            <h4 class="h4 card-subtitle text-left" id="Conductor"></h4>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>EMPRESA</th>
                                                        <td>
                                                            <h4 class="h4 card-subtitle text-left" id="Empresa"></h4>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>CARGA</th>
                                                        <td>
                                                            <h4 class="h4 card-subtitle text-left" id="Carga"></h4>
                                                        </td>
                                                    </tr>
                                                    <label id="FechaLabel"></label>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-success" v-on:click="ImprimirQR()">🖨 Imprimir</button>
                            <button type="button" class="btn btn-outline-danger" v-on:click="Reload()" data-bs-dismiss="modal">❌ Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hasta Aqui-->

        </div>



    </div>


    <script src="../controlador/js/vue.cjs.js"></script>
    <script src="../controlador/js/bootstrap.min.js"></script>
    <script src="../controlador/js/sweetalert2.js"></script>
    <script src="../controlador/js/qrcode.min.js"></script>

</body>

</html>

<script>
    const {
        createApp,
        ref
    } = Vue

    const app = createApp({

        //Variables
        data() {

            return {

                Direccion: "../controlador/base.php?accion1=",
                User: [],
                Pass: [],
                Registro2: [],
                Registro4: [],
                Registro6: [],
                Id1: "",
                BuscarU: "",
                TxtChofer2: "",
                TxtCIChofer2: "",
                TxtEmpresa2: "",
                TxtRif2: "",
                TxtAyudante2: "",
                TxtCIAyudante2: "",
                TxtBuque2: "",
                TxtMuelle2: "",
                TxtTorre2: "",
                TxtCarga2: "",
                TxtDestino2: "",
                TxtPlacaU2: "",
                TxtPlacaC2: "",
                TxtEstacionamiento2: "",
                TxtLlegada2: "",
                TxtNroOrden2: "",
                TxtFechaE2: "",
                TxtFechaH2: "",
                TxtChofer1: "",
                TxtCIChofer1: "",
                TxtEmpresa1: "",
                TxtRif1: "",
                TxtAyudante1: "",
                TxtCIAyudante1: "",
                TxtBuque1: "",
                TxtMuelle1: "",
                TxtTorre1: "",
                TxtCarga1: "",
                TxtDestino1: "",
                TxtPlacaU1: "",
                TxtPlacaC1: "",
                TxtEstacionamiento1: "",
                TxtLlegada1: "",
                TxtNroOrden1: "",
                TxtFechaE1: "",
                TxtFechaH1: "",
                TxtPesoO1: "",
                TxtPesoO2: ""
            }
        },
        //Cuando inicia la Aplicacion
        mounted() {
            this.login();
            this.Muelle();
            this.Empresas();
        },

        //Para cargar Funciones
        methods: {

            login() {

                let Usuario = this.User;
                let Password = this.Pass;

                if (localStorage.getItem("Usuario")) {
                    //Nada  
                } else {
                    window.location.href = '/'
                }

                if (localStorage.getItem("Usuario")) {
                    this.User = JSON.parse(localStorage.getItem("Usuario"));
                }

                let UserLevel = this.User[0].nivel;
                let ComplejoUser = this.User[0].nombre;

                console.log(UserLevel)

                //console.log(UserLevel);

                if (UserLevel === "Logistica1" || UserLevel === "Admin") {

                    this.Alert();
                
                }else{
                    Swal
                        .fire({
                            title: "Session",
                            text: "NO TIENE PRIVILEGIOS PARA INGRESAR EN ESTE MENU",
                            icon: 'error',
                            showCancelButton: false,
                            confirmButtonText: "✔️ OK",
                        })
                        .then(resultado => {
                            if (resultado.value) {
                                // Hicieron click en "Sí"

                                window.location.href = '../principal.html'
                                return;

                            } else {
                                // Dijeron que no

                            }
                        });

                }

            },

            SesionEliminada() {

                if (localStorage.getItem("Usuario")) {
                    //Nada  
                } else {
                    //Swal("Session Eliminada","","warning")
                    window.location.href = '/'
                    console.log("Sesion Eliminada");
                }
            },

            MostrarUsuario() {

                if (localStorage.getItem("Usuario")) {
                    this.User = JSON.parse(localStorage.getItem("Usuario"));
                }

            },

            CerrarSesion() {

                localStorage.clear();
                //Swal("Session Eliminada","","warning")
                window.location.href = '/puerto'
            },

            Alert() {

                this.TxtChofer1 = "";
                this.TxtCIChofer1 = "";
                document.getElementById("TxtEmpresa1").value = "";
                this.TxtRif1 = "";
                this.TxtAyudante1 = "";
                this.TxtCIAyudante1 = "";
                document.getElementById("TxtBuque1").value = "";
                this.TxtMuelle1 = "";
                this.TxtTorre1 = "";
                this.TxtCarga1 = "";
                this.TxtDestino1 = "";
                this.TxtPlacaU1 = "";
                this.TxtPlacaC1 = "";
                this.TxtEstacionamiento1 = "";
                this.TxtLlegada1 = "";
                this.TxtNroOrden1 = "";
                this.TxtFechaE1 = "";
                this.TxtFechaH1 = "";
                this.TxtPesoO1 = "";

                Swal.fire({
                    title: "Ingrese Nro de Placa para Ingresar",
                    input: "text",
                    inputAttributes: {
                        autocapitalize: "off"
                    },
                    showCancelButton: true,
                    confirmButtonText: "🔍 Buscar",
                    showLoaderOnConfirm: true,
                    preConfirm: async () => {

                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.Buscar(result.value);
                    }
                });

            },

            Buscar(e) {

                let accion1;

                let NB = e;

                if (NB == "") {

                    return;

                } else {

                    accion1 = "ListarBM5";

                }

                fetch(this.Direccion + accion1 + '&e=' + NB, {
                        //method:"POST",
                        //body:JSON.stringify(accion1)
                    })
                    .then(respuesta => respuesta.json())
                    .then((datosRespuesta => {
                        //Respuesta datos que devuelve el JSON
                        console.log(datosRespuesta);
                        this.Usuarios = []
                        console.clear();

                        if (datosRespuesta.length == 0) {

                            Swal
                                .fire({
                                    title: "Registro no Existe desea Agregarlo",
                                    text: e,
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonText: "✔️ Sí, Agregar",
                                    cancelButtonText: "❌ Cancelar",
                                })
                                .then(resultado => {
                                    if (resultado.value) {
                                        // Hicieron click en "Sí"

                                        const fecha = Date.now();
                                        const hoy = new Date(fecha);
                                        let fechaA = hoy.toLocaleDateString('es-CL', {
                                            timeZone: 'America/Caracas'
                                        });
                                        let diaA = fechaA.substring(0, 2);
                                        let mesA = fechaA.substring(5, 3);
                                        let anoA = fechaA.substring(6, 10);

                                        this.TxtFechaE1 = hoy.toLocaleDateString('es-CL', {
                                            timeZone: 'America/Caracas'
                                        });
                                        this.TxtFechaH1 = hoy.toLocaleTimeString();
                                        this.TxtPlacaU1 = e.toUpperCase();

                                        let accion2 = "OrdenLL";
                                        fetch(this.Direccion + accion2 + '&d=' + diaA + '&m=' + mesA + '&a=' + anoA, {
                                                //method:"POST",
                                                //body:(e)
                                            })
                                            .then(respuesta3 => respuesta3.json())
                                            .then((datosRespuesta3 => {
                                                //Respuesta datos que devuelve el JSON
                                                //console.log("Llegada: " + datosRespuesta3);
                                                this.TxtLlegada1 = datosRespuesta3;
                                            }))
                                            .catch(console.log) //En caso de que Falle


                                        let accion3 = "NroOrden";

                                        fetch(this.Direccion + accion3, {
                                                //method:"POST",
                                                //body:(e)
                                            })
                                            .then(respuesta2 => respuesta2.json())
                                            .then((datosRespuesta2 => {
                                                //Respuesta datos que devuelve el JSON
                                                // console.log(datosRespuesta2);
                                                this.TxtNroOrden1 = datosRespuesta2;
                                            }))
                                            .catch(console.log) //En caso de que Falle


                                        //capturamos el id del modal
                                        const modalRegistro1 = document.querySelector("#CrearUsuario");
                                        //las opciones son opcional - puedes quitarlo
                                        const myModal1 = new bootstrap.Modal(modalRegistro1);
                                        myModal1.show(); //data-bs-dismiss
                                        this.TxtEstacionamiento1 = "ESPERA PATIO";

                                    } else {
                                        
                                        this.Alert();

                                    }
                                });

                        } else {

                            this.Usuarios2 = datosRespuesta[0];

                            if (this.Usuarios2.chofer != "") {

                                const fecha = Date.now();
                                const hoy = new Date(fecha);
                                let fechaA = hoy.toLocaleDateString('es-CL', {
                                    timeZone: 'America/Caracas'
                                });
                                let diaA = fechaA.substring(0, 2);
                                let mesA = fechaA.substring(5, 3);
                                let anoA = fechaA.substring(6, 10);

                                //console.log(datosRespuesta2);
                                this.TxtChofer2 = this.Usuarios2.chofer;
                                this.TxtCIChofer2 = this.Usuarios2.ci;
                                this.TxtEmpresa2 = this.Usuarios2.empresa;
                                this.TxtRif2 = this.Usuarios2.rif;
                                this.TxtAyudante2 = this.Usuarios2.ayudante;
                                this.TxtCIAyudante2 = this.Usuarios2.ci_ayudante;
                                this.TxtDestino2 = this.Usuarios2.destino_carga;
                                this.TxtPlacaU2 = this.Usuarios2.placa1;
                                this.TxtPlacaC2 = this.Usuarios2.placa2;
                                this.TxtFechaE2 = hoy.toLocaleDateString('es-CL', {
                                    timeZone: 'America/Caracas'
                                });
                                this.TxtFechaH2 = hoy.toLocaleTimeString();
                                this.TxtMuelle2 = this.Usuarios2.muelle;
                                this.TxtTorre2 = this.Usuarios2.torre;
                                this.TxtCarga2 = this.Usuarios2.carga;
                                this.TxtLlegada2 = this.Usuarios2.nro_llegada;
                                this.TxtEstacionamiento2 = "ESPERA PATIO";
                                this.Id1 = this.Usuarios2.id;

                                //capturamos el id del modal
                                const modalRegistro1 = document.querySelector("#ModificarUsuario");
                                //las opciones son opcional - puedes quitarlo
                                const myModal1 = new bootstrap.Modal(modalRegistro1);
                                myModal1.show(); //data-bs-dismiss

                                let accion2 = "OrdenLL";
                                fetch(this.Direccion + accion2 + '&d=' + diaA + '&m=' + mesA + '&a=' + anoA, {
                                        //method:"POST",
                                        //body:(e)
                                    })
                                    .then(respuesta3 => respuesta3.json())
                                    .then((datosRespuesta3 => {
                                        //Respuesta datos que devuelve el JSON
                                        //console.log("Llegada: " + datosRespuesta3);
                                        this.TxtLlegada2 = datosRespuesta3;
                                    }))
                                    .catch(console.log) //En caso de que Falle


                                let accion3 = "NroOrden";

                                fetch(this.Direccion + accion3, {
                                        //method:"POST",
                                        //body:(e)
                                    })
                                    .then(respuesta2 => respuesta2.json())
                                    .then((datosRespuesta2 => {
                                        //Respuesta datos que devuelve el JSON
                                        // console.log(datosRespuesta2);
                                        this.TxtNroOrden2 = datosRespuesta2;
                                    }))
                                    .catch(console.log) //En caso de que Falle


                                console.clear();

                            }
                        }

                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();

            },

            Reload() {
                location.reload();
            },

            Muelle() {
                let accion1 = "ListarB";

                fetch(this.Direccion + accion1, {
                        //method:"POST",
                        //body:JSON.stringify(json)
                    })
                    .then(respuesta => respuesta.json())
                    .then((datosRespuesta => {
                        //Respuesta datos que devuelve el JSON
                        this.Registro2 = []
                        if (typeof datosRespuesta[0].success === 'undefined') {
                            //Variable para cargar datos del Combo box para la busqueda
                            this.Registro2 = datosRespuesta; //Llena la variable para mostrar en  el combo
                            //console.log(datosRespuesta);
                        }

                    }))
                    .catch(console.log) //En caso de que Falle
            },

            DatosT() {
                let accion2 = "ListarBM3";
                let e2 = this.TxtBuque1;

                fetch(this.Direccion + accion2 + '&e=' + e2, {
                        //method:"POST",
                        //body:(e)
                    })
                    .then(respuesta2 => respuesta2.json())
                    .then((datosRespuesta2 => {
                        //Respuesta datos que devuelve el JSON
                        this.Usuarios2 = []
                        if (typeof datosRespuesta2[0].success === 'undefined') {
                            this.Registro3 = datosRespuesta2[0];
                            //console.log(datosRespuesta2);
                            this.TxtCarga1 = this.Registro3.carga;
                            this.TxtTorre1 = this.Registro3.torre;
                            this.TxtMuelle1 = this.Registro3.muelle;
                        }
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();
            },

            DatosT2() {

                let accion2 = "ListarBM3";
                let e2 = this.TxtBuque2;

                fetch(this.Direccion + accion2 + '&e=' + e2, {
                        //method:"POST",
                        //body:(e)
                    })
                    .then(respuesta2 => respuesta2.json())
                    .then((datosRespuesta2 => {
                        //Respuesta datos que devuelve el JSON
                        this.Usuarios2 = []
                        if (typeof datosRespuesta2[0].success === 'undefined') {
                            this.Registro3 = datosRespuesta2[0];
                            //console.log(datosRespuesta2);
                            this.TxtCarga2 = this.Registro3.carga;
                            this.TxtTorre2 = this.Registro3.torre;
                            this.TxtMuelle2 = this.Registro3.muelle;
                        }
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();
            },

            SalvarRegistro() {

                let Cho1 = this.TxtChofer1;
                let CiC1 = this.TxtCIChofer1;
                let Emp1 = document.getElementById("TxtEmpresa1").value;
                let Rif1 = this.TxtRif1;
                let Ayu1 = this.TxtAyudante1;
                let CiA1 = this.TxtCIAyudante1;
                let Buq1 = document.getElementById("TxtBuque1").value;
                let Mue1 = this.TxtMuelle1;
                let Tor1 = this.TxtTorre1;
                let Car1 = this.TxtCarga1;
                let Des1 = this.TxtDestino1;
                let PlU1 = this.TxtPlacaU1;
                let PlC1 = this.TxtPlacaC1;
                let Est1 = this.TxtEstacionamiento1;
                let Lle1 = this.TxtLlegada1;
                let Ord1 = this.TxtNroOrden1;
                let FeE1 = this.TxtFechaE1;
                let FeH1 = this.TxtFechaH1;
                let PesO = this.TxtPesoO1;
                let accion1 = "InsertarOC";

                if (PlU1 == PlC1) { //NOMBRE DEL CHOFER

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'LA PLACA DE LA UNIDAD NO PUEDE SER IGUAL QUE EL CHUTO!!',
                        footer: ''
                    })
                    return;
                }

                if (CiC1 == CiA1) { //NOMBRE DEL CHOFER

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'EL NRO DE CI DEL CHOFER Y AYUDANTE NO PUEDEN SER IGUALES!!',
                        footer: ''
                    })
                    return;
                }

                if (Cho1 == "") { //NOMBRE DEL CHOFER

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL NOMBRE DEL CHOFER!!',
                        footer: ''
                    })
                    return;
                }

                if (CiC1 == "") { //CI DEL CHOFER

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL NRO DE CI DEL CHOFER!!',
                        footer: ''
                    })
                    return;
                }

                if (Emp1 == "") { //NOMBRE DE LA EMPRESA

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL NOMBRE DE LA EMPRESA!!',
                        footer: ''
                    })
                    return;
                }

                if (Rif1 == "") { //RIF DE LA EMPRESA

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL RIF DE LA EMPRESA!!',
                        footer: ''
                    })
                    return;
                }

                if (Ayu1 == "") { //NOMBRE DEL AYUDANTE

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL NOMBRE DEL AYUDANTE!!',
                        footer: ''
                    })
                    return;
                }

                if (CiA1 == "") { //CI DEL AYUDANTE

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR LA CI DEL AYUDANTE!!',
                        footer: ''
                    })
                    return;
                }

                if (Buq1 == "") { //NOMBRE DEL BUQUE

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE SELECCIONAR EL NOMBRE DEL BUQUE DE DESCARGA!!',
                        footer: ''
                    })
                    return;
                }

                if (Mue1 == "") { //NOMBRE MUELLE

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL NOMBRE DEL MUELLE!!',
                        footer: ''
                    })
                    return;
                }

                if (Tor1 == "") { //NOMBRE TORRE

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL NOMBRE DE LA TORRE!!',
                        footer: ''
                    })
                    return;
                }

                if (Car1 == "") { //NOMBRE CARGA

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL NOMBRE DE LA CARGA!!',
                        footer: ''
                    })
                    return;
                }

                if (Des1 == "") { //NOMBRE DESTINO CARGA

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL DESTINO DE LA CARGA!!',
                        footer: ''
                    })
                    return;
                }

                if (PlU1 == "") { //PLACA UNIDAD

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR LA PLACA DE LA UNIDAD!!',
                        footer: ''
                    })
                    return;
                }

                if (PlC1 == "") { //NOMBRE DESTINO CARGA

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR LA PLACA DEL CHUTO!!',
                        footer: ''
                    })
                    return;
                }

                if (Est1 == "") { //NOMBRE ESTACIONAMIENTO

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL NOMBRE DEL ESTACIONAMIENTO!!',
                        footer: ''
                    })
                    return;
                }

                if (Lle1 == "") { //DATOS UNIDAD ORDEN LLEGADA

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL ORDEN DE LLEGADA UNIDAD!!',
                        footer: ''
                    })
                    return;
                }

                if (Ord1 == "") { //NRO DE ORDEN

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL NRO DE ORDEN!!',
                        footer: ''
                    })
                    return;
                }

                if (FeE1 == "") { //FECHA DE ENTRADA

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR LA FECHA DE ENTRADA!!',
                        footer: ''
                    })
                    return;
                }

                if (FeH1 == "") { //HORA DE ENTRADA UNIDAD

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR LA HORA DE ENTRADA DE LA UNIDAD!!',
                        footer: ''
                    })
                    return;
                }

                if (PesO == "") { //PESO ORDEN DE CAR

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR PESO PLASMADO EN LA ORDEN DE CARGA!!',
                        footer: ''
                    })
                    return;
                }


                let json = {

                    "chofer": Cho1,
                    "cedulac": CiC1,
                    "empresa": Emp1,
                    "rif": Rif1,
                    "ayudante": Ayu1,
                    "cedulaa": CiA1,
                    "buque": Buq1,
                    "muelle": Mue1,
                    "torre": Tor1,
                    "carga": Car1,
                    "destino": Des1,
                    "placau": PlU1,
                    "placac": PlC1,
                    "estacionamiento": Est1,
                    "llegada": Lle1,
                    "orden": Ord1,
                    "fechae": FeE1,
                    "horae": FeH1,
                    "pesoo": PesO
                };

                fetch(this.Direccion + accion1, {
                        method: "POST",
                        body: JSON.stringify(json)
                    })
                    .then(respuesta3 => respuesta3.json())
                    .then((datosRespuesta3 => {
                        console.log(datosRespuesta3.success);
                        if (datosRespuesta3.success == 2) {
                            Swal.fire({
                                icon: 'error',
                                title: 'DUPLICADO',
                                text: 'YA EXISTE UN REGISTRO CON EL MISMO NOMBRE !!',
                                footer: ''
                            })
                        }
                        if (datosRespuesta3.success == 1) {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'REGISTRO SALVADO!!',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        }
                        this.$forceUpdate();
                        this.QR();
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();


            },

            ActualizarRegistro() {

                let Cho1 = this.TxtChofer2;
                let CiC1 = this.TxtCIChofer2;
                let Emp1 = document.getElementById("TxtEmpresa2").value;
                let Rif1 = this.TxtRif2;
                let Ayu1 = this.TxtAyudante2;
                let CiA1 = this.TxtCIAyudante2;
                let Buq1 = document.getElementById("TxtBuque2").value;
                let Mue1 = this.TxtMuelle2;
                let Tor1 = this.TxtTorre2;
                let Car1 = this.TxtCarga2;
                let Des1 = this.TxtDestino2;
                let PlU1 = this.TxtPlacaU2;
                let PlC1 = this.TxtPlacaC2;
                let Est1 = this.TxtEstacionamiento2;
                let Lle1 = this.TxtLlegada2;
                let Ord1 = this.TxtNroOrden2;
                let FeE1 = this.TxtFechaE2;
                let FeH1 = this.TxtFechaH2;
                let PesO = this.TxtPesoO2;
                let accion1 = "InsertarOC";

                if (PlU1 == PlC1) { //NOMBRE DEL CHOFER

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'LA PLACA DE LA UNIDAD NO PUEDE SER IGUAL QUE EL CHUTO!!',
                        footer: ''
                    })
                    return;
                }

                if (CiC1 == CiA1) { //NOMBRE DEL CHOFER

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'EL NRO DE CI DEL CHOFER Y AYUDANTE NO PUEDEN SER IGUALES!!',
                        footer: ''
                    })
                    return;
                }

                if (Cho1 == "") { //NOMBRE DEL CHOFER

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL NOMBRE DEL CHOFER!!',
                        footer: ''
                    })
                    return;
                }

                if (CiC1 == "") { //CI DEL CHOFER

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL NRO DE CI DEL CHOFER!!',
                        footer: ''
                    })
                    return;
                }

                if (Emp1 == "") { //NOMBRE DE LA EMPRESA

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL NOMBRE DE LA EMPRESA!!',
                        footer: ''
                    })
                    return;
                }

                if (Rif1 == "") { //RIF DE LA EMPRESA

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL RIF DE LA EMPRESA!!',
                        footer: ''
                    })
                    return;
                }

                if (Ayu1 == "") { //NOMBRE DEL AYUDANTE

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL NOMBRE DEL AYUDANTE!!',
                        footer: ''
                    })
                    return;
                }

                if (CiA1 == "") { //CI DEL AYUDANTE

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR LA CI DEL AYUDANTE!!',
                        footer: ''
                    })
                    return;
                }

                if (Buq1 == "") { //NOMBRE DEL BUQUE

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE SELECCIONAR EL NOMBRE DEL BUQUE DE DESCARGA!!',
                        footer: ''
                    })
                    return;
                }

                if (Mue1 == "") { //NOMBRE MUELLE

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL NOMBRE DEL MUELLE!!',
                        footer: ''
                    })
                    return;
                }

                if (Tor1 == "") { //NOMBRE TORRE

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL NOMBRE DE LA TORRE!!',
                        footer: ''
                    })
                    return;
                }

                if (Car1 == "") { //NOMBRE CARGA

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL NOMBRE DE LA CARGA!!',
                        footer: ''
                    })
                    return;
                }

                if (Des1 == "") { //NOMBRE DESTINO CARGA

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL DESTINO DE LA CARGA!!',
                        footer: ''
                    })
                    return;
                }

                if (PlU1 == "") { //PLACA UNIDAD

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR LA PLACA DE LA UNIDAD!!',
                        footer: ''
                    })
                    return;
                }

                if (PlC1 == "") { //NOMBRE DESTINO CARGA

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR LA PLACA DEL CHUTO!!',
                        footer: ''
                    })
                    return;
                }

                if (Est1 == "") { //NOMBRE ESTACIONAMIENTO

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL NOMBRE DEL ESTACIONAMIENTO!!',
                        footer: ''
                    })
                    return;
                }

                if (Lle1 == "") { //DATOS UNIDAD ORDEN LLEGADA

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL ORDEN DE LLEGADA UNIDAD!!',
                        footer: ''
                    })
                    return;
                }

                if (Ord1 == "") { //NRO DE ORDEN

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL NRO DE ORDEN!!',
                        footer: ''
                    })
                    return;
                }

                if (FeE1 == "") { //FECHA DE ENTRADA

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR LA FECHA DE ENTRADA!!',
                        footer: ''
                    })
                    return;
                }

                if (FeH1 == "") { //HORA DE ENTRADA UNIDAD

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR LA HORA DE ENTRADA DE LA UNIDAD!!',
                        footer: ''
                    })
                    return;
                }

                if (PesO2 == "") { //HORA DE ENTRADA UNIDAD

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR PESO PLASMADO EN LA ORDEN DE CARGA!!',
                        footer: ''
                    })
                    return;
                }


                let json = {

                    "chofer": Cho1,
                    "cedulac": CiC1,
                    "empresa": Emp1,
                    "rif": Rif1,
                    "ayudante": Ayu1,
                    "cedulaa": CiA1,
                    "buque": Buq1,
                    "muelle": Mue1,
                    "torre": Tor1,
                    "carga": Car1,
                    "destino": Des1,
                    "placau": PlU1,
                    "placac": PlC1,
                    "estacionamiento": Est1,
                    "llegada": Lle1,
                    "orden": Ord1,
                    "fechae": FeE1,
                    "horae": FeH1,
                    "pesoo": PesO
                };

                fetch(this.Direccion + accion1, {
                        method: "POST",
                        body: JSON.stringify(json)
                    })
                    .then(respuesta3 => respuesta3.json())
                    .then((datosRespuesta3 => {
                        console.log(datosRespuesta3.success);
                        if (datosRespuesta3.success == 2) {
                            Swal.fire({
                                icon: 'error',
                                title: 'DUPLICADO',
                                text: 'YA EXISTE UN REGISTRO CON EL MISMO NOMBRE !!',
                                footer: ''
                            })
                        }
                        if (datosRespuesta3.success == 1) {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'REGISTRO SALVADO!!',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        }
                        this.$forceUpdate();
                        this.QR2();
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();



            },

            Empresas() {
                let accion1 = "ListarEmpresas";

                fetch(this.Direccion + accion1, {
                        //method:"POST",
                        //body:JSON.stringify(json)
                    })
                    .then(respuesta => respuesta.json())
                    .then((datosRespuesta => {
                        //Respuesta datos que devuelve el JSON
                        this.Registro6 = []
                        if (typeof datosRespuesta[0].success === 'undefined') {
                            //Variable para cargar datos del Combo box para la busqueda
                            this.Registro6 = datosRespuesta; //Llena la variable para mostrar en  el combo
                            //console.log(datosRespuesta);
                        }

                    }))
                    .catch(console.log) //En caso de que Falle
            },

            Rif1() {
                let accion2 = "ListarEmpresas4";
                let e2 = document.getElementById("TxtEmpresa1").value;



                fetch(this.Direccion + accion2 + '&e=' + e2, {
                        //method:"POST",
                        //body:(e)
                    })
                    .then(respuesta2 => respuesta2.json())
                    .then((datosRespuesta2 => {
                        //Respuesta datos que devuelve el JSON
                        this.Usuarios2 = []
                        if (typeof datosRespuesta2[0].success === 'undefined') {
                            this.Registro3 = datosRespuesta2[0];
                            //console.log(datosRespuesta2);
                            this.TxtRif1 = this.Registro3.rif;
                        }
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();
            },

            Rif2() {
                let accion2 = "ListarEmpresas4";
                let e2 = document.getElementById("TxtEmpresa2").value;



                fetch(this.Direccion + accion2 + '&e=' + e2, {
                        //method:"POST",
                        //body:(e)
                    })
                    .then(respuesta2 => respuesta2.json())
                    .then((datosRespuesta2 => {
                        //Respuesta datos que devuelve el JSON
                        this.Usuarios2 = []
                        if (typeof datosRespuesta2[0].success === 'undefined') {
                            this.Registro3 = datosRespuesta2[0];
                            //console.log(datosRespuesta2);
                            this.TxtRif2 = this.Registro3.rif;
                        }
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();
            },

            QR() {
                //PARA VERIFICAR SI EL USUARIO DESEA IMPRIMIR EL CODIGO QR

                let N1 = document.getElementById('TxtPlacaU1').value
                let N2 = document.getElementById('TxtChofer1').value
                let N3 = document.getElementById('TxtEmpresa1').value
                let N4 = document.getElementById('TxtCarga1').value
                let N5 = document.getElementById('TxtNroOrden1').value
                let F = document.getElementById('FechaLabel');
                const fecha = Date.now();
                const hoy = new Date(fecha);

                F.innerHTML = "FECHA: " + hoy.toLocaleDateString('es-CL', {
                    timeZone: 'America/Caracas'
                });;

                Swal
                    .fire({
                        title: "Desea Imprimir Codigo QR",
                        text: "Crear QR",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: "✔️ Sí",
                        cancelButtonText: "❌ No",
                    })
                    .then(resultado => {
                        if (resultado.value) {
                            // Hicieron click en "Sí"
                            //capturamos el id del modal
                            const modalRegistro = document.querySelector("#CrearQR");
                            //las opciones son opcional - puedes quitarlo
                            const myModal = new bootstrap.Modal(modalRegistro);
                            myModal.show();

                            document.getElementById('NomQR').innerHTML = toUpperCase(N1);
                            document.getElementById('Conductor').innerHTML = toUpperCase(N2);
                            document.getElementById('Empresa').innerHTML = toUpperCase(N3);
                            document.getElementById('Carga').innerHTML = toUpperCase(N4);

                            const codigoQRDiv1 = document.getElementById('codigo-qr');
                            codigoQRDiv1.innerHTML = '';
                            const codigoQR = new QRCode(codigoQRDiv1, {
                                text: toUpperCase(N1),
                                width: 128,
                                height: 128
                            });

                        } else {
                            // Dijeron que no

                        }
                    });
            },

            QR2() {

                let N1 = document.getElementById('TxtPlacaU2').value
                let N2 = document.getElementById('TxtChofer2').value
                let N3 = document.getElementById('TxtEmpresa2').value
                let N4 = document.getElementById('TxtCarga2').value
                let N5 = document.getElementById('TxtNroOrden2').value
                let F = document.getElementById('FechaLabel');
                const fecha = Date.now();
                const hoy = new Date(fecha);

                F.innerHTML = "FECHA: " + hoy.toLocaleDateString('es-CL', {
                    timeZone: 'America/Caracas'
                });;

                Swal
                    .fire({
                        title: "Desea Imprimir Codigo QR",
                        text: "Crear QR",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: "✔️ Sí",
                        cancelButtonText: "❌ No",
                    })
                    .then(resultado => {
                        if (resultado.value) {
                            // Hicieron click en "Sí"
                            //capturamos el id del modal
                            const modalRegistro = document.querySelector("#CrearQR");
                            //las opciones son opcional - puedes quitarlo
                            const myModal = new bootstrap.Modal(modalRegistro);
                            myModal.show();

                            document.getElementById('NomQR').innerHTML = toUpperCase(N1);
                            document.getElementById('Conductor').innerHTML = toUpperCase(N2);
                            document.getElementById('Empresa').innerHTML = toUpperCase(N3);
                            document.getElementById('Carga').innerHTML = toUpperCase(N4);

                            const codigoQRDiv1 = document.getElementById('codigo-qr');
                            codigoQRDiv1.innerHTML = '';
                            const codigoQR = new QRCode(codigoQRDiv1, {
                                text: toUpperCase(N1),
                                width: 128,
                                height: 128
                            });

                        } else {
                            // Dijeron que no

                        }
                    });
            },

            QR_Modal() {

                let Bu

                Swal.fire({
                    title: "Ingrese Nro de Placa para crear Orden",
                    input: "text",
                    inputAttributes: {
                        autocapitalize: "off"
                    },
                    showCancelButton: true,
                    confirmButtonText: "🔍 Buscar",
                    showLoaderOnConfirm: true,
                    preConfirm: async () => {

                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        Bu = result.value;

                        let accion1 = "ListarBM5";
                        let N1
                        let N2
                        let N3
                        let N4
                        let N5
                        let F = document.getElementById('FechaLabel');
                        const fecha = Date.now();
                        const hoy = new Date(fecha);

                        F.innerHTML = "FECHA: " + hoy.toLocaleDateString('es-CL', {
                            timeZone: 'America/Caracas'
                        });


                        fetch(this.Direccion + accion1 + "&e=" + Bu, {
                                //method:"POST",
                                //body:JSON.stringify(json)
                            })
                            .then(respuesta => respuesta.json())
                            .then((datosRespuesta => {
                                //Respuesta datos que devuelve el JSON
                                this.Registro6 = []

                                //Variable para cargar datos del Combo box para la busqueda
                                this.Registro6 = datosRespuesta;
                                //console.log(datosRespuesta);
                                N1 = datosRespuesta[0].placa1;
                                N2 = datosRespuesta[0].chofer;
                                N3 = datosRespuesta[0].empresa;
                                N4 = datosRespuesta[0].carga;
                                N5 = datosRespuesta[0].orden_carga;

                                // Hicieron click en "Sí"
                                //capturamos el id del modal
                                const modalRegistro = document.querySelector("#CrearQR");
                                //las opciones son opcional - puedes quitarlo
                                const myModal = new bootstrap.Modal(modalRegistro);
                                myModal.show();

                                document.getElementById('NomQR').innerHTML = toUpperCase(N1);
                                document.getElementById('Conductor').innerHTML = toUpperCase(N2);
                                document.getElementById('Empresa').innerHTML = toUpperCase(N3);
                                document.getElementById('Carga').innerHTML = toUpperCase(N4);

                                const codigoQRDiv1 = document.getElementById('codigo-qr');
                                codigoQRDiv1.innerHTML = '';
                                const codigoQR = new QRCode(codigoQRDiv1, {
                                    text: toUpperCase(N1),
                                    width: 128,
                                    height: 128
                                });

                            }))
                            .catch(console.log) //En caso de que Falle



                    }
                });

            },

            ImprimirQR() {

                /*var ficha = document.getElementById('C1');
                var ficha2 = document.getElementById('NomQR');
                var ventimp = window.open(' ', 'popimpr');
                ventimp.document.write(ficha.innerHTML);
                ventimp.document.close();
                ventimp.print();
                ventimp.close();*/
                var contenido = document.getElementById('C1').innerHTML;
                var contenidoOriginal = document.body.innerHTML;
                document.body.innerHTML = contenido;
                window.print();
                document.body.innerHTML = contenidoOriginal;
                location.reload();

            },

        }
    })

    app.mount('#app')
</script>

<style>
    @media (max-width: 963px) {
        #app {
            left: 40vh;
            ;
        }

    }

    @media only screen and (max-width: 600px) {
        #collapseWidthExample {
            width: 100%;
            left: 1vh;
            ;
        }

        #collapseWidthExample {
            /* Estilos para pantallas menores de 600px */
            margin-top: 40%;
            width: 100%;
            text-align: left;
        }
    }


    .imagen {

        position: absolute;
        width: 100%;
        height: 100vh;
        background-size: cover;
        background-repeat: no-repeat;
        background-image: url('../vista/img/fondo2.jpg');
    }

    #btn-1 {
        font-size: 30px;
        line-height: 20px;
        text-align: center;
        width: 60px;
        height: 50px;
    }

    #btn-1:active {
        transform: scale(0.98);
        /* Scaling button to 0.98 to its original size */

        color: rgb(165, 160, 160) !important;
        box-shadow: 0 4px 16px rgb(124, 0, 0);
        transition: all 0.2s ease;
    }

    #a1 {
        text-align: left;
    }

    #IconUser {
        text-align: center;
    }


    #Lista {
        position: absolute;
        margin: 0 auto;
        padding: 0 20px;
        top: 10%;
        left: 1%;
        width: 1300px;
        height: 50%;
    }
</style>