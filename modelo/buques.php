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
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../modelo/espera.php">Espera en Patio</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../modelo/muelle_espera.php">Espera Muelle</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../modelo/carga.php">Carga</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../modelo/despacho.php">Despacho</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../modelo/bascula_salida.php">Pesaje Salida</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../modelo/salida.php">Salida de Puerto</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                🖨 Informes
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../modelo/dashboard.php">DashBoard</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../modelo/qrlotes.php">QR por Lotes</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../modelo/info_unidades.php">Unidades Despachadas</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../modelo/info_empresa.php">Por Empresa</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
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
                <label><strong class="text-black fs-5 me-4">🗄 BUQUES</strong></label>
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
                    <span class="input-group-text border-danger" id="basic-addon1">🔎</span>
                    <input type="text" required class="form-control border-danger me-2" placeholder="Descripcion" aria-label="Username" aria-describedby="basic-addon1" v-model="TxtBuscar" v-on:keyup="filterKey">
                    <button style="border-radius: 14px" class="btn btn-outline-primary border-danger" type="button" id="button-addon1" data-bs-toggle="modal" data-bs-target="#CrearUsuario" v-on:click="NuevoRegistro()" title="CREAR REGISTRO">➕
                    </button>
                </div>
            </div>

            <!-- HASTA AQUI -->
            <table class="table table-striped table-hover">
                <thead>
                    <tr class="table-dark">
                        <th scope="col">Imo</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Muelle</th>
                        <th scope="col">Torre</th>
                        <th scope="col">Carga</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="Usuario in Usuarios" :key="Usuario.id">
                        <td><strong>{{Usuario.imo}}</strong></td>
                        <td><strong>{{Usuario.descripcion}}</strong></td>
                        <td><strong>{{Usuario.muelle}}</strong></td>
                        <td><strong>{{Usuario.torre}}</strong></td>
                        <td><strong>{{Usuario.carga}}</strong></td>
                        <td>
                            <button class="btn btn-outline-danger me-2" title="ELIMINAR REGISTRO" v-on:click="EliminarRegistro(Usuario.id)">🗑️</button>
                            <button class="btn btn-outline-primary me-2" title="MODIFICAR REGISTRO" v-on:click="ModificarRegistro(Usuario.id)" data-bs-toggle="modal" data-bs-target="#ModificarUsuario">📝</button>
                            <button class="btn btn-outline-success me-2" type="button" id="button-addon1" data-bs-toggle="modal" data-bs-target="#Bill" v-on:click="NuevoBill(Usuario.id,Usuario.descripcion)" title="Bill Of Landing (BL)">🛒</button>

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

        <!--NODAL PARA AGREGAR un Registro-->

        <div class="modal" tabindex="-1" id="CrearUsuario">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title">
                            <div class="h4 pb-2 mb-2 text-light border-danger">
                                🗃 Buques de Carga
                            </div>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="table-info">Descripcion</th>
                                        <td>
                                            <input type="text" v-model="TxtDescripcion1" id="TxtDescripcion1" class="form-control me-1 border-danger" placeholder="Descripcion" maxlength="50" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Muelle</th>
                                        <td>
                                            <input type="text" v-model="TxtMuelle1" id="TxtMuelle1" class="form-control me-1 border-danger" placeholder="Carga" maxlength="20" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Torre de Carga</th>
                                        <td>
                                            <select v-model="TxtTorre1" id="TxtTorre1" class="form-select border-danger" aria-label="Default select example" placeholder="Torre de Carga" v-on:click="DatosT()">
                                                <option v-bind:value="Registro2.descripcion" v-for="Registro2 in Registro2" :key="Registro2.id">{{
                                                            Registro2.descripcion }}</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Carga</th>
                                        <td>
                                            <input type="text" v-model="TxtCarga1" id="TxtCarga1" class="form-control me-1 border-danger" placeholder="Carga" maxlength="20" />
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

        <!--NODAL PARA Modificar un Registro-->

        <div class="modal" tabindex="-1" id="ModificarUsuario">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title">
                            <div class="h4 pb-2 mb-2 text-light border-danger">
                                🗃 Modificar Buques de Carga
                            </div>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="table-info">Descripcion</th>
                                        <td>
                                            <input type="text" v-model="TxtDescripcion2" id="TxtDescripcion2" class="form-control me-1 border-danger" placeholder="Descripcion" maxlength="50" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Muelle</th>
                                        <td>
                                            <input type="text" v-model="TxtMuelle2" id="TxtMuelle2" class="form-control me-1 border-danger" placeholder="Carga" maxlength="20" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Torre de Carga</th>
                                        <td>
                                            <select v-model="TxtTorre2" id="TxtTorre2" class="form-select border-danger" aria-label="Default select example" placeholder="Torre de Carga" v-on:click="DatosT2()">
                                                <option v-bind:value="Registro2.descripcion" v-for="Registro2 in Registro2" :key="Registro2.id">{{
                                                            Registro2.descripcion }}</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Carga</th>
                                        <td>
                                            <input type="text" v-model="TxtCarga2" id="TxtCarga2" class="form-control me-1 border-danger" placeholder="Carga" maxlength="20" />
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
                        <button type="button" class="btn btn-outline-primary" v-on:click="ActualizarRegistro()" data-bs-dismiss="modal">💾 Actualizar</button>
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">❌ Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hasta Aqui-->

        <!--NODAL BILL OF LANDING-->

        <div class="modal" tabindex="-1" id="Bill">
            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title">
                            <div class="h4 pb-2 mb-2 text-light border-danger">
                                <label id="Label1">🗂 BILL OF LANDING </label>
                            </div>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="table-info">Numero</th>
                                        <th class="table-info">Rubro</th>
                                        <th class="table-info">Consignatario</th>
                                        <th class="table-info">Peso Neto</th>
                                        <th class="table-info">Pais Origen</th>
                                        <th class="table-info">Acciones</th>
                                    </tr>
                                    <tr v-for="Reg in Registro3" :key="Reg.id">
                                        <td>{{Reg.imo}}</td>
                                        <td>{{Reg.rubro}}</td>
                                        <td>{{Reg.consignatario}}</td>
                                        <td>{{Reg.peso_asignado}}</td>
                                        <td>{{Reg.pais_origen}}</td>
                                        <td><button type="button" class="btn btn-outline-danger me-2" title="ELIMINAR REGISTRO" v-on:click="EliminarBill(Reg.id)">🗑️</button>
                                            <button class="btn btn-outline-info me-2" type="button" id="button-addon1" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#Modificar_Bill" v-on:click="ModificarBill(Reg.id)" title="MODIFICAR REGISTRO">📝</button>
                                            <button class="btn btn-outline-info" type="button" id="button-addon1" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#Bodega" v-on:click="NuevoBodega(Reg.id_buque)" title="Bodegas de Carga">🫘</button>
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
                        <input type="hidden" id="ID_Buque" v-model="ID_Buque" />
                        <input type="hidden" id="NomBuque" v-model="NomBuque" />
                        <button type="button" class="btn btn-outline-primary me-2" title="NUEVO REGISTRO" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#NuevoBill">➕ Nuevo</button>
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">❌ Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal" tabindex="-1" id="NuevoBill">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title">
                            <div class="h4 pb-2 mb-2 text-light border-danger">
                                <label id="Label1">🗂 NUEVO BILL OF LANDING </label>
                            </div>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <th>
                                            Buque
                                        </th>
                                        <td>
                                            <input type="text" v-model="TxtBuqueB1" id="TxtBuqueB1" class="form-control me-1 border-danger" placeholder="BUQUE" maxlength="50" disabled>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Numero
                                        </th>
                                        <td>
                                            <input type="text" v-model="TxtNumeroB1" id="TxtNumeroB1" class="form-control me-1 border-danger" placeholder="NUMERO" maxlength="50">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Rubro
                                        </th>
                                        <td>
                                            <input type="text" v-model="TxtRubroB1" id="TxtRubroB1" class="form-control me-1 border-danger" placeholder="RUBRO" maxlength="50">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Consignatario
                                        </th>
                                        <td>
                                            <input type="text" v-model="TxtConsignatarioB1" id="TxtConsignatarioB1" class="form-control me-1 border-danger" placeholder="CONSIGNATARIO" maxlength="50">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Peso Asignado
                                        </th>
                                        <td>
                                            <input type="text" v-model="TxtPesoB1" id="TxtPesoB1" class="form-control me-1 border-danger" placeholder="PESO" maxlength="50">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Pais de Origen
                                        </th>
                                        <td>
                                            <select v-model="TxtPaisB1" id="TxtPaisB1" class="form-select border-danger" aria-label="Default select example" placeholder="Buque" v-on:click="">
                                                <option value="">Seleccione un país</option>
                                                <option value="Afganistan">Afganistán</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Alemania">Alemania</option>
                                                <option value="Arabia Saudita">Arabia Saudita</option>
                                                <option value="Argelia">Argelia</option>
                                                <option value="Samoa Americana">Samoa Americana</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguila">Anguila</option>
                                                <option value="Antartida">Antártida</option>
                                                <option value="Antigua y Barbuda">Antigua y Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaiyan">Azerbaiyán</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Barein">Baréin</option>
                                                <option value="Banglades">Bangladés</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Bielorrusia">Bielorrusia</option>
                                                <option value="Belgica">Bélgica</option>
                                                <option value="Belice">Belice</option>
                                                <option value="Benin">Benín</option>
                                                <option value="Bermudas">Bermudas</option>
                                                <option value="Birmania">Birmania</option>
                                                <option value="Butan">Bután</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia y Herzegovina">Bosnia y Herzegovina</option>
                                                <option value="Botsuana">Botsuana</option>
                                                <option value="Brasil">Brasil</option>
                                                <option value="Brunei">Brunéi</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cabo Verde">Cabo Verde</option>
                                                <option value="Camboya">Camboya</option>
                                                <option value="Camerun">Camerún</option>
                                                <option value="Canada">Canadá</option>
                                                <option value="Islas Caiman">Islas Caimán</option>
                                                <option value="Republica Centroafricana">República Centroafricana</option>
                                                <option value="Catar">Catar</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoras">Comoras</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Corea del Norte">Corea del Norte</option>
                                                <option value="Corea del Sur">Corea del Sur</option>
                                                <option value="Croacia">Croacia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Chipre">Chipre</option>
                                                <option value="Republica Checa">República Checa</option>
                                                <option value="Dinamarca">Dinamarca</option>
                                                <option value="Yibuti">Yibuti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Republica Dominicana">República Dominicana</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egipto">Egipto</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Guinea Ecuatorial">Guinea Ecuatorial</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Etiopia">Etiopía</option>
                                                <option value="Fiyi">Fiyi</option>
                                                <option value="Finlandia">Finlandia</option>
                                                <option value="Francia">Francia</option>
                                                <option value="Gabón">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Grecia">Grecia</option>
                                                <option value="Granada">Granada</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-Bisau">Guinea-Bisáu</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haití</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hungria">Hungría</option>
                                                <option value="Islandia">Islandia</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran">Irán</option>
                                                <option value="Irak">Irak</option>
                                                <option value="Irlanda">Irlanda</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italia">Italia</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japon">Japón</option>
                                                <option value="Jordania">Jordania</option>
                                                <option value="Kazajistan">Kazajistán</option>
                                                <option value="Kenia">Kenia</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kirguistan">Kirguistán</option>
                                                <option value="Laos">Laos</option>
                                                <option value="Letonia">Letonia</option>
                                                <option value="Libano">Líbano</option>
                                                <option value="Lesoto">Lesoto</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libia">Libia</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lituania">Lituania</option>
                                                <option value="Luxemburgo">Luxemburgo</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malaui">Malaui</option>
                                                <option value="Malasia">Malasia</option>
                                                <option value="Maldivas">Maldivas</option>
                                                <option value="Mali">Malí</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Islas Marshall">Islas Marshall</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauricio">Mauricio</option>
                                                <option value="Mexico">México</option>
                                                <option value="Micronesia">Micronesia</option>
                                                <option value="Moldavia">Moldavia</option>
                                                <option value="Monaco">Mónaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Marruecos">Marruecos</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Nueva Zelanda">Nueva Zelanda</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Níger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Noruega">Noruega</option>
                                                <option value="Oman">Omán</option>
                                                <option value="Pakistan">Pakistán</option>
                                                <option value="Palaos">Palaos</option>
                                                <option value="Panama">Panamá</option>
                                                <option value="Paises Bajos">Países Bajos</option>
                                                <option value="Papua Nueva Guinea">Papúa Nueva Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Perú</option>
                                                <option value="Filipinas">Filipinas</option>
                                                <option value="Polonia">Polonia</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Rumania">Rumanía</option>
                                                <option value="Rusia">Rusia</option>
                                                <option value="Ruanda">Ruanda</option>
                                                <option value="San Cristóbal y Nieves">San Cristóbal y Nieves</option>
                                                <option value="Santa Lucia">Santa Lucía</option>
                                                <option value="San Vicente y las Granadinas">San Vicente y las Granadinas</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Santo Tome y Principe">Santo Tomé y Príncipe</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leona">Sierra Leona</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Zimbabue">Zimbabue</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            IMO
                                        </th>
                                        <td>
                                            <input type="text" v-model="TxtImoB1" id="TxtImoB1" class="form-control me-1 border-danger" placeholder="IMO" maxlength="50">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Fecha Atraque
                                        </th>
                                        <td>
                                            <input type="date" v-model="TxtF1B1" id="TxtF1B1" class="form-control me-1 border-danger" placeholder="IMO" maxlength="50">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="ID_Buque" v-model="ID_Buque" />
                        <button type="button" class="btn btn-outline-primary me-2" title="GUARDAR REGISTRO" data-bs-dismiss="modal" v-on:click="Salvar_Bill()">💾 Salvar</button>
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">❌ Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal" tabindex="-1" id="Modificar_Bill">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title">
                            <div class="h4 pb-2 mb-2 text-light border-danger">
                                <label id="Label1">🗂 MODIFICAR BILL OF LANDING </label>
                            </div>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <th>
                                            Buque
                                        </th>
                                        <td>
                                            <input type="text" v-model="TxtBuqueB2" id="TxtBuqueB2" class="form-control me-1 border-danger" placeholder="BUQUE" maxlength="50" disabled>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Numero
                                        </th>
                                        <td>
                                            <input type="text" v-model="TxtNumeroB2" id="TxtNumeroB2" class="form-control me-1 border-danger" placeholder="NUMERO" maxlength="50">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Rubro
                                        </th>
                                        <td>
                                            <input type="text" v-model="TxtRubroB2" id="TxtRubroB2" class="form-control me-1 border-danger" placeholder="RUBRO" maxlength="50">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Consignatario
                                        </th>
                                        <td>
                                            <input type="text" v-model="TxtConsignatarioB2" id="TxtConsignatarioB2" class="form-control me-1 border-danger" placeholder="CONSIGNATARIO" maxlength="50">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Peso Asignado
                                        </th>
                                        <td>
                                            <input type="text" v-model="TxtPesoB2" id="TxtPesoB2" class="form-control me-1 border-danger" placeholder="PESO" maxlength="50">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Pais de Origen
                                        </th>
                                        <td>
                                            <select v-model="TxtPaisB2" id="TxtPaisB2" class="form-select border-danger" aria-label="Default select example" placeholder="Buque" v-on:click="">
                                                <option value="">Seleccione un país</option>
                                                <option value="Afganistan">Afganistán</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Alemania">Alemania</option>
                                                <option value="Arabia Saudita">Arabia Saudita</option>
                                                <option value="Argelia">Argelia</option>
                                                <option value="Samoa Americana">Samoa Americana</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguila">Anguila</option>
                                                <option value="Antartida">Antártida</option>
                                                <option value="Antigua y Barbuda">Antigua y Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaiyan">Azerbaiyán</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Barein">Baréin</option>
                                                <option value="Banglades">Bangladés</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Bielorrusia">Bielorrusia</option>
                                                <option value="Belgica">Bélgica</option>
                                                <option value="Belice">Belice</option>
                                                <option value="Benin">Benín</option>
                                                <option value="Bermudas">Bermudas</option>
                                                <option value="Birmania">Birmania</option>
                                                <option value="Butan">Bután</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia y Herzegovina">Bosnia y Herzegovina</option>
                                                <option value="Botsuana">Botsuana</option>
                                                <option value="Brasil">Brasil</option>
                                                <option value="Brunei">Brunéi</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cabo Verde">Cabo Verde</option>
                                                <option value="Camboya">Camboya</option>
                                                <option value="Camerun">Camerún</option>
                                                <option value="Canada">Canadá</option>
                                                <option value="Islas Caiman">Islas Caimán</option>
                                                <option value="Republica Centroafricana">República Centroafricana</option>
                                                <option value="Catar">Catar</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoras">Comoras</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Corea del Norte">Corea del Norte</option>
                                                <option value="Corea del Sur">Corea del Sur</option>
                                                <option value="Croacia">Croacia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Chipre">Chipre</option>
                                                <option value="Republica Checa">República Checa</option>
                                                <option value="Dinamarca">Dinamarca</option>
                                                <option value="Yibuti">Yibuti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Republica Dominicana">República Dominicana</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egipto">Egipto</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Guinea Ecuatorial">Guinea Ecuatorial</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Etiopia">Etiopía</option>
                                                <option value="Fiyi">Fiyi</option>
                                                <option value="Finlandia">Finlandia</option>
                                                <option value="Francia">Francia</option>
                                                <option value="Gabón">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Grecia">Grecia</option>
                                                <option value="Granada">Granada</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-Bisau">Guinea-Bisáu</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haití</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hungria">Hungría</option>
                                                <option value="Islandia">Islandia</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran">Irán</option>
                                                <option value="Irak">Irak</option>
                                                <option value="Irlanda">Irlanda</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italia">Italia</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japon">Japón</option>
                                                <option value="Jordania">Jordania</option>
                                                <option value="Kazajistan">Kazajistán</option>
                                                <option value="Kenia">Kenia</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kirguistan">Kirguistán</option>
                                                <option value="Laos">Laos</option>
                                                <option value="Letonia">Letonia</option>
                                                <option value="Libano">Líbano</option>
                                                <option value="Lesoto">Lesoto</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libia">Libia</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lituania">Lituania</option>
                                                <option value="Luxemburgo">Luxemburgo</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malaui">Malaui</option>
                                                <option value="Malasia">Malasia</option>
                                                <option value="Maldivas">Maldivas</option>
                                                <option value="Mali">Malí</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Islas Marshall">Islas Marshall</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauricio">Mauricio</option>
                                                <option value="Mexico">México</option>
                                                <option value="Micronesia">Micronesia</option>
                                                <option value="Moldavia">Moldavia</option>
                                                <option value="Monaco">Mónaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Marruecos">Marruecos</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Nueva Zelanda">Nueva Zelanda</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Níger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Noruega">Noruega</option>
                                                <option value="Oman">Omán</option>
                                                <option value="Pakistan">Pakistán</option>
                                                <option value="Palaos">Palaos</option>
                                                <option value="Panama">Panamá</option>
                                                <option value="Paises Bajos">Países Bajos</option>
                                                <option value="Papua Nueva Guinea">Papúa Nueva Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Perú</option>
                                                <option value="Filipinas">Filipinas</option>
                                                <option value="Polonia">Polonia</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Rumania">Rumanía</option>
                                                <option value="Rusia">Rusia</option>
                                                <option value="Ruanda">Ruanda</option>
                                                <option value="San Cristóbal y Nieves">San Cristóbal y Nieves</option>
                                                <option value="Santa Lucia">Santa Lucía</option>
                                                <option value="San Vicente y las Granadinas">San Vicente y las Granadinas</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Santo Tome y Principe">Santo Tomé y Príncipe</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leona">Sierra Leona</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Zimbabue">Zimbabue</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            IMO
                                        </th>
                                        <td>
                                            <input type="text" v-model="TxtImoB2" id="TxtImoB2" class="form-control me-1 border-danger" placeholder="IMO" maxlength="50">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Fecha Atraque
                                        </th>
                                        <td>
                                            <input type="date" v-model="TxtF1B2" id="TxtF1B2" class="form-control me-1 border-danger" placeholder="IMO" maxlength="50">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Fecha Zarpe
                                        </th>
                                        <td>
                                            <input type="date" v-model="TxtF2B2" id="TxtF2B2" class="form-control me-1 border-danger" placeholder="IMO" maxlength="50">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="ID_Buque2" v-model="ID_Buque2" />
                        <button type="button" class="btn btn-outline-primary me-2" title="GUARDAR REGISTRO" data-bs-dismiss="modal" v-on:click="Actualizar_Bill()">💾 Salvar</button>
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">❌ Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!--FIN BILL OF LANDING-->

        <!--MODAL BODEGAS-->

        <div class="modal" tabindex="-1" id="Bodega">
            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title">
                            <div class="h4 pb-2 mb-2 text-light border-danger">
                                <label id="Label2">🗂 BODEGAS DE CARGA </label>
                            </div>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <table class="table table-hover">
                                <tbody>

                                    <tr>
                                        <th class="table-info">Buque</th>
                                        <th class="table-info">Bodega</th>
                                        <th class="table-info">Producto</th>
                                        <th class="table-info">Empresa</th>
                                        <th class="table-info">Cantidad</th>
                                        <th class="table-info">Acciones</th>
                                    </tr>
                                    <tr v-for="Reg2 in Registro4" :key="Reg2.id">
                                        <td>{{Reg2.buque}}</td>
                                        <td>{{Reg2.bodega}}</td>
                                        <td>{{Reg2.producto}}</td>
                                        <td>{{Reg2.empresa}}</td>
                                        <td>{{Reg2.cantidad}}</td>
                                        <td><button type="button" class="btn btn-outline-danger me-2" title="ELIMINAR REGISTRO" v-on:click="EliminarBodega(Reg2.id,Reg2.id_buque)">🗑️</button>
                                            <button class="btn btn-outline-info me-2" type="button" id="button-addon1" data-bs-toggle="modal" data-bs-target="#Modificar_Bodega" v-on:click="ModificarBodega(Reg2.id)" title="MODIFICAR REGISTRO">📝</button>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="ID_Buque3" v-model="ID_Buque3" />
                        <button type="button" class="btn btn-outline-primary me-2" title="NUEVO REGISTRO" data-bs-toggle="modal" data-bs-target="#Bodega2" v-on:click="NuevaBodega()">➕ Nuevo</button>
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">❌ Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal" tabindex="-1" id="Bodega2">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title">
                            <div class="h4 pb-2 mb-2 text-light border-danger">
                                <label id="Label1">🗂 BODEGAS DE CARGA </label>
                            </div>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <table class="table table-hover">
                                <tbody>

                                    <tr>
                                        <th>
                                            Buque
                                        </th>
                                        <td>
                                            <input type="text" v-model="TxtBuqueB3" id="TxtBuqueB3" class="form-control me-1 border-danger" placeholder="BUQUE" maxlength="50" disabled>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>
                                            Peso Neto Buque
                                        </th>
                                        <td>
                                            <input type="text" v-model="TxtPesoB3" id="TxtPesoB3" class="form-control me-1 border-danger" placeholder="Producto" maxlength="50" disabled>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Bodega #
                                        </th>
                                        <td>
                                            <input type="text" v-model="TxtBodegaB3" id="TxtBodegaB3" class="form-control me-1 border-danger" placeholder="Bodega" maxlength="50">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Producto o Mercancia
                                        </th>
                                        <td>
                                            <input type="text" v-model="TxtMercanciaB3" id="TxtMercanciaB3" class="form-control me-1 border-danger" placeholder="Mercancia" maxlength="50">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Empresa
                                        </th>
                                        <td>
                                            <select v-model="TxtEmpresaB3" id="TxtEmpresaB3" class="form-select border-danger" aria-label="Default select example" placeholder="Empresas">
                                                <option v-bind:value="Registro6.empresa" v-for="Registro2 in Registro6" :key="Registro6.id">{{
                                                            Registro2.empresa }}</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Cantidad
                                        </th>
                                        <td>
                                            <input type="text" v-model="TxtCantidadB3" id="TxtCantidadB3" class="form-control me-1 border-danger" placeholder="Cantidad" maxlength="20" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="ID_Buque2" v-model="ID_Buque2" />
                        <button type="button" class="btn btn-outline-primary me-2" title="GUARDAR REGISTRO" data-bs-dismiss="modal" v-on:click="Salvar_Bodega()">💾 Salvar</button>
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">❌ Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal" tabindex="-1" id="Modificar_Bodega">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title">
                            <div class="h4 pb-2 mb-2 text-light border-danger">
                                <label id="Label1">🗂 MODIFICAR BODEGAS DE CARGA </label>
                            </div>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <table class="table table-hover">
                                <tbody>

                                    <tr>
                                        <th>
                                            Buque
                                        </th>
                                        <td>
                                            <input type="text" v-model="TxtBuqueB4" id="TxtBuqueB4" class="form-control me-1 border-danger" placeholder="BUQUE" maxlength="50" disabled>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>
                                            Peso Neto Buque
                                        </th>
                                        <td>
                                            <input type="text" v-model="TxtPesoB4" id="TxtPesoB4" class="form-control me-1 border-danger" placeholder="Producto" maxlength="20" disabled>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Bodega #
                                        </th>
                                        <td>
                                            <input type="text" v-model="TxtBodegaB4" id="TxtBodegaB4" class="form-control me-1 border-danger" placeholder="Bodega" maxlength="50">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Producto o Mercancia
                                        </th>
                                        <td>
                                            <input type="text" v-model="TxtMercanciaB4" id="TxtMercanciaB4" class="form-control me-1 border-danger" placeholder="Mercancia" maxlength="50">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Empresa
                                        </th>
                                        <td>
                                            <select v-model="TxtEmpresaB4" id="TxtEmpresaB4" class="form-select border-danger" aria-label="Default select example" placeholder="Empresas">
                                                <option v-bind:value="Registro6.empresa" v-for="Registro2 in Registro6" :key="Registro6.id">{{
                                                            Registro2.empresa }}</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Cantidad
                                        </th>
                                        <td>
                                            <input type="text" v-model="TxtCantidadB4" id="TxtCantidadB4" class="form-control me-1 border-danger" placeholder="Cantidad" maxlength="20" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="ID_Buque4" v-model="ID_Buque4" />
                        <button type="button" class="btn btn-outline-primary me-2" title="GUARDAR REGISTRO" data-bs-dismiss="modal" v-on:click="ActualizarBodega()">💾 Salvar</button>
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">❌ Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hasta Aqui-->

        <!--HASTA AQUI CUERPO DEL PROGRAMA-->


    </div>



    <script src="../controlador/js/vue.cjs.js"></script>
    <script src="../controlador/js/bootstrap.min.js"></script>
    <script src="../controlador/js/sweetalert2.js"></script>
    <!-- <script src="../DocumentosSti/controlador/script.js"></script>-->


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
                TxtBuscar: "",
                Usuarios: [],
                Registro2: [],
                Registro3: [],
                Registro4: [],
                Registro5: [],
                Registro6: [],
                TotalRegistros: 0,
                Pagina: 0,
                TotalPaginas: 0,
                Page: 1,
                TxtDescripcion1: "",
                TxtMuelle1: "",
                TxtTorre1: "",
                TxtCarga1: "",
                TxtDescripcion2: "",
                TxtMuelle2: "",
                TxtTorre2: "",
                TxtCarga2: "",
                ID_Buque: "",
                NomBuque: "",
                TxtBuqueB1: "",
                TxtPaisB1: "",
                TxtNumeroB1: "",
                TxtRubroB1: "",
                TxtConsignatarioB1: "",
                TxtPesoB1: "",
                TxtImoB1: "",
                TxtF1B1: "",
                TxtBuqueB2: "",
                TxtPaisB2: "",
                TxtNumeroB2: "",
                TxtRubroB2: "",
                TxtConsignatarioB2: "",
                TxtPesoB2: "",
                TxtImoB2: "",
                TxtF1B2: "",
                TxtF2B2: "",
                ID_Buque2: "",
                ID_Buque3: "",
                TxtBuqueB3: "",
                TxtMercanciaB3: "",
                TxtPesoB3: "",
                TxtEmpresaB3: "",
                TxtCantidadB3: "",
                TxtBodegaB3: "",
                TxtBuqueB4: "",
                TxtMercanciaB4: "",
                TxtPesoB4: "",
                TxtEmpresaB4: "",
                TxtEmpresaB4: "",
                TxtCantidadB4: "",
                TxtBodegaB4: "",
                ID_Buque4: "",
                Id1: ""
            }
        },
        //Cuando inicia la Aplicacion
        mounted() {
            this.ListarRegistros();
            this.TorreC();
            this.Empresas();
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

                let NB = this.TxtBuscar;

                if (NB == "") {

                    accion1 = "ListarB";

                } else {

                    accion1 = "ListarBM";

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

            filterKey() {

                //BUSCAR EN LA BASE DE DATOS

                let Buscar = this.TxtBuscar;
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

                let NB = this.TxtBuscar;

                if (NB == "") {

                    accion1 = "ListarB";

                } else {

                    accion1 = "ListarBM";

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

                this.TxtDescripcion1 = "";
                this.TxtCarga1 = "";
                this.TxtMuelle1 = "";

            },

            SalvarRegistro() {

                let Des1 = this.TxtDescripcion1;
                let Car1 = this.TxtCarga1;
                let Mue1 = this.TxtMuelle1;
                let Tor1 = document.getElementById("TxtTorre1").value;
                let accion1 = "InsertarM";

                if (Des1 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR LA DESCRIPCION DEL MUELLE!!',
                        footer: ''
                    })
                    return;
                }

                if (Car1 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR LA CARGA DEL BUQUE!!',
                        footer: ''
                    })
                    return;
                }

                if (Mue1 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL MUELLE DE CARGA!!',
                        footer: ''
                    })
                    return;
                }

                if (Mue1 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE ESCOGER LA TORRE DE CARGA!!',
                        footer: ''
                    })
                    return;
                }


                let json = {
                    "descripcion": Des1,
                    "muelle": Mue1,
                    "carga": Car1,
                    "torre": Tor1
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

                let accion1 = "ListarBM2";

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
                            this.TxtDescripcion2 = this.Usuarios2.descripcion;
                            this.TxtMuelle2 = this.Usuarios2.muelle;
                            this.TxtTorre2 = this.Usuarios2.torre;
                            this.TxtCarga2 = this.Usuarios2.carga;
                            this.Id1 = this.Usuarios2.id;
                        }
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();

            },

            ActualizarRegistro() {

                let Des1 = this.TxtDescripcion2;
                let Car1 = this.TxtCarga2;
                let Mue1 = this.TxtMuelle2;
                let Tor1 = document.getElementById("TxtTorre2").value;
                let ID1 = document.getElementById("Id1").value;
                let accion1 = "ModificarTB";

                if (Des1 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR LA DESCRIPCION DEL MUELLE!!',
                        footer: ''
                    })
                    return;
                }

                if (Car1 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR LA CARGA DEL BUQUE!!',
                        footer: ''
                    })
                    return;
                }

                if (Mue1 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL MUELLE DE CARGA!!',
                        footer: ''
                    })
                    return;
                }

                if (Mue1 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE ESCOGER LA TORRE DE CARGA!!',
                        footer: ''
                    })
                    return;
                }

                let json = {
                    "descripcion": Des1,
                    "muelle": Mue1,
                    "carga": Car1,
                    "torre": Tor1
                };

                fetch("../controlador/base.php?accion1=" + accion1 + '&e=' + ID1, {
                        method: "POST",
                        body: JSON.stringify(json)
                    })
                    //console.log(json)
                    .then(respuesta3 => respuesta3.json())
                    .then((datosRespuesta3 => {
                        console.clear;
                        console.log(datosRespuesta3)
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Registro Actualizado Exitosamente!',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        this.$forceUpdate();
                        this.ListarRegistros();
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();

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

                            let accion1 = "EliminarTB";

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

            TorreC() {

                let accion1 = "CboTorreC";

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

            DatosT() {
                let accion2 = "ListarTE";
                let e2 = this.TxtTorre1;


                fetch("../controlador/base.php?accion1=" + accion2 + '&e=' + e2, {
                        //method:"POST",
                        //body:(e)
                    })
                    .then(respuesta2 => respuesta2.json())
                    .then((datosRespuesta2 => {
                        //Respuesta datos que devuelve el JSON
                        //console.log(datosRespuesta2);
                        this.Usuarios2 = []
                        if (typeof datosRespuesta2[0].success === 'undefined') {
                            this.Registro3 = datosRespuesta2[0];
                            //console.log(datosRespuesta2);
                            this.TxtCarga1 = this.Registro3.tipo_distribucion;

                        }
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();
            },

            DatosT2() {
                let accion2 = "ListarTE";
                let e2 = this.TxtTorre2;


                fetch("../controlador/base.php?accion1=" + accion2 + '&e=' + e2, {
                        //method:"POST",
                        //body:(e)
                    })
                    .then(respuesta2 => respuesta2.json())
                    .then((datosRespuesta2 => {
                        //Respuesta datos que devuelve el JSON
                        //console.log(datosRespuesta2);
                        this.Usuarios2 = []
                        if (typeof datosRespuesta2[0].success === 'undefined') {
                            this.Registro3 = datosRespuesta2[0];
                            //console.log(datosRespuesta2);
                            this.TxtCarga2 = this.Registro3.tipo_distribucion;

                        }
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();
            },

            NuevoBill(e, f) {


                this.ID_Buque = e;
                this.NomBuque = f;

                let accion1;

                accion1 = "ListarBill";

                let Pag = 1;
                let label = document.getElementById("Label1");

                fetch("../controlador/base.php?accion1=" + accion1 + '&e=' + e, {
                        //method:"POST",
                        //body:JSON.stringify(accion1)
                    })
                    .then(respuesta => respuesta.json())
                    .then((datosRespuesta => {
                        //Respuesta datos que devuelve el JSON
                        console.log(datosRespuesta);
                        this.Registro3 = []
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

                            this.Registros2 = datosRespuesta.slice(Inicio, Fin);
                            this.Registro3 = this.Registros2; //Llena la variable para mostrar en la tabla
                            label.innerHTML = "🗂 BILL OF LANDING - " + this.Registro3[0].buque;
                            this.TxtBuqueB1 = f;

                            this.$forceUpdate();
                        }
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();

            },

            Salvar_Bill() {

                let N1 = this.NomBuque;
                let N2 = this.TxtNumeroB1;
                let N3 = this.TxtRubroB1;
                let N4 = this.TxtConsignatarioB1;
                let N5 = this.TxtPesoB1;
                let N6 = document.getElementById("TxtPaisB1").value;
                let N7 = this.TxtImoB1;
                let N8 = this.ID_Buque;
                let N9 = this.TxtF1B1;


                let accion1 = "SalvarBill";

                if (N2 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL NUMERO!!',
                        footer: ''
                    })
                    return;
                }

                if (N3 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL RUBRO!!',
                        footer: ''
                    })
                    return;
                }

                if (N4 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL CONSIGNATARIO!!',
                        footer: ''
                    })
                    return;
                }

                if (N5 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL PESO ASIGNADO!!',
                        footer: ''
                    })
                    return;
                }

                if (N6 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE ESCOGER EL PAIS DE ORIGEN!!',
                        footer: ''
                    })
                    return;
                }

                if (N7 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL IMO!!',
                        footer: ''
                    })
                    return;
                }

                if (N9 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR LA FECHA DE ATRAQUE!!',
                        footer: ''
                    })
                    return;
                }

                let json = {

                    "buque": N1,
                    "numero": N2,
                    "rubro": N3,
                    "consig": N4,
                    "peso": N5,
                    "pais": N6,
                    "imo": N7,
                    "id_buq": N8,
                    "fechaa": N9

                };

                fetch("../controlador/base.php?accion1=" + accion1, {
                        method: "POST",
                        body: JSON.stringify(json)
                    })
                    .then(respuesta3 => respuesta3.json())
                    .then((datosRespuesta3 => {
                        console.log(datosRespuesta3.success);

                        if (datosRespuesta3.success == 1) {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'REGISTRO GUARDADO !!',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'GUARDAR',
                                text: 'NO PUEDE INGRESAR UN IMO CON LA MISMA FECHA DEL MISMO BUQUE!!',
                                footer: ''
                            })
                        }
                        this.$forceUpdate();
                        this.NuevoBill();
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();

            },

            EliminarBill(e) {

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

                            let accion1 = "EliminarBill";

                            fetch("../controlador/base.php?accion1=" + accion1 + '&e=' + e, {
                                    //method:"POST",
                                    //body:(e)
                                })

                                .then(respuesta => respuesta.json())
                                .then((datosRespuesta => {
                                    //Respuesta datos que devuelve el JSON
                                    console.log(datosRespuesta);
                                    this.$forceUpdate();
                                    this.NuevoBill();
                                }))

                        } else {
                            // Dijeron que no

                        }
                    });

            },

            ModificarBill(e) {

                if (localStorage.getItem("Usuario")) {
                    //Nada  
                } else {
                    window.location.href = '/'
                }

                if (localStorage.getItem("Usuario")) {
                    this.User = JSON.parse(localStorage.getItem("Usuario"));
                }

                let accion1 = "ListarBill2";
                let P = "LL"

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
                            this.TxtBuqueB2 = this.Usuarios2.buque;
                            this.TxtNumeroB2 = this.Usuarios2.numero;
                            this.TxtRubroB2 = this.Usuarios2.rubro;
                            this.TxtConsignatarioB2 = this.Usuarios2.consignatario;
                            this.TxtPesoB2 = this.Usuarios2.peso_asignado;
                            this.TxtPaisB2 = this.Usuarios2.pais_origen;
                            this.TxtImoB2 = this.Usuarios2.imo;
                            this.TxtF1B2 = this.Usuarios2.fecha_atraque;
                            this.ID_Buque2 = this.Usuarios2.id;

                        }
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();

            },

            Actualizar_Bill() {

                let N1 = this.NomBuque;
                let N2 = this.TxtNumeroB2;
                let N3 = this.TxtRubroB2;
                let N4 = this.TxtConsignatarioB2;
                let N5 = this.TxtPesoB2;
                let N6 = document.getElementById("TxtPaisB2").value;
                let N7 = this.TxtImoB2;
                let N8 = this.ID_Buque;
                let N9 = this.TxtF1B2;
                let N10 = this.TxtF2B2;
                let N11 = this.ID_Buque2;


                let accion1 = "ActualizarBill";

                if (N2 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL NUMERO!!',
                        footer: ''
                    })
                    return;
                }

                if (N3 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL RUBRO!!',
                        footer: ''
                    })
                    return;
                }

                if (N4 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL CONSIGNATARIO!!',
                        footer: ''
                    })
                    return;
                }

                if (N5 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL PESO ASIGNADO!!',
                        footer: ''
                    })
                    return;
                }

                if (N6 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE ESCOGER EL PAIS DE ORIGEN!!',
                        footer: ''
                    })
                    return;
                }

                if (N7 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL IMO!!',
                        footer: ''
                    })
                    return;
                }

                if (N9 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR LA FECHA DE ATRAQUE!!',
                        footer: ''
                    })
                    return;
                }

                if (N10 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR LA FECHA DE ZARPE!!',
                        footer: ''
                    })
                    return;
                }

                let json = {

                    "buque": N1,
                    "numero": N2,
                    "rubro": N3,
                    "consig": N4,
                    "peso": N5,
                    "pais": N6,
                    "imo": N7,
                    "id_buq": N8,
                    "fechaa": N9,
                    "fechaz": N10

                };

                fetch("../controlador/base.php?accion1=" + accion1 + '&e=' + N11, {
                        method: "POST",
                        body: JSON.stringify(json)
                    })
                    .then(respuesta3 => respuesta3.json())
                    .then((datosRespuesta3 => {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'REGISTRO MODIFICADO !!',
                            showConfirmButton: false,
                            timer: 1500
                        })

                        this.$forceUpdate();
                        this.NuevoBill(N8, N11);
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();

            },

            NuevoBodega(e) {

                let accion1;

                accion1 = "ListarBodega";

                let Pag = 1;
                let label = document.getElementById("Label2");
                this.ID_Buque3 = e;

                fetch("../controlador/base.php?accion1=" + accion1 + '&e=' + e, {
                        //method:"POST",
                        //body:JSON.stringify(accion1)
                    })
                    .then(respuesta => respuesta.json())
                    .then((datosRespuesta => {
                        //Respuesta datos que devuelve el JSON
                        console.log(datosRespuesta);
                        this.Registro4 = []
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

                            this.Registros5 = datosRespuesta.slice(Inicio, Fin);
                            this.Registro4 = this.Registros5; //Llena la variable para mostrar en la tabla
                            label.innerHTML = "🗂 BODEGA DE CARGA - " + this.Registro4[0].buque;

                            this.$forceUpdate();
                        }
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();

            },

            NuevaBodega() {

                let Id = this.ID_Buque3;

                let accion1 = "ListarBodega2";

                fetch("../controlador/base.php?accion1=" + accion1 + '&e=' + Id, {
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
                            this.TxtBuqueB3 = this.Usuarios2.buque;
                            this.TxtPesoB3 = this.Usuarios2.peso_asignado;
                        }
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();

            },

            Salvar_Bodega() {
                let N1 = this.TxtBuqueB3; //Buque
                let N2 = this.TxtPesoB3; //Peso Neto
                let N3 = this.TxtBodegaB3; //Bodega
                let N4 = this.TxtMercanciaB3; //Mercancia
                let N5 = this.TxtEmpresaB3; //Empresa
                let N6 = this.TxtCantidadB3 // Cantidad
                let N7 = this.ID_Buque3;


                let accion1 = "Salvar_Bodega";

                if (N1 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL BUQUE!!',
                        footer: ''
                    })
                    return;
                }

                if (N2 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL PESO NETO!!',
                        footer: ''
                    })
                    return;
                }

                if (N3 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL NOMBRE DE LA BODEGA!!',
                        footer: ''
                    })
                    return;
                }

                if (N4 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR LA MERCANCIA O PRODUCTO!!',
                        footer: ''
                    })
                    return;
                }

                if (N5 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'INGRESAR LA EMPRESA!!',
                        footer: ''
                    })
                    return;
                }

                if (N6 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR LA CANTIDAD!!',
                        footer: ''
                    })
                    return;
                }

                let json = {

                    "buque": N1,
                    "peso": N2,
                    "bodega": N3,
                    "producto": N4,
                    "empresa": N5,
                    "cantidad": N6,
                    "id_buque": N7

                };

                fetch("../controlador/base.php?accion1=" + accion1, {
                        method: "POST",
                        body: JSON.stringify(json)
                    })
                    .then(respuesta3 => respuesta3.json())
                    .then((datosRespuesta3 => {
                        console.log(datosRespuesta3.success);

                        if (datosRespuesta3.success == 1) {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'REGISTRO GUARDADO !!',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'GUARDAR',
                                text: 'NO PUEDE INGRESAR UNA BODEGA CON EL MISMO PRODUCTO Y FECHA DE UNA EMPRESA!!',
                                footer: ''
                            })
                        }
                        this.$forceUpdate();
                        this.NuevoBodega(N7);
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();
            },

            EliminarBodega(e, f) {

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

                            let accion1 = "EliminarBodega";

                            fetch("../controlador/base.php?accion1=" + accion1 + '&e=' + e, {
                                    //method:"POST",
                                    //body:(e)
                                })

                                .then(respuesta => respuesta.json())
                                .then((datosRespuesta => {
                                    //Respuesta datos que devuelve el JSON
                                    console.log(datosRespuesta);
                                    this.$forceUpdate();
                                    this.NuevoBodega(f);
                                }))

                        } else {
                            // Dijeron que no

                        }
                    });

            },

            ModificarBodega(e) {

                let accion1 = "ListarBodega3";
                this.ID_Buque4 = e;

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
                            this.TxtBuqueB4 = this.Usuarios2.buque;
                            this.TxtPesoB4 = this.Usuarios2.peso_neto;
                            this.TxtBodegaB4 = this.Usuarios2.bodega;
                            this.TxtMercanciaB4 = this.Usuarios2.producto;
                            this.TxtEmpresaB4 = this.Usuarios2.empresa;
                            this.TxtCantidadB4 = this.Usuarios2.cantidad;
                        }
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();

            },

            ActualizarBodega() {
                let N1 = this.TxtBuqueB4; //Buque
                let N2 = this.TxtPesoB4; //Peso Neto
                let N3 = this.TxtBodegaB4; //Bodega
                let N4 = this.TxtMercanciaB4; //Mercancia
                let N5 = this.TxtEmpresaB4; //Empresa
                let N6 = this.TxtCantidadB4 // Cantidad
                let N7 = this.ID_Buque3;
                let e = this.ID_Buque4;

                let accion1 = "ActualizarBodega";

                if (N1 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL BUQUE!!',
                        footer: ''
                    })
                    return;
                }

                if (N2 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL PESO NETO!!',
                        footer: ''
                    })
                    return;
                }

                if (N3 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL NOMBRE DE LA BODEGA!!',
                        footer: ''
                    })
                    return;
                }

                if (N4 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR LA MERCANCIA O PRODUCTO!!',
                        footer: ''
                    })
                    return;
                }

                if (N5 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'INGRESAR LA EMPRESA!!',
                        footer: ''
                    })
                    return;
                }

                if (N6 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR LA CANTIDAD!!',
                        footer: ''
                    })
                    return;
                }

                let json = {

                    "buque": N1,
                    "peso": N2,
                    "bodega": N3,
                    "producto": N4,
                    "empresa": N5,
                    "cantidad": N6,
                    "id_buque": N7

                };

                fetch("../controlador/base.php?accion1=" + accion1 + "&e=" + e, {
                        method: "POST",
                        body: JSON.stringify(json)
                    })
                    .then(respuesta3 => respuesta3.json())
                    .then((datosRespuesta3 => {
                        console.log(datosRespuesta3.success);

                        if (datosRespuesta3.success == 1) {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'REGISTRO MODIFICADO !!',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        }
                        this.$forceUpdate();
                        this.NuevoBodega(N7);
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();

            },

            Empresas() {
                let accion1 = "ListarEmpresas";

                fetch("../controlador/base.php?accion1=" + accion1, {
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
            }


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
        width: 1000px;
        height: 50%;
    }
</style>