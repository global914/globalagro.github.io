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
                <label><strong class="text-black fs-5 me-4">👤 USUARIOS</strong></label>
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
                    <input type="text" required class="form-control border-danger me-2" placeholder="Cedula y Enter para Actualizar" aria-label="Username" aria-describedby="basic-addon1" v-on:keyup="filterKey" v-model="TxtBuscar">
                    <button style="border-radius: 14px" class="btn btn-outline-primary border-danger" type="button" id="button-addon1" data-bs-toggle="modal" data-bs-target="#CrearUsuario" v-on:click="NuevoUsuario()" title="CREAR USUARIO">➕
                    </button>
                </div>
            </div>

            <!-- HASTA AQUI -->
            <table class="table table-striped table-hover">
                <thead>
                    <tr class="table-dark">
                        <th scope="col">Nombre</th>
                        <th scope="col">Cedula</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Indicador</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="Usuario in Usuarios" :key="Usuario.id">
                        <td><strong>{{Usuario.nombre}}</strong></td>
                        <td><strong>{{Usuario.cedula}}</strong></td>
                        <td><strong>{{Usuario.cargo}}</strong></td>
                        <td><strong>{{Usuario.indicador}}</strong></td>
                        <td>
                            <button class="btn btn-outline-danger border-danger me-2" title="ELIMINAR REGISTRO" v-on:click="EliminarUsuario(Usuario.cedula)">🗑️</button>
                            <button class="btn btn-outline-primary border-danger" title="MODIFICAR REGISTRO" v-on:click="ModificarUsuario(Usuario.cedula)" data-bs-toggle="modal" data-bs-target="#ModificarUsuario">📝</button>
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

        <!--NODAL PARA Ingresar un Registro-->

        <div class="modal" tabindex="-1" id="CrearUsuario">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title">
                            <div class="h4 pb-2 mb-2 text-light border-danger">
                                👤 Crear Usuario
                            </div>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="table-info">Indicador o Email</th>
                                        <td>
                                            <input type="email" v-model="TxtIndicador1" id="TxtIndicador1" class="form-control me-1 border-danger" placeholder="Indicador de Usuario" maxlength="50" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Nombre Usuario</th>
                                        <td>
                                            <input type="text" v-model="TxtNombre1" id="TxtNombre1" class="form-control me-1 border-danger" placeholder="Nombre del Usuario" maxlength="50" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Cedula</th>
                                        <td>
                                            <input type="text" v-model="TxtCedula1" id="TxtCedula1" class="form-control me-1 border-danger" placeholder="Cedula de Identidad" maxlength="50" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Cargo</th>
                                        <td>
                                            <input type="text" v-model="TxtCargo1" id="TxtCargo1" class="form-control me-1 border-danger" placeholder="Cargo del Usuario" maxlength="50" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Roles</th>
                                        <td>
                                            <select class="form-select border-danger" aria-label="Default select example" v-model="TxtNivel1" id="TxtNivel1" placeholder="Seleccione Localidad">
                                                <option value="Admin">Administrador</option>
                                                <option value="Logistica1">Logistica 1</option>
                                                <option value="Logistica2">Logistica 2</option>
                                                <option value="Logistica3">Logistica 3</option>
                                                <option value="Logistica4">Logistica 4</option>
                                                <option value="Logistica5">Logistica 5</option>
                                                <option value="Chequeador">Chequeador</option>
                                                <option value="Despachador">Despachador</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Clave</th>
                                        <td>
                                            <input type="text" v-model="TxtClave1" id="TxtClave1" class="form-control me-1 border-danger" placeholder="Clave de Acceso" maxlength="50" />
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
                        <button type="button" class="btn btn-outline-primary" v-on:click="SalvarUsuario()" data-bs-dismiss="modal">💾 Guardar</button>
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
                                👤 Modificar Usuario
                            </div>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="table-info">Indicador o Email</th>
                                        <td>
                                            <input type="text" v-model="TxtIndicador2" id="TxtIndicador2" class="form-control me-1 border-danger" placeholder="Indicador de Usuario" maxlength="50" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Nombre Usuario</th>
                                        <td>
                                            <input type="text" v-model="TxtNombre2" id="TxtNombre2" class="form-control me-1 border-danger" placeholder="Nombre del Usuario" maxlength="50" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Cedula</th>
                                        <td>
                                            <input type="text" v-model="TxtCedula2" id="TxtCedula2" class="form-control me-1 border-danger" placeholder="Cedula de Identidad" maxlength="50" @keydown="filterKey" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Cargo</th>
                                        <td>
                                            <input type="text" v-model="TxtCargo2" id="TxtCargo2" class="form-control me-1 border-danger" placeholder="Cargo del Usuario" maxlength="50" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Roles</th>
                                        <td>
                                            <select class="form-select border-danger" aria-label="Default select example" v-model="TxtNivel2" id="TxtNivel2" placeholder="Seleccione Localidad">
                                                <option value="Admin">Administrador</option>
                                                <option value="Logistica1">Logistica 1</option>
                                                <option value="Logistica2">Logistica 2</option>
                                                <option value="Logistica3">Logistica 3</option>
                                                <option value="Logistica4">Logistica 4</option>
                                                <option value="Logistica5">Logistica 5</option>
                                                <option value="Chequeador">Chequeador</option>
                                                <option value="Despachador">Despachador</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Clave</th>
                                        <td>
                                            <input type="text" v-model="TxtClave2" id="TxtClave2" class="form-control me-1 border-danger" placeholder="Clave de Acceso" maxlength="50" />
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
                        <button type="button" class="btn btn-outline-primary" v-on:click="ActualizarUsuario()" data-bs-dismiss="modal">💾 Actualizar</button>
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">❌ Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hasta Aqui-->

        <!--HASTA AQUI CUERPO DEL PROGRAMA-->

    </div>
    </div>



    <script src="../controlador/js/vue.cjs.js"></script>
    <script src="../controlador/js/bootstrap.min.js"></script>
    <script src="../controlador/js/sweetalert2.js"></script>


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
                TxtBuscar: "",
                Usuarios: [],
                TotalRegistros: 0,
                Pagina: 0,
                TotalPaginas: 0,
                Page: 1,
                TxtIndicador1: "",
                TxtNombre1: "",
                TxtCedula1: "",
                TxtCargo1: "",
                TxtNivel1: "",
                TxtClave1: "",
                TxtIndicador2: "",
                TxtNombre2: "",
                TxtCedula2: "",
                TxtCargo2: "",
                TxtNivel2: "",
                TxtClave2: "",
            }
        },
        //Cuando inicia la Aplicacion
        mounted() {
            this.ListarUsuarios();
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

            ListarUsuarios(Pag) {
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

                    accion1 = "ListarU";

                } else {

                    accion1 = "ListarUM";

                }

                if (Pag == undefined) {
                    Pag = 1;
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
                    this.ListarUsuarios(1);
                }

                if (localStorage.getItem("Usuario")) {
                    this.User = JSON.parse(localStorage.getItem("Usuario"));
                }

                let UserLevel = this.User[0].rol;
                let ComplejoUser = this.User[0].localidad;

                let accion1;

                let NB = this.TxtBuscar;

                if (NB == "") {

                    accion1 = "ListarU";

                } else {

                    accion1 = "ListarUM";

                }

                if (Pag == undefined) {
                    Pag = 1;
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

            NuevoUsuario() {

                if (localStorage.getItem("Usuario")) {
                    //Nada  
                } else {
                    window.location.href = '/'
                }

                if (localStorage.getItem("Usuario")) {
                    this.User = JSON.parse(localStorage.getItem("Usuario"));
                }

                this.TxtIndicador1 = "";
                this.TxtNombre1 = "";
                this.TxtCedula1 = "";
                this.TxtClave1 = "";
                this.TxtCargo1 = "";
                this.TxtNivel1 = "";

            },

            SalvarUsuario() {

                let Esp1 = this.TxtIndicador1;
                let Nom1 = this.TxtNombre1;
                let Ced1 = this.TxtCedula1;
                let Cla1 = this.TxtClave1;
                let Car1 = this.TxtCargo1;
                let Niv1 = document.getElementById("TxtNivel1").value;;
                let accion1 = "InsertarU";

                if (Esp1 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL INDICADOR O EMAIL DEL USUARIO!!',
                        footer: ''
                    })
                    return;
                }

                if (Nom1 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL NOMBRE DEL USUARIO!!',
                        footer: ''
                    })
                    return;
                }

                if (Ced1 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL NRO DE CI DEL USUARIO!!',
                        footer: ''
                    })
                    return;
                }


                if (Cla1 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR LA CLAVE DE ACCESO DEL USUARIO!!',
                        footer: ''
                    })
                    return;
                }

                if (Car1 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL CARGO DEL USUARIO!!',
                        footer: ''
                    })
                    return;
                }

                if (Niv1 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE ESCOGER EL ROL DEL USUARIO!!',
                        footer: ''
                    })
                    return;
                }

                //Metodo para Validar la Clave

                let ValidClave1 = Cla1.length; // Verifica la longitud de la cadena
                let ValidClave2 = /[0-9]/g; // Verifica la Candena Contiene Numeros
                let ValidClave3 = /[@#$%^&*.]/g; // Verifica la Candena Contiene Numeros
                var matches1 = Cla1.match(ValidClave2);
                var matches2 = Cla1.match(ValidClave3);
                //console.log(matches2);

                if (ValidClave1 < 8) {
                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'EL PASSWORD DEBE CONTENER MINIMO 8 CARACTERES!!',
                        footer: ''
                    })
                    return;
                }

                if (matches1 === null) {
                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'EL PASSWORD DEBE CONTENER CARACTER NUMERICO!!',
                        footer: ''
                    })
                    return;
                }

                if (matches2 === null) {
                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'EL PASSWORD DEBE CONTENER UN CARACTER ESPECIAL !@#$%^&*.!!',
                        footer: ''
                    })
                    return;
                }

                let json = {
                    "indicador": Esp1,
                    "nombre": Nom1,
                    "cedula": Ced1,
                    "clave": Cla1,
                    "cargo": Car1,
                    "nivel": Niv1
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
                                text: 'YA EXISTE UN REGISTRO CON EL MISMO NRO. DE CI !!',
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
                        this.ListarUsuarios();
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();

            },

            ModificarUsuario(e) {

                if (localStorage.getItem("Usuario")) {
                    //Nada  
                } else {
                    window.location.href = '/'
                }

                if (localStorage.getItem("Usuario")) {
                    this.User = JSON.parse(localStorage.getItem("Usuario"));
                }

                let accion1 = "ListarUM";

                fetch(this.Direccion + accion1 + '&e=' + e, {
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
                            this.TxtIndicador2 = this.Usuarios2.indicador;
                            this.TxtNombre2 = this.Usuarios2.nombre;
                            this.TxtCedula2 = this.Usuarios2.cedula;
                            this.TxtCargo2 = this.Usuarios2.cargo;
                            this.TxtClave2 = this.Usuarios2.contraseNa;
                            this.TxtNivel2 = this.Usuarios2.rol;

                        }
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();

            },

            ActualizarUsuario() {

                let Esp2 = this.TxtIndicador2;
                let Nom2 = this.TxtNombre2;
                let Ced2 = this.TxtCedula2;
                let Car2 = this.TxtCargo2;
                let Cla2 = this.TxtClave2;
                let Niv2 = document.getElementById("TxtNivel2").value;
                let accion1 = "ModificarU";

                if (Esp2 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL INDICADOR DEL ESPECIALISTA!!',
                        footer: ''
                    })
                    return;
                }

                if (Nom2 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL NOMBRE DEL USUARIO!!',
                        footer: ''
                    })
                    return;
                }

                if (Ced2 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL NRO DE CI DEL USUARIO!!',
                        footer: ''
                    })
                    return;
                }

                if (Car2 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL CARGO DEL USUARIO!!',
                        footer: ''
                    })
                    return;
                }

                if (Cla2 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR LA CLAVE DE ACCESO DEL USUARIO!!',
                        footer: ''
                    })
                    return;
                }

                if (Niv2 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE ESCOGER EL ROL DEL USUARIO!!',
                        footer: ''
                    })
                    return;
                }

                //Metodo para Validar la Clave

                let ValidClave1 = Cla2.length; // Verifica la longitud de la cadena
                let ValidClave2 = /[0-9]/g; // Verifica la Candena Contiene Numeros
                let ValidClave3 = /[@#$%^&*.]/g; // Verifica la Candena Contiene Numeros
                var matches1 = Cla2.match(ValidClave2);
                var matches2 = Cla2.match(ValidClave3);
                //console.log(matches2);

                if (ValidClave1 < 8) {
                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'EL PASSWORD DEBE CONTENER MINIMO 8 CARACTERES!!',
                        footer: ''
                    })
                    return;
                }

                if (matches1 === null) {
                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'EL PASSWORD DEBE CONTENER CARACTER NUMERICO!!',
                        footer: ''
                    })
                    return;
                }

                if (matches2 === null) {
                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'EL PASSWORD DEBE CONTENER UN CARACTER ESPECIAL !@#$%^&*.!!',
                        footer: ''
                    })
                    return;
                }

                let ID1 = "2";

                let json = {
                    "indicador": Esp2,
                    "nombre": Nom2,
                    "cedula": Ced2,
                    "cargo": Car2,
                    "clave": Cla2,
                    "nivel": Niv2
                };

                fetch(this.Direccion + accion1 + '&e=' + ID1, {
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
                        this.ListarUsuarios();
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();

            },

            EliminarUsuario(e) {

                Swal
                    .fire({
                        title: "Eliminar Usuario",
                        text: e,
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: "✔️ Sí, eliminar",
                        cancelButtonText: "❌ Cancelar",
                    })
                    .then(resultado => {
                        if (resultado.value) {
                            // Hicieron click en "Sí"

                            let accion1 = "EliminarU";

                            fetch(this.Direccion + accion1 + '&e=' + e, {
                                    //method:"POST",
                                    //body:(e)
                                })

                                .then(respuesta => respuesta.json())
                                .then((datosRespuesta => {
                                    //Respuesta datos que devuelve el JSON
                                    console.log(datosRespuesta);
                                    this.$forceUpdate();
                                    this.ListarUsuarios();
                                }))

                        } else {
                            // Dijeron que no

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
        width: 1000px;
        height: 50%;
    }
</style>