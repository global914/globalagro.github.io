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
                                <li><a class="dropdown-item" href="../modelo/ordenes.php">Ordenes de Carga</a></li>
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
                                <li><a class="dropdown-item" href="#">Salida de Carga</a></li>
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
                <label><strong class="text-black fs-5 me-4">🛑 SALIDA DE PRODUCTO</strong></label>
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
                            <button class="btn btn-outline-primary border-danger me-2" title="MODIFICAR REGISTRO" v-on:click="ModalOpcion(Usuario.id)" data-bs-toggle="modal" data-bs-target="#ModalOpcion">📝</button>
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

        <div class="modal" tabindex="-1" id="ModalOpcion">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title">
                            <div class="h4 pb-2 mb-2 text-light border-danger">
                                🎛 Opciones Entrada / Salida
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
                                            <input type="text" v-model="TxtPlacaU1" id="TxtPlacaU1" class="form-control me-1 border-danger" placeholder="Placa Unidad" maxlength="50" disabled />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Nro de Orden</th>
                                        <td>
                                            <input type="text" v-model="TxtNroOrden1" id="TxtNroOrden1" class="form-control me-1 border-danger" placeholder="Nro de Orden" maxlength="50" disabled />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Chofer</th>
                                        <td>
                                            <input type="text" v-model="TxtChofer1" id="TxtChofer1" class="form-control me-1 border-danger" placeholder="Nombre Apellido" maxlength="50" disabled />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Empresa</th>
                                        <td>
                                            <input type="text" v-model="TxtEmpresa1" id="TxtEmpresa1" class="form-control me-1 border-danger" placeholder="Empresa" maxlength="50" disabled />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Fecha Despacho de Carga</th>
                                        <td>
                                            <input type="text" v-model="TxtFechaE1" id="TxtFechaE1" class="form-control me-1 border-danger" placeholder="Orden de Llegada" maxlength="50" disabled />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Hora de Finalizacion Carga</th>
                                        <td>
                                            <input type="text" v-model="TxtFechaH1" id="TxtFechaH1" class="form-control me-1 border-danger" placeholder="Orden de Llegada" maxlength="50" disabled />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Peso Final</th>
                                        <td>
                                            <input type="text" v-model="TxtProducto1" id="TxtProducto1" class="form-control me-1 border-danger" placeholder="Peso Final" maxlength="50" disabled />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Foto 1</th>
                                        <td>
                                            <input class="form-control me-1 border-danger" v-on:click="Cancelar1()" v-on:change="PreView1()" id="TxtFile1" type="file" accept="image/jpeg">
                                        </td>
                                        <td style="width:250px; height:150px;">
                                            <img src="../vista/img/default.png" id="img1" style="width:150px" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Foto 2</th>
                                        <td>
                                            <input class="form-control me-1 border-danger" v-on:click="Cancelar2()" v-on:change="PreView2()" id="TxtFile2" type="file" placeholder="Foto" accept="image/jpeg">
                                        </td>
                                        <td style="width:250px; height:150px;">
                                            <img src="../vista/img/default.png" id="img2" style="width:150px" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Foto 3</th>
                                        <td>
                                            <input class="form-control me-1 border-danger" v-on:click="Cancelar3()" v-on:change="PreView3()" id="TxtFile3" type="file" placeholder="Foto" accept="image/jpeg">
                                        </td>
                                        <td style="width:250px; height:150px;">
                                            <img src="../vista/img/default.png" id="img3" style="width:150px" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Foto 4</th>
                                        <td>
                                            <input class="form-control me-1 border-danger" v-on:click="Cancelar4()" v-on:change="PreView4()" id="TxtFile4" type="file" placeholder="Foto" accept="image/jpeg">
                                        </td>
                                        <td style="width:250px; height:150px;">
                                            <img src="../vista/img/default.png" id="img4" style="width:150px" />
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary me-2" v-on:click="SalvarRegistro()" data-bs-dismiss="modal">💾 Guardar</button>
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
    <script src="../controlador/script.js"></script>


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
                TotalRegistros: 0,
                Pagina: 0,
                TotalPaginas: 0,
                Id1: "",
                Id2: "",
                Id3: "",
                Page: 1,
                Id1: "",
                TxtPlacaU1: "",
                TxtNroOrden1: "",
                TxtChofer1: "",
                TxtEmpresa1: "",
                TxtFechaE1: "",
                TxtFechaH1: "",
                TxtProducto1: "",

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

            ModalOpcion(h) {

                this.Id1 = h
                let accion1 = "ListarBM6";
                const fecha = Date.now();
                const hoy = new Date(fecha);

                const file1 = document.getElementById('TxtFile1');
                file1.value = "";

                const file2 = document.getElementById('TxtFile2');
                file2.value = "";

                const file3 = document.getElementById('TxtFile3');
                file3.value = "";

                const file4 = document.getElementById('TxtFile4');
                file4.value = "";

                const img1 = document.getElementById('img1');
                img1.src = '../vista/img/default.jpg';

                const img2 = document.getElementById('img2');
                img2.src = '../vista/img/default.jpg';

                const img3 = document.getElementById('img3');
                img3.src = '../vista/img/default.jpg';

                const img4 = document.getElementById('img4');
                img4.src = '../vista/img/default.jpg';

                fetch("../controlador/base.php?accion1=" + accion1 + '&e=' + h, {
                        //method:"POST",
                        //body:(e)
                    })
                    .then(respuesta2 => respuesta2.json())
                    .then((datosRespuesta2 => {
                        //Respuesta datos que devuelve el JSON
                        console.log(datosRespuesta2);
                        this.Registro2 = []
                        console.clear();
                        if (typeof datosRespuesta2[0].success === 'undefined') {
                            this.Registro2 = datosRespuesta2[0];
                            this.TxtPlacaU1 = this.Registro2.placa1;
                            this.TxtNroOrden1 = this.Registro2.orden_carga;
                            this.TxtChofer1 = this.Registro2.chofer;
                            this.TxtEmpresa1 = this.Registro2.empresa;
                            this.TxtProducto1 = this.Registro2.peso_salida;
                            this.TxtFechaE1 = hoy.toLocaleDateString('es-CL', {
                                timeZone: 'America/Caracas'
                            });
                            this.TxtFechaH1 = hoy.toLocaleTimeString();

                        }
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();


            },

            SalvarRegistro() {

                let fecha1 = this.TxtFechaE1;
                let hora1  = this.TxtFechaH1;
                let prod1  = this.TxtProducto1;
                let ID1    = this.Id1;
                const T1    = document.getElementById('TxtFile1');
                const T2    = document.getElementById('TxtFile2');
                const T3    = document.getElementById('TxtFile3');
                const T4    = document.getElementById('TxtFile4');
                let N1      = document.getElementById('TxtFile1').value;
                let N2      = document.getElementById('TxtFile2').value;
                let N3      = document.getElementById('TxtFile3').value;
                let N4      = document.getElementById('TxtFile4').value;

                if (N1 != "") {
                    N1 = T1.files[0].name;
                }

                if (N2 != "") {
                    N2 = T2.files[0].name;
                }

                if (N3 != "") {
                    N3 = T3.files[0].name;
                }

                if (N4 != "") {
                    N4 = T4.files[0].name;
                }

                let accion1 = "SalidaU";

                if (prod1 == "" || prod1 == null) { //NOMBRE ESTACIONAMIENTO

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL PESO BRUTO O FINAL!!',
                        footer: ''
                    })
                    return;
                }
                
                let json = {

                    "fechas": fecha1,
                    "horas": hora1,
                    "foto1": N1,
                    "foto2": N2,
                    "foto3": N3,
                    "foto4": N4,
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
                
                //RUTINA PARA SUBIR ARCHIVOS INPUT FILE #1

                    if (N1 != "") {

                            const file  = T1.files[0];
                            
                            let formData1 = new FormData();
                            
                            formData1.append("archivo", file); // En la posición 0; es decir, el primer elemento

                            fetch("../modelo/subir.php/", {
                                    method: 'POST',
                                    body: formData1,
                                })

                                .then((datosRespuesta3 => {
                                //Respuesta datos que devuelve el JSON
                                //console.log("Llegada: " + datosRespuesta3);
                                }))
                            .catch(console.log) //En caso de que Falle
                    }

                    if (N2 != "") {

                            const file2 = T2.files[0];
                            
                            let formData2 = new FormData();
                            
                            formData2.append("archivo", file2); // En la posición 0; es decir, el primer elemento

                            fetch("../modelo/subir.php/", {
                                    method: 'POST',
                                    body: formData2,
                                })

                                .then((datosRespuesta3 => {
                                //Respuesta datos que devuelve el JSON
                                //console.log("Llegada: " + datosRespuesta3);
                                }))
                            .catch(console.log) //En caso de que Falle
                    }

                    if (N3 != "") {

                                const file3 = T3.files[0];
                         
                                let formData3 = new FormData();
                                
                                formData3.append("archivo", file3); // En la posición 0; es decir, el primer elemento
        
                                fetch("../modelo/subir.php/", {
                                        method: 'POST',
                                        body: formData3,
                                    })
        
                                    .then((datosRespuesta3 => {
                                    //Respuesta datos que devuelve el JSON
                                    //console.log("Llegada: " + datosRespuesta3);
                                    }))
                                .catch(console.log) //En caso de que Falle
                    }

                    if (N4 != "") {

                                const file4 = T4.files[0];
                                
                                let formData4 = new FormData();
                                
                                formData4.append("archivo", file4); // En la posición 0; es decir, el primer elemento
        
                                fetch("../modelo/subir.php/", {
                                        method: 'POST',
                                        body: formData4,
                                    })
        
                                    .then((datosRespuesta3 => {
                                    //Respuesta datos que devuelve el JSON
                                    //console.log("Llegada: " + datosRespuesta3);
                                    }))
                                .catch(console.log) //En caso de que Falle
                    }


            },

            PreView1() {

                const file1 = document.getElementById('TxtFile1');
                const img1 = document.getElementById('img1');
                let filename = file1.files[0].name; //Nombre del Archivo
                var arhivoRuta = file1.value;
                let filesize = file1.files[0].size; //Tamaño del Archivo representando que 1.000.000 Bytes representan 1mg
                var extPermitidas = /(.jpg)$/i;

                if (!extPermitidas.exec(arhivoRuta)) {
                    Swal.fire({
                        icon: 'error',
                        title: 'VALIDACION DE ARCHIVO',
                        text: 'ARCHIVO JPG NO VALIDO!!',
                        footer: ''
                    })
                    file1.value = "";
                    return;
                }

                if (filesize > 1000000) {
                    Swal.fire({
                        icon: 'error',
                        title: 'VALIDACION DE ARCHIVO',
                        text: 'NO PUEDE SELECCIONAR ARCHIVOS MAYOR A 1MB!!',
                        footer: ''
                    })
                    file1.value = "";
                    return;
                }

                const objectURL = URL.createObjectURL(file1.files[0]);


                let a = file1.files.length

                img1.src = objectURL;


            },

            Cancelar1() {
                const img1 = document.getElementById('img1');
                img1.src = '../vista/img/default.jpg';
                const file1 = document.getElementById('TxtFile1');
                file1.value = "";
            },

            PreView2() {

                const file1 = document.getElementById('TxtFile2');
                const img1 = document.getElementById('img2');
                let filename = file1.files[0].name; //Nombre del Archivo
                var arhivoRuta = file1.value;
                let filesize = file1.files[0].size; //Tamaño del Archivo representando que 1.000.000 Bytes representan 1mg
                var extPermitidas = /(.jpg)$/i;

                if (!extPermitidas.exec(arhivoRuta)) {
                    Swal.fire({
                        icon: 'error',
                        title: 'VALIDACION DE ARCHIVO',
                        text: 'ARCHIVO JPG NO VALIDO!!',
                        footer: ''
                    })
                    file1.value = "";
                    return;
                }

                if (filesize > 1000000) {
                    Swal.fire({
                        icon: 'error',
                        title: 'VALIDACION DE ARCHIVO',
                        text: 'NO PUEDE SELECCIONAR ARCHIVOS MAYOR A 1MB!!',
                        footer: ''
                    })
                    file1.value = "";
                    return;
                }

                const objectURL = URL.createObjectURL(file1.files[0]);


                let a = file1.files.length

                img1.src = objectURL;


            },

            Cancelar2() {
                const img1 = document.getElementById('img2');
                img1.src = '../vista/img/default.jpg';
                const file2 = document.getElementById('TxtFile2');
                file2.value = "";
            },

            PreView3() {

                const file1 = document.getElementById('TxtFile3');
                const img1 = document.getElementById('img3');
                let filename = file1.files[0].name; //Nombre del Archivo
                var arhivoRuta = file1.value;
                let filesize = file1.files[0].size; //Tamaño del Archivo representando que 1.000.000 Bytes representan 1mg
                var extPermitidas = /(.jpg)$/i;

                if (!extPermitidas.exec(arhivoRuta)) {
                    Swal.fire({
                        icon: 'error',
                        title: 'VALIDACION DE ARCHIVO',
                        text: 'ARCHIVO JPG NO VALIDO!!',
                        footer: ''
                    })
                    file1.value = "";
                    return;
                }

                if (filesize > 1000000) {
                    Swal.fire({
                        icon: 'error',
                        title: 'VALIDACION DE ARCHIVO',
                        text: 'NO PUEDE SELECCIONAR ARCHIVOS MAYOR A 1MB!!',
                        footer: ''
                    })
                    file1.value = "";
                    return;
                }

                const objectURL = URL.createObjectURL(file1.files[0]);


                let a = file1.files.length

                img1.src = objectURL;


            },

            Cancelar3() {
                const img1 = document.getElementById('img3');
                img1.src = '../vista/img/default.jpg';
                const file3 = document.getElementById('TxtFile3');
                file3.value = "";
            },

            PreView4() {

                const file1 = document.getElementById('TxtFile4');
                const img1 = document.getElementById('img4');
                let filename = file1.files[0].name; //Nombre del Archivo
                var arhivoRuta = file1.value;
                let filesize = file1.files[0].size; //Tamaño del Archivo representando que 1.000.000 Bytes representan 1mg
                var extPermitidas = /(.jpg)$/i;

                if (!extPermitidas.exec(arhivoRuta)) {
                    Swal.fire({
                        icon: 'error',
                        title: 'VALIDACION DE ARCHIVO',
                        text: 'ARCHIVO JPG NO VALIDO!!',
                        footer: ''
                    })
                    file1.value = "";
                    return;
                }

                if (filesize > 1000000) {
                    Swal.fire({
                        icon: 'error',
                        title: 'VALIDACION DE ARCHIVO',
                        text: 'NO PUEDE SELECCIONAR ARCHIVOS MAYOR A 1MB!!',
                        footer: ''
                    })
                    file1.value = "";
                    return;
                }

                const objectURL = URL.createObjectURL(file1.files[0]);


                let a = file1.files.length

                img1.src = objectURL;


            },

            Cancelar4() {
                const img1 = document.getElementById('img4');
                img1.src = '../vista/img/default.jpg';
                const file4 = document.getElementById('TxtFile4');
                file4.value = "";
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
        width: 1350px;
        height: 50%;
    }
</style>