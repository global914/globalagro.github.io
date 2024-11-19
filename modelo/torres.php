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
                <label><strong class="text-black fs-5 me-4">🚛 TORRES DE CARGA</strong></label>
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
                        <th scope="col">Descripcion</th>
                        <th scope="col">Tipo Distribucion</th>
                        <th scope="col">Tipo Carga</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="Usuario in Usuarios" :key="Usuario.id">
                        <td><strong>{{Usuario.descripcion}}</strong></td>
                        <td><strong>{{Usuario.tipo_distribucion}}</strong></td>
                        <td><strong>{{Usuario.tipo_carga}}</strong></td>
                        <td>
                            <button class="btn btn-outline-danger border-danger me-2" title="ELIMINAR REGISTRO" v-on:click="EliminarRegistro(Usuario.id)">🗑️</button>
                            <button class="btn btn-outline-primary border-danger" title="MODIFICAR REGISTRO" v-on:click="ModificarRegistro(Usuario.id)" data-bs-toggle="modal" data-bs-target="#ModificarUsuario">📝</button>
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
                                🚛 Nueva Torre de Carga
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
                                            <input type="text" v-model="TxtIndicador1" id="TxtIndicador1" class="form-control me-1 border-danger" placeholder="Descripcion" maxlength="50" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Tipo de Distribucion</th>
                                        <td>
                                            <select class="form-select border-danger" aria-label="Default select example" v-model="TxtCarga1" id="TxtCarga1" placeholder="Seleccione...">
                                                <option value="Grua">Grua</option>
                                                <option value="Izaje">Izaje</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Tipo de Carga</th>
                                        <td>
                                            <select class="form-select border-danger" aria-label="Default select example" v-model="TxtDistribucion1" id="TxtDistribucion1" placeholder="Seleccione...">
                                                <option value="Contenedores">Contenedores</option>
                                                <option value="Graneles">Graneles</option>
                                                <option value="Liquidos">Liquidos</option>
                                            </select>
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
                                🚛  Modificar Torre
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
                                            <input type="text" v-model="TxtIndicador2" id="TxtIndicador2" class="form-control me-1 border-danger" placeholder="Descripcion" maxlength="50" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Tipo de Distribucion</th>
                                        <td>
                                            <select class="form-select border-danger" aria-label="Default select example" v-model="TxtDistribucion2" id="TxtDistribucion2" placeholder="Seleccione...">
                                                <option value="Grua">Grua</option>
                                                <option value="Izaje">Izaje</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Tipo de Carga</th>
                                        <td>
                                            <select class="form-select border-danger" aria-label="Default select example" v-model="TxtCarga2" id="TxtCarga2" placeholder="Seleccione...">
                                                <option value="Contenedores">Contenedores</option>
                                                <option value="Graneles">Graneles</option>
                                                <option value="Liquidos">Liquidos</option>
                                            </select>
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

        <!--HASTA AQUI CUERPO DEL PROGRAMA-->

    </div>
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

                Direccion: "../controlador/base.php?accion1=",
                User: [],
                TxtBuscar: "",
                Usuarios: [],
                TotalRegistros: 0,
                Pagina: 0,
                TotalPaginas: 0,
                Page: 1,
                TxtIndicador1: "",
                TxtCarga1: "",
                TxtDistribucion1: "",
                TxtIndicador2: "",
                TxtCarga2: "",
                TxtDistribucion2: "",
                Id1: ""
            }
        },
        //Cuando inicia la Aplicacion
        mounted() {
            this.ListarRegistros();
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

                    accion1 = "ListarT";

                } else {

                    accion1 = "ListarTM";

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

                    accion1 = "ListarT";

                } else {

                    accion1 = "ListarTM";

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

            NuevoRegistro() {

                if (localStorage.getItem("Usuario")) {
                    //Nada  
                } else {
                    window.location.href = '/'
                }

                if (localStorage.getItem("Usuario")) {
                    this.User = JSON.parse(localStorage.getItem("Usuario"));
                }

                this.TxtIndicador1 = "";
                this.TxtCarga1 = "";
                this.TxtDistribucion1 = "";

            },

            SalvarRegistro() {

                let Esp1 = this.TxtIndicador1;
                let Car1 = document.getElementById("TxtCarga1").value;
                let Des1 = document.getElementById("TxtDistribucion1").value;
                let accion1 = "InsertarT";

                if (Esp1 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL NOMBRE DE LA TORRE DE CARGA!!',
                        footer: ''
                    })
                    return;
                }

                if (Car1 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL TIPO DE MECANISMO DE CARGA!!',
                        footer: ''
                    })
                    return;
                }

                if (Des1 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL TIPO DE CARGA!!',
                        footer: ''
                    })
                    return;
                }


                let json = {
                    "descripcion": Esp1,
                    "carga": Des1,
                    "mecanismo": Car1
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

                let accion1 = "ListarTM2";

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
                            this.TxtIndicador2 = this.Usuarios2.descripcion;
                            this.TxtCarga2 = this.Usuarios2.tipo_carga;
                            this.TxtDistribucion2 = this.Usuarios2.tipo_distribucion;
                            this.Id1 = this.Usuarios2.id;
                        }
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();

            },

            ActualizarRegistro() {

                let Esp1 = this.TxtIndicador2;
                let Car1 = document.getElementById("TxtCarga2").value;
                let Des1 = document.getElementById("TxtDistribucion2").value;
                let ID1 = document.getElementById("Id1").value;
                let accion1 = "ModificarT";

                if (Esp1 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL NOMBRE DE LA TORRE DE CARGA!!',
                        footer: ''
                    })
                    return;
                }

                if (Car1 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL TIPO DE MECANISMO DE CARGA!!',
                        footer: ''
                    })
                    return;
                }

                if (Des1 == "") {

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL TIPO DE CARGA!!',
                        footer: ''
                    })
                    return;
                }

                let json = {
                    "descripcion": Esp1,
                    "carga": Des1,
                    "mecanismo": Car1
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

                            let accion1 = "EliminarT";

                            fetch(this.Direccion + accion1 + '&e=' + e, {
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