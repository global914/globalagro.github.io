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
                <label><strong class="text-black fs-5 me-4">🚛 BASCULA ENTRADA</strong></label>
            </div>
        </div>

        <div class="text-center" id="Lista">
            <!-- BOTONES Y INPUT DE BUSQUEDA TABLA O LISTADO DE USUARIOS -->
            <div class="col-4" id="Cont-Bus">
                <div class="input-group mb-3 max-width">
                    <input type="text" style="border-radius: 14px" class="form-control border-danger me-2" placeholder="🔎 Orden de Carga" aria-label="Username" aria-describedby="basic-addon1" v-model="TxtBuscar1" id="TxtBuscar1" v-on:keyup="filterKey1">
                    <input type="text" style="border-radius: 14px" class="form-control border-danger me-2" placeholder="🔎 Placa Unidad" aria-label="Username" aria-describedby="basic-addon1" v-model="TxtBuscar2" id="TxtBuscar2" v-on:keyup="filterKey2">
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
                        <td>{{Usuario.carga}}</td>
                        <td>
                            <button class="btn btn-outline-primary border-danger me-2" title="MODIFICAR REGISTRO" v-on:click="ModificarRegistro(Usuario.id)" data-bs-toggle="modal" data-bs-target="#ModificarUsuario">📝</button>
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


        <!--HASTA AQUI CUERPO DEL PROGRAMA-->

        <!--NODAL PARA MODIFICAR un Registro-->

        <div class="modal" tabindex="-1" id="ModificarUsuario">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title">
                            <div class="h4 pb-2 mb-2 text-light border-danger">
                                📓 Bascula Entrada
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
                                            <input type="text" v-model="TxtPlacaU2" id="TxtPlacaU2" class="form-control me-1 border-danger" placeholder="Placa Unidad" maxlength="50" disabled />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Nro de Orden</th>
                                        <td>
                                            <input type="text" v-model="TxtNroOrden2" id="TxtNroOrden2" class="form-control me-1 border-danger" placeholder="Nro de Orden" maxlength="50" disabled />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Chofer</th>
                                        <td>
                                            <input type="text" v-model="TxtChofer2" id="TxtChofer2" class="form-control me-1 border-danger" placeholder="Nombre Apellido" maxlength="50" disabled />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Empresa</th>
                                        <td>
                                            <input type="text" v-model="TxtEmpresa2" id="TxtEmpresa2" class="form-control me-1 border-danger" placeholder="Empresa" maxlength="50" disabled />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Fecha Entrada Bascula</th>
                                        <td>
                                            <input type="text" v-model="TxtFechaE2" id="TxtFechaE2" class="form-control me-1 border-danger" placeholder="Orden de Llegada" maxlength="50" disabled />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Hora Entrada Bascula</th>
                                        <td>
                                            <input type="text" v-model="TxtFechaH2" id="TxtFechaH2" class="form-control me-1 border-danger" placeholder="Orden de Llegada" maxlength="50" disabled />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Peso de Entrada</th>
                                        <td>
                                            <input type="text" v-model="TxtPesoE2" id="TxtPesoE2" class="form-control me-1 border-danger" placeholder="Peso de Entrada" maxlength="50" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Peso de Carga segun Orden</th>
                                        <td>
                                            <input type="text" v-model="TxtPesoO2" id="TxtPesoO2" class="form-control me-1 border-danger" placeholder="Peso Orden" maxlength="50" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" />
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
                Id1: "",
                TxtPlacaU2: "",
                TxtNroOrden2: "",
                TxtChofer2: "",
                TxtEmpresa2: "",
                TxtLlegada2: "",
                TxtFechaE2: "",
                TxtFechaH2: "",
                TxtPesoE2: "",
                TxtPesoO2: "",
                TxtEstacionamiento2: ""
            }
        },
        //Cuando inicia la Aplicacion
        mounted() {
            this.ListarRegistros();
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
                const fecha = Date.now();
                const hoy = new Date(fecha);

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
                            this.TxtPlacaU2 = this.Usuarios2.placa1;
                            this.TxtNroOrden2 = this.Usuarios2.orden_carga;
                            this.TxtChofer2 = this.Usuarios2.chofer;
                            this.TxtEmpresa2 = this.Usuarios2.empresa;
                            this.TxtLlegada2 = this.Usuarios2.nro_llegada;
                            this.Id1 = this.Usuarios2.id;
                            this.TxtFechaE2 = hoy.toLocaleDateString('es-CL', {
                                timeZone: 'America/Caracas'
                            });
                            this.TxtFechaH2 = hoy.toLocaleTimeString();

                        }
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();

                document.getElementById("TxtPesoE2").focus();

            },

            ActualizarRegistro() {

                let Cho1 = this.TxtChofer2;
                let Emp1 = this.TxtEmpresa2;
                let PlU1 = this.TxtPlacaU2;
                let Est1 = this.TxtEstacionamiento2;
                let Lle1 = this.TxtLlegada2;
                let Ord1 = this.TxtNroOrden2;
                let FeE1 = this.TxtFechaE2;
                let FeH1 = this.TxtFechaH2;
                let Pes1 = this.TxtPesoE2;
                let Pos1 = this.TxtPesoO2;
                let ID1 = document.getElementById("Id1").value;
                let accion1 = "ModificarBC";

                if (Pes1 == "") { //NOMBRE DEL CHOFER

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL PESO INICIAL DE LA UNIDAD!!',
                        footer: ''
                    })
                    return;
                }

                if (Pos1 == "") { //NOMBRE DEL CHOFER

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL PESO SEGUN ORDEN DE CARGA!!',
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

                let json = {

                    "estacionamiento": Est1,
                    "fechae": FeE1,
                    "horae": FeH1,
                    "peso1": Pes1,
                    "peso2": Pos1
                };

                fetch("../controlador/base.php?accion1=" + accion1 + '&e=' + ID1, {
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
                                title: 'DATOS ACTUALIZADOS !!',
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
        width: 1350px;
        height: 50%;
    }
</style>