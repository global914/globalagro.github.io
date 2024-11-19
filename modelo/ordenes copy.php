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
                                <li><a class="dropdown-item" href="#">Ordenes de Carga</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../modelo/bascula_entrada.php">Bascula Entrada</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../modelo/carga.php">Carga de Producto</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../modelo/bascula_salida.php">Bascula Salida</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../modelo/salida.php">Salida de Carga</a></li>
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
                              <li><a class="dropdown-item" href="../modelo/info_empresa.php">Trasegados</a></li>
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
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../modelo/empresas.php">Empresas</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../modelo/usuarios.php">Usuarios</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../modelo/torres.php">Torres de Carga</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
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
                <label><strong class="text-black fs-5 me-4">📓 ORDENES DE CARGA</strong></label>
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
        <!-- CUERPO DEL PROGRAMA-->
        <div class="text-center" id="Lista">
            <!-- BOTONES Y INPUT DE BUSQUEDA TABLA O LISTADO DE USUARIOS -->
            <div class="col-4" id="Cont-Bus">
                <div class="input-group mb-3 max-width">
                <input type="text" style="border-radius: 14px" class="form-control border-danger me-2" placeholder="🔎 Orden de Carga" aria-label="Username" aria-describedby="basic-addon1" v-model="TxtBuscar1" id="TxtBuscar1" v-on:keyup="filterKey1">
                <input type="text" style="border-radius: 14px" class="form-control border-danger me-2" placeholder="🔎 Placa Unidad" aria-label="Username" aria-describedby="basic-addon1" v-model="TxtBuscar2" id="TxtBuscar2" v-on:keyup="filterKey2">
                    <button style="border-radius: 14px" class="btn btn-outline-primary border-danger" type="button" id="button-addon1" data-bs-toggle="modal" data-bs-target="#CrearUsuario" v-on:click="NuevoRegistro()" title="CREAR REGISTRO">➕
                    </button>
                </div>
            </div>

            <!-- HASTA AQUI -->
            <table class="table table-striped table-hover">
                <thead>
                    <tr class="table-dark">
                        <th scope="col">ID</th>
                        <th scope="col">Chofer</th>
                        <th scope="col">Empresa</th>
                        <th scope="col">Placa</th>
                        <th scope="col">Orden Carga</th>
                        <th scope="col">Fecha E</th>
                        <th scope="col">Fecha S</th>
                        <th scope="col">Carga</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="Usuario in Usuarios" :key="Usuario.id">
                        <td><strong>{{Usuario.id}}</strong></td>
                        <td>{{Usuario.chofer}}</td>
                        <td>{{Usuario.empresa}}</td>
                        <td>{{Usuario.placa1}}</td>
                        <td>{{Usuario.orden_carga}}</td>
                        <td>{{Usuario.fecha_entrada}}</td>
                        <td>{{Usuario.fecha_salida}}</td>
                        <td>{{Usuario.carga}}</td>
                        <td>
                            <button class="btn btn-outline-danger border-danger me-2" title="ELIMINAR REGISTRO" v-on:click="EliminarRegistro(Usuario.id)">🗑️</button>
                            <button class="btn btn-outline-primary border-danger me-2" title="MODIFICAR REGISTRO" v-on:click="ModificarRegistro(Usuario.id)" data-bs-toggle="modal" data-bs-target="#ModificarUsuario">📝</button>
                            <button class="btn btn-outline-primary border-danger" title="IMPRIMIR QR" v-on:click="QR(Usuario.placa1)" data-bs-toggle="modal" data-bs-target="#CrearQR">🖨</button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- Paginacion -->
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item me-1" v-bind:="Page" v-for="Page in TotalPaginas" :key="Page"><button style="border-radius: 14px" class="btn btn-outline-secondary" v-on:click="ListarUsuarios(Page)">{{ Page }}</button></li>
                </ul>
            </nav>

        </div>


        <!--HASTA AQUI CUERPO DEL PROGRAMA-->

        <!--NODAL PARA AGREGAR un Registro-->

        <div class="modal" tabindex="-1" id="CrearUsuario">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title">
                            <div class="h4 pb-2 mb-2 text-light border-danger">
                                📓 Ordenes de Carga
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
                                            <input type="text" v-model="TxtEmpresa1" id="TxtEmpresa1" class="form-control me-1 border-danger" placeholder="Empresa" maxlength="50" />
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
                                        <th class="table-info">Estacionamiento</th>
                                        <td>
                                            <select v-model="TxtEstacionamiento1" id="TxtEstacionamiento1" class="form-select border-danger" aria-label="Default select example" placeholder="Estacionamiento">
                                                <option v-bind:value="Registro4.descripcion" v-for="Registro4 in Registro4" :key="Registro4.id">{{
                                                            Registro4.descripcion }}</option>
                                            </select>
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
                        <button type="button" class="btn btn-outline-success" v-on:click="BuscarRegistro()" data-bs-dismiss="modal">🔎 Buscar</button>
                        <button type="button" class="btn btn-outline-primary" v-on:click="SalvarRegistro()" data-bs-dismiss="modal">💾 Guardar</button>
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">❌ Cerrar</button>
                    </div>
                </div>
            </div>
        </div>


        <!--NODAL PARA MODIFICAR un Registro-->

        <div class="modal" tabindex="-1" id="ModificarUsuario">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title">
                            <div class="h4 pb-2 mb-2 text-light border-danger">
                                📓 Modificar Ordenes de Carga
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
                                            <input type="text" v-model="TxtEmpresa2" id="TxtEmpresa2" class="form-control me-1 border-danger" placeholder="Empresa" maxlength="50" />
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
                                        <th class="table-info">Estacionamiento</th>
                                        <td>
                                            <select v-model="TxtEstacionamiento2" id="TxtEstacionamiento2" class="form-select border-danger" aria-label="Default select example" placeholder="Estacionamiento">
                                                <option v-bind:value="Registro4.descripcion" v-for="Registro4 in Registro4" :key="Registro4.id">{{
                                                            Registro4.descripcion }}</option>
                                            </select>
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
                            <div id="codigo-qr"></div>
                            <strong><label id="NomQR"></label></strong>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-success" v-on:click="ImprimirQR()" data-bs-dismiss="modal">🖨 Imprimir</button>
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">❌ Cerrar</button>
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

                User: [],
                TxtBuscar1: "",
                TxtBuscar2: "",
                Usuarios: [],
                Registro2: [],
                Registro3: [],
                Registro4: [],
                TotalRegistros: 0,
                Pagina: 0,
                TotalPaginas: 0,
                Id1: "",
                Page: 1,
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
            }
        },
        //Cuando inicia la Aplicacion
        mounted() {
            this.ListarRegistros();
            this.Muelle();
            this.Estacionamiento();
        },

        //Para cargar Funciones
        methods: {

            login() {

                let Usuario = this.User;
                let Password = this.Pass;

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

            ListarRegistros(Pag) {

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

                //console.log(UserLevel);

                if (UserLevel != "Admin") {
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

                let accion1;

                let NB = this.TxtBuscar1;

                if (NB == "") {

                    accion1 = "ListarO";

                } else {

                    accion1 = "ListarOM";

                }

                if (Pag == undefined) {
                    Pag = 1;
                }

                fetch("../controlador/base.php?accion1=" + accion1 + '&e=' + NB, {
                        //method:"POST",
                        //body:JSON.stringify(accion1)
                    })
                    .then(respuesta => respuesta.json())
                    .then((datosRespuesta => {
                        //Respuesta datos que devuelve el JSON
                        console.log(datosRespuesta);
                        this.Usuarios = []
                        console.clear();
                        if (typeof datosRespuesta[0].success === 'undefined') {
                            //Variable para cargar datos del Combo box para la busqueda
                            this.Registros = datosRespuesta; //Llena la variable para mostrar en  el combo

                            //Proceso de Paginacion
                            this.TotalRegistros = datosRespuesta.length; //Total de Registros recibidos
                            this.Pagina = this.TotalRegistros / 8; //Divide el total registros entre el numero de paginas
                            this.TotalPaginas = Math.ceil(this.Pagina); //Redondea ka division anterior

                            let Inicio, Fin;
                            Inicio = 0;
                            Fin = 0;

                            Fin = (Pag * 8);

                            if (Pag === 1) {
                                Inicio = 0;
                            } else {
                                Inicio = (Fin - 8);
                            }
                            //console.log(Inicio);
                            //console.log(Fin);

                            if (NB !== "") {
                                this.Usuarios = datosRespuesta //this.Registros2; //Llena la variable para mostrar en la tabla
                            } else {
                                this.Registros2 = datosRespuesta.slice(Inicio, Fin);
                                this.Usuarios = this.Registros2; //Llena la variable para mostrar en la tabla
                            }

                            this.$forceUpdate();
                        }
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();

            },

            Muelle() {
                let accion1 = "ListarB";

                fetch("../controlador/base.php?accion1=" + accion1, {
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

            Estacionamiento() {
                let accion1 = "ListarA";

                fetch("../controlador/base.php?accion1=" + accion1, {
                        //method:"POST",
                        //body:JSON.stringify(json)
                    })
                    .then(respuesta => respuesta.json())
                    .then((datosRespuesta2 => {
                        //Respuesta datos que devuelve el JSON
                        this.Registro4 = []
                        if (typeof datosRespuesta2[0].success === 'undefined') {
                            //Variable para cargar datos del Combo box para la busqueda
                            this.Registro4 = datosRespuesta2; //Llena la variable para mostrar en  el combo
                            //console.log(datosRespuesta);
                        }

                    }))
                    .catch(console.log) //En caso de que Falle
            },

            filterKey1() {

                //BUSCAR EN LA BASE DE DATOS

                let Buscar = this.TxtBuscar1;
                let Pag = 1;


                if (Buscar == "") {
                    this.$forceUpdate();
                    this.ListarRegistros(1);
                }

                if (localStorage.getItem("Usuario")) {
                    this.User = JSON.parse(localStorage.getItem("Usuario"));
                }

                let UserLevel = this.User[0].rol;
                let ComplejoUser = this.User[0].localidad;

                let accion1;

                let NB = this.TxtBuscar1;
                
                if (NB == "") {

                    accion1 = "ListarO";

                } else {

                    accion1 = "ListarOM";

                }

                if (Pag == undefined) {
                    Pag = 1;
                }

                fetch("../controlador/base.php?accion1=" + accion1 + '&e=' + NB, {
                        //method:"POST",
                        //body:JSON.stringify(accion1)
                    })
                    .then(respuesta => respuesta.json())
                    .then((datosRespuesta => {
                        //Respuesta datos que devuelve el JSON
                        console.log(datosRespuesta);
                        this.Usuarios = []
                        console.clear();
                        if (typeof datosRespuesta[0].success === 'undefined') {
                            //Variable para cargar datos del Combo box para la busqueda
                            this.Registros = datosRespuesta; //Llena la variable para mostrar en  el combo

                            //Proceso de Paginacion
                            this.TotalRegistros = datosRespuesta.length; //Total de Registros recibidos
                            this.Pagina = this.TotalRegistros / 8; //Divide el total registros entre el numero de paginas
                            this.TotalPaginas = Math.ceil(this.Pagina); //Redondea ka division anterior

                            let Inicio, Fin;
                            Inicio = 0;
                            Fin = 0;

                            Fin = (Pag * 8);

                            if (Pag === 1) {
                                Inicio = 0;
                            } else {
                                Inicio = (Fin - 8);
                            }
                            //console.log(Inicio);
                            //console.log(Fin);

                            if (NB !== "") {
                                this.Usuarios = datosRespuesta //this.Registros2; //Llena la variable para mostrar en la tabla
                            } else {
                                this.Registros2 = datosRespuesta.slice(Inicio, Fin);
                                this.Usuarios = this.Registros2; //Llena la variable para mostrar en la tabla
                            }

                            this.$forceUpdate();
                        }
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();


            },

            filterKey2() {

                //BUSCAR EN LA BASE DE DATOS

                let Buscar = this.TxtBuscar2;
                let Pag = 1;


                if (Buscar == "") {
                    this.$forceUpdate();
                    this.ListarRegistros(1);
                }

                if (localStorage.getItem("Usuario")) {
                    this.User = JSON.parse(localStorage.getItem("Usuario"));
                }

                let UserLevel = this.User[0].rol;
                let ComplejoUser = this.User[0].localidad;

                let accion1;

                let NB = this.TxtBuscar2;
                

                if (NB == "") {

                    accion1 = "ListarO";

                } else {
                    
                    accion1 = "ListarBM5";

                }

                if (Pag == undefined) {
                    Pag = 1;
                }

                fetch("../controlador/base.php?accion1=" + accion1 + '&e=' + NB, {
                        //method:"POST",
                        //body:JSON.stringify(accion1)
                    })
                    .then(respuesta => respuesta.json())
                    .then((datosRespuesta => {
                        //Respuesta datos que devuelve el JSON
                        console.log(datosRespuesta);
                        this.Usuarios = []
                        console.clear();
                        if (typeof datosRespuesta[0].success === 'undefined') {
                            //Variable para cargar datos del Combo box para la busqueda
                            this.Registros = datosRespuesta; //Llena la variable para mostrar en  el combo

                            //Proceso de Paginacion
                            this.TotalRegistros = datosRespuesta.length; //Total de Registros recibidos
                            this.Pagina = this.TotalRegistros / 8; //Divide el total registros entre el numero de paginas
                            this.TotalPaginas = Math.ceil(this.Pagina); //Redondea ka division anterior

                            let Inicio, Fin;
                            Inicio = 0;
                            Fin = 0;

                            Fin = (Pag * 8);

                            if (Pag === 1) {
                                Inicio = 0;
                            } else {
                                Inicio = (Fin - 8);
                            }
                            //console.log(Inicio);
                            //console.log(Fin);

                            if (NB !== "") {
                                this.Usuarios = datosRespuesta //this.Registros2; //Llena la variable para mostrar en la tabla
                            } else {
                                this.Registros2 = datosRespuesta.slice(Inicio, Fin);
                                this.Usuarios = this.Registros2; //Llena la variable para mostrar en la tabla
                            }

                            this.$forceUpdate();
                        }
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();


            },

            NuevoRegistro() {

                this.TxtChofer1 = ""
                this.TxtCIChofer1 = ""
                this.TxtEmpresa1 = ""
                this.TxtRif1 = ""
                this.TxtAyudante1 = ""
                this.TxtCIAyudante1 = ""
                this.TxtBuque1 = ""
                this.TxtMuelle1 = ""
                this.TxtTorre1 = ""
                this.TxtCarga1 = ""
                this.TxtDestino1 = ""
                this.TxtPlacaU1 = ""
                this.TxtPlacaC1 = ""
                this.TxtEstacionamiento1 = ""
                this.TxtLlegada1 = ""
                this.TxtNroOrden1 = ""
                document.getElementById("TxtPlacaU1").focus();

                let accion1 = "NroOrden";
                const fecha = Date.now();
                const hoy = new Date(fecha);

                fetch("../controlador/base.php?accion1=" + accion1, {
                        //method:"POST",
                        //body:(e)
                    })
                    .then(respuesta2 => respuesta2.json())
                    .then((datosRespuesta2 => {
                        //Respuesta datos que devuelve el JSON
                        // console.log(datosRespuesta2);
                        this.TxtNroOrden1 = datosRespuesta2;
                        this.TxtFechaE1 = hoy.toLocaleDateString('es-CL', {
                            timeZone: 'America/Caracas'
                        });
                        this.TxtFechaH1 = hoy.toLocaleTimeString();
                    }))
                    .catch(console.log) //En caso de que Falle


                let accion2 = "OrdenLL";
                let fechaA = hoy.toLocaleDateString('es-CL', {
                    timeZone: 'America/Caracas'
                });
                let diaA = fechaA.substring(0, 2);
                let mesA = fechaA.substring(5, 3);
                let anoA = fechaA.substring(6, 10);

                fetch("../controlador/base.php?accion1=" + accion2 + '&d=' + diaA + '&m=' + mesA + '&a=' + anoA, {
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


                console.clear();

            },

            DatosT() {
                let accion2 = "ListarBM3";
                let e2 = this.TxtBuque1;

                fetch("../controlador/base.php?accion1=" + accion2 + '&e=' + e2, {
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

                fetch("../controlador/base.php?accion1=" + accion2 + '&e=' + e2, {
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

            BuscarU() {

                let NB = this.TxtPlacaU1;
                let Pag = 1;


                if (NB == "") {
                    this.$forceUpdate();
                    this.ListarRegistros(1);
                }

                let accion1 = "ListarBM4";

                if (Pag == undefined) {
                    Pag = 1;
                }

                fetch("../controlador/base.php?accion1=" + accion1 + '&e=' + NB, {
                        //method:"POST",
                        //body:JSON.stringify(accion1)
                    })
                    .then(respuesta2 => respuesta2.json())
                    .then((datosRespuesta2 => {
                        //Respuesta datos que devuelve el JSON
                        //console.log(datosRespuesta2);
                        this.Usuarios2 = []
                        if (typeof datosRespuesta2[0].success === 'undefined') {
                            this.Usuarios2 = datosRespuesta2[0];
                            //console.log(datosRespuesta2);
                            this.TxtChofer1 = this.Usuarios2.chofer;
                            this.TxtCIChofer1 = this.Usuarios2.ci;
                            this.TxtEmpresa1 = this.Usuarios2.empresa;
                            this.TxtRif1 = this.Usuarios2.rif;
                            this.TxtAyudante1 = this.Usuarios2.ayudante;
                            this.TxtCIAyudante1 = this.Usuarios2.ci_ayudante;
                            this.TxtDestino1 = this.Usuarios2.destino_carga;
                            this.TxtPlacaC1 = this.Usuarios2.placa2;
                        }
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();
            },

            SalvarRegistro() {

                let Cho1 = this.TxtChofer1;
                let CiC1 = this.TxtCIChofer1;
                let Emp1 = this.TxtEmpresa1;
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
                    "horae": FeH1
                };

                fetch("../controlador/base.php?accion1=" + accion1, {
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
                        this.ListarRegistros();
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();

                //PARA VERIFICAR SI EL USUARIO DESEA IMPRIMIR EL CODIGO QR
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

                            const codigoQRDiv = document.getElementById('codigo-qr');
                            codigoQRDiv.innerHTML = '';
                            const codigoQR = new QRCode(codigoQRDiv, {
                                text: this.TxtPlacaU1,
                                width: 128,
                                height: 128
                            });

                        } else {
                            // Dijeron que no

                        }
                    });

            },

            QR(e) {


                const codigoQRDiv = document.getElementById('codigo-qr');
                codigoQRDiv.innerHTML = '';
                const codigoQR = new QRCode(codigoQRDiv, {
                    text: e,
                    width: 128,
                    height: 128
                });

                document.getElementById('NomQR').innerHTML = e;

            },

            ImprimirQR() {

                var ficha = document.getElementById('codigo-qr');
                var ficha2 = document.getElementById('NomQR');
                var ventimp = window.open(' ', 'popimpr');
                ventimp.document.write(ficha.innerHTML + " " + ficha2.innerHTML);
                ventimp.document.close();
                ventimp.print();
                ventimp.close();
            },

            ModificarRegistro(e) {

                if (localStorage.getItem("Usuario")) {
                    //Nada  
                } else {
                    window.location.href = '/'
                }

                if (localStorage.getItem("Usuario")) {
                    this.User = JSON.parse(localStorage.getItem("Usuario"));
                }

                let accion1 = "ListarBM6";

                fetch("../controlador/base.php?accion1=" + accion1 + '&e=' + e, {
                        //method:"POST",
                        //body:(e)
                    })
                    .then(respuesta2 => respuesta2.json())
                    .then((datosRespuesta2 => {
                        //Respuesta datos que devuelve el JSON
                        //console.log(datosRespuesta2);
                        this.Usuarios2 = []
                        if (typeof datosRespuesta2[0].success === 'undefined') {
                            this.Usuarios2 = datosRespuesta2[0];
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
                            this.TxtNroOrden2 = this.Usuarios2.orden_carga;
                            this.TxtFechaE2 = this.Usuarios2.fecha_entrada;
                            this.TxtFechaH2 = this.Usuarios2.hora_entrada;
                            this.TxtMuelle2 = this.Usuarios2.muelle;
                            this.TxtTorre2 = this.Usuarios2.torre;
                            this.TxtCarga2 = this.Usuarios2.carga;
                            this.TxtLlegada2 = this.Usuarios2.nro_llegada;
                            this.TxtEstacionamiento2 = this.Usuarios2.estacionamiento1;
                            this.Id1 = this.Usuarios2.id;
                        }
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();

            },

            ActualizarRegistro() {

                let Cho1 = this.TxtChofer2;
                let CiC1 = this.TxtCIChofer2;
                let Emp1 = this.TxtEmpresa2;
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
                let ID1 = document.getElementById("Id1").value;
                let accion1 = "ModificarOC";

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
                        text: 'DEBE INGRESAR EL NRO DE CI DEL AYUDANTE!!',
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
                    "horae": FeH1
                };

                fetch("../controlador/base.php?accion1=" + accion1 + '&e=' + ID1, {
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
                                title: 'REGISTRO MODIFICADO!!',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        }
                        this.$forceUpdate();
                        this.ListarRegistros();
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();

                //PARA VERIFICAR SI EL USUARIO DESEA IMPRIMIR EL CODIGO QR
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

                            const codigoQRDiv = document.getElementById('codigo-qr');
                            codigoQRDiv.innerHTML = '';
                            const codigoQR = new QRCode(codigoQRDiv, {
                                text: this.TxtPlacaU1,
                                width: 128,
                                height: 128
                            });

                        } else {
                            // Dijeron que no

                        }
                    });

            },

            EliminarRegistro(e) {

                Swal
                    .fire({
                        title: "Eliminar Registro",
                        text: e,
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: "✔️ Sí, eliminar",
                        cancelButtonText: "❌ Cancelar",
                    })
                    .then(resultado => {
                        if (resultado.value) {
                            // Hicieron click en "Sí"

                            let accion1 = "EliminarOC";

                            fetch("../controlador/base.php?accion1=" + accion1 + '&e=' + e, {
                                    //method:"POST",
                                    //body:(e)
                                })

                                .then(respuesta => respuesta.json())
                                .then((datosRespuesta => {
                                    //Respuesta datos que devuelve el JSON
                                    console.log(datosRespuesta);
                                    this.$forceUpdate();
                                    this.ListarRegistros();
                                }))

                        } else {
                            // Dijeron que no

                        }
                    });
            },

            BuscarRegistro() {

                Swal.fire({
                    title: "Placa de la Unidad",
                    input: "text",
                    inputAttributes: {
                        autocapitalize: "off"
                    },
                    icon: "info",
                    showCancelButton: true,
                    cancelButtonText: "❌ Cancelar",
                    confirmButtonText: "🔎Buscar",
                    reverseButtons: false
                }).then((result) => {
                    
                    if (result.isConfirmed) {

                        let NB = result.value;

                        if (NB == "") {
                            this.$forceUpdate();
                            this.ListarRegistros(1);
                        }

                        const modalRegistro = document.querySelector("#CrearUsuario");
                        //las opciones son opcional - puedes quitarlo
                        const myModal = new bootstrap.Modal(modalRegistro);
                        myModal.show();

                        let accion1 = "ListarBM4";


                        fetch("../controlador/base.php?accion1=" + accion1 + '&e=' + NB, {
                                //method:"POST",
                                //body:JSON.stringify(accion1)
                            })
                            .then(respuesta2 => respuesta2.json())
                            .then((datosRespuesta2 => {
                                //Respuesta datos que devuelve el JSON
                                //console.log(datosRespuesta2);
                                this.Usuarios2 = []
                                if (typeof datosRespuesta2[0].success === 'undefined') {
                                    this.Usuarios2 = datosRespuesta2[0];
                                    //console.log(datosRespuesta2);
                                    this.TxtChofer1 = this.Usuarios2.chofer;
                                    this.TxtCIChofer1 = this.Usuarios2.ci;
                                    this.TxtEmpresa1 = this.Usuarios2.empresa;
                                    this.TxtRif1 = this.Usuarios2.rif;
                                    this.TxtAyudante1 = this.Usuarios2.ayudante;
                                    this.TxtCIAyudante1 = this.Usuarios2.ci_ayudante;
                                    this.TxtDestino1 = this.Usuarios2.destino_carga;
                                    this.TxtPlacaU1 = this.Usuarios2.placa1;
                                    this.TxtPlacaC1 = this.Usuarios2.placa2;
                                    this.TxtNroOrden1 = this.Usuarios2.orden_carga;
                                    this.TxtFechaE1 = this.Usuarios2.fecha_entrada;
                                    this.TxtFechaH1 = this.Usuarios2.hora_entrada;
                                    this.TxtMuelle1 = this.Usuarios2.muelle;
                                    this.TxtTorre1 = this.Usuarios2.torre;
                                    this.TxtCarga1 = this.Usuarios2.carga;
                                    this.TxtLlegada1 = this.Usuarios2.nro_llegada;
                                    this.TxtEstacionamiento1 = this.Usuarios2.estacionamiento1;
                                }
                            }))
                            .catch(console.log) //En caso de que Falle

                        console.clear();
                    }

                });

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