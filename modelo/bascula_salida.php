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
                <label><strong class="text-black fs-5 me-4">🚛 BASCULA SALIDA</strong></label>
            </div>
        </div>

        <div class="text-center" id="Lista">

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
                                    📓 Bascula Salida
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
                                            <th class="table-info">Carga</th>
                                            <td>
                                                <input type="text" v-model="TxtCarga2" id="TxtCarga2" class="form-control me-1 border-danger" placeholder="Nombre Apellido" maxlength="50" disabled />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Empresa</th>
                                            <td>
                                                <input type="text" v-model="TxtEmpresa2" id="TxtEmpresa2" class="form-control me-1 border-danger" placeholder="Empresa" maxlength="50" disabled />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Fecha Salida Bascula</th>
                                            <td>
                                                <input type="text" v-model="TxtFechaE2" id="TxtFechaE2" class="form-control me-1 border-danger" placeholder="Orden de Llegada" maxlength="50" disabled />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Hora Salida Bascula</th>
                                            <td>
                                                <input type="text" v-model="TxtFechaH2" id="TxtFechaH2" class="form-control me-1 border-danger" placeholder="Orden de Llegada" maxlength="50" disabled />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Peso Orden</th>
                                            <td>
                                                <input type="text" v-model="TxtPesoO2" id="TxtPesoO2" class="form-control me-1 border-danger" placeholder="Peso de Salida" maxlength="50" disabled />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Peso Bruto(Salida)</th>
                                            <td>
                                                <input type="text" v-model="TxtPesoE2" id="TxtPesoE2" class="form-control me-1 border-danger" placeholder="Peso de Salida" maxlength="50" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Estacionamiento</th>
                                            <td>
                                                <input type="text" v-model="TxtEstacionamiento2" id="TxtEstacionamiento2" class="form-control me-1 border-danger" placeholder="Peso de Salida" maxlength="50" disabled />
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
                            <button type="button" class="btn btn-outline-primary" v-on:click="ActualizarRegistro1()" data-bs-dismiss="modal">💾 Guardar</button>
                            <button type="button" class="btn btn-outline-danger" v-on:click="Alert()" data-bs-dismiss="modal">❌ Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hasta Aqui-->

            <!--NODAL PARA TRASEGADO un Registro-->

            <div class="modal" tabindex="-1" id="Trasegado">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title">
                                <div class="h4 pb-2 mb-2 text-light border-danger">
                                    📓 Trasegado de Unidad - Devolucion
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
                                            <th class="table-info">Carga</th>
                                            <td>
                                                <input type="text" v-model="TxtCarga2" id="TxtCarga2" class="form-control me-1 border-danger" placeholder="Nombre Apellido" maxlength="50" disabled />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Peso Orden</th>
                                            <td>
                                                <input type="text" v-model="TxtPesoO2" id="TxtPesoO2" class="form-control me-1 border-danger" placeholder="Peso de Salida" maxlength="50" disabled />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Peso Salida Muelle</th>
                                            <td>
                                                <input type="text" v-model="TxtPesoM2" id="TxtPesoM2" class="form-control me-1 border-danger" placeholder="Peso de Salida" maxlength="50" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" />
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
                            <input type="hidden" id="Id2" v-model="Id2">
                            <button type="button" class="btn btn-outline-primary" v-on:click="ActualizarRegistro2()" data-bs-dismiss="modal">💾 Guardar</button>
                            <button type="button" class="btn btn-outline-danger" v-on:click="Alert()" data-bs-dismiss="modal">❌ Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hasta Aqui-->

            <!--NODAL PARA TRASEGADO DE SALIDA un Registro-->

            <div class="modal" tabindex="-1" id="Trasegado2">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header bg-danger">
                            <h5 class="modal-title">
                                <div class="h4 pb-2 mb-2 text-light border-danger">
                                    📓 Trasegado de Unidad - Salida
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
                                                <input type="text" v-model="TxtPlacaU4" id="TxtPlacaU4" class="form-control me-1 border-danger" placeholder="Placa Unidad" maxlength="50" disabled />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Nro de Orden</th>
                                            <td>
                                                <input type="text" v-model="TxtNroOrden4" id="TxtNroOrden4" class="form-control me-1 border-danger" placeholder="Nro de Orden" maxlength="50" disabled />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Chofer</th>
                                            <td>
                                                <input type="text" v-model="TxtChofer4" id="TxtChofer4" class="form-control me-1 border-danger" placeholder="Nombre Apellido" maxlength="50" disabled />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Empresa</th>
                                            <td>
                                                <input type="text" v-model="TxtEmpresa4" id="TxtEmpresa4" class="form-control me-1 border-danger" placeholder="Empresa" maxlength="50" disabled />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Carga</th>
                                            <td>
                                                <input type="text" v-model="TxtCarga4" id="TxtCarga4" class="form-control me-1 border-danger" placeholder="Nombre Apellido" maxlength="50" disabled />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Ultimo Peso</th>
                                            <td>
                                                <input type="text" v-model="TxtPesoO4" id="TxtPesoO4" class="form-control me-1 border-danger" placeholder="Peso de Salida" maxlength="50" disabled />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Peso Orden</th>
                                            <td>
                                                <input type="text" v-model="TxtPesoM4" id="TxtPesoM4" class="form-control me-1 border-danger" placeholder="Peso de Salida" maxlength="50" disabled />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Peso Salida Muelle</th>
                                            <td>
                                                <input type="text" v-model="TxtPesoS4" id="TxtPesoS4" class="form-control me-1 border-danger" placeholder="Peso de Salida" maxlength="50" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" />
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
                            <button type="button" class="btn btn-outline-primary" v-on:click="ActualizarRegistro3()" data-bs-dismiss="modal">💾 Guardar</button>
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
                TotalRegistros: 0,
                Pagina: 0,
                TotalPaginas: 0,
                Id1: "",
                Id2: "",
                Page: 1,
                TxtPlacaU2: "",
                TxtNroOrden2: "",
                TxtChofer2: "",
                TxtEmpresa2: "",
                TxtLlegada2: "",
                TxtFechaE2: "",
                TxtFechaH2: "",
                TxtPesoE2: "",
                TxtPesoO2: "",
                TxtCarga2: "",
                TxtPesoM2: "",
                TxtEstacionamiento2: "",
                TxtPlacaU4: "",
                TxtNroOrden4: "",
                TxtChofer4: "",
                TxtEmpresa4: "",
                TxtCarga4: "",
                TxtPesoO4: "",
                TxtPesoM4: "",
                TxtPesoS4: ""
            }
        },
        //Cuando inicia la Aplicacion
        mounted() {
            this.login();
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

                if (UserLevel === "Logistica4" || UserLevel === "Admin") {

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

                Swal.fire({
                    title: "Ingrese Nro de Placa para Actualizar",
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

                fetch("../controlador/base.php?accion1=" + accion1 + '&e=' + NB, {
                        //method:"POST",
                        //body:JSON.stringify(accion1)
                    })
                    .then(respuesta => respuesta.json())
                    .then((datosRespuesta => {
                        //Respuesta datos que devuelve el JSON
                        console.log(datosRespuesta);
                        this.Usuarios = []
                        //console.clear();

                        if (datosRespuesta.length == 0) {

                            Swal.fire({
                                title: "REGISTRO NO ENCONTRADO",
                                showDenyButton: true,
                                showCancelButton: false,
                                confirmButtonText: "Nva Busqueda",
                                denyButtonText: `Cancelar`
                            }).then((result) => {
                                /* Read more about isConfirmed, isDenied below */
                                if (result.isConfirmed) {
                                    this.Alert();
                                }
                            });



                        } else {

                            this.Usuarios2 = datosRespuesta[0];

                            const fecha = Date.now();
                            const hoy = new Date(fecha);
                            let fechaA = hoy.toLocaleDateString('es-CL', {
                                timeZone: 'America/Caracas'
                            });
                            let diaA = fechaA.substring(0, 2);
                            let mesA = fechaA.substring(5, 3);
                            let anoA = fechaA.substring(6, 10);

                            //console.log(datosRespuesta2);

                            this.TxtPlacaU2 = this.Usuarios2.placa1;
                            this.TxtNroOrden2 = this.Usuarios2.orden_carga;
                            this.TxtChofer2 = this.Usuarios2.chofer;
                            this.TxtEmpresa2 = this.Usuarios2.empresa;
                            this.TxtLlegada2 = this.Usuarios2.nro_llegada;
                            this.TxtPesoO2 = this.Usuarios2.peso_orden;
                            this.TxtCarga2 = this.Usuarios2.carga;
                            this.Id1 = this.Usuarios2.id;
                            this.TxtEstacionamiento2 = "SALIDA PUERTO";
                            this.TxtFechaE2 = hoy.toLocaleDateString('es-CL', {
                                timeZone: 'America/Caracas'
                            });
                            this.TxtFechaH2 = hoy.toLocaleTimeString();

                            //capturamos el id del modal
                            const modalRegistro1 = document.querySelector("#ModificarUsuario");
                            //las opciones son opcional - puedes quitarlo
                            const myModal1 = new bootstrap.Modal(modalRegistro1);
                            myModal1.show(); //data-bs-dismiss
                        }

                    }))
                    .catch(console.log) //En caso de que Falle

                //console.clear();

            },

            ModificarRegistro(e, c) {

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
                let sele2 = document.getElementById("TxtPesoE2");
                let sele = document.getElementById("TxtEstacionamiento2");

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
                            this.TxtPesoO2 = this.Usuarios2.peso_orden;
                            this.TxtCarga2 = this.Usuarios2.carga;
                            this.Id1 = this.Usuarios2.id;
                            this.TxtEstacionamiento2 = "";
                            this.TxtFechaE2 = hoy.toLocaleDateString('es-CL', {
                                timeZone: 'America/Caracas'
                            });
                            this.TxtFechaH2 = hoy.toLocaleTimeString();

                        }
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();

                document.getElementById("TxtPesoE2").focus();


                //VALIDAMOS SI YA TIENE UNA ENTRADA

                let accion2 = "ListarTRAS";

                fetch("../controlador/base.php?accion1=" + accion2 + '&e1=' + c, {
                        //method:"POST",
                        //body:(e)
                    })
                    .then(respuesta2 => respuesta2.json())
                    .then((datosRespuesta2 => {
                        //Respuesta datos que devuelve el JSON
                        this.Res = datosRespuesta2.success
                        console.log(this.Res);
                        if (this.Res == 2) {
                            Swal.fire({
                                icon: 'error',
                                title: 'ERROR',
                                text: 'ESTA UNIDAD POSEE UNA VALIDACION DE TRASEGADO!!!!!',
                                footer: 'Utilice el modulo de trasegado'
                            })
                            sele.disabled = true;
                            sele2.disabled = true;
                            return;
                        } else {
                            sele.disabled = false;
                            sele2.disabled = false;
                        }
                    }))
                    .catch(console.log) //En caso de que Falle


                //HASTA AQUI

            },

            ModificarRegistro3(e) {

                let N1 = e;
                this.Id1 = e;

                let accion1 = "ListarTT1";
                const fecha = Date.now();
                const hoy = new Date(fecha);

                fetch("../controlador/base.php?accion1=" + accion1 + '&e=' + N1, {
                        //method:"POST",
                        //body:(e)
                    })
                    .then(respuesta2 => respuesta2.json())
                    .then((datosRespuesta2 => {
                        //Respuesta datos que devuelve el JSON
                        let res = datosRespuesta2;
                        this.Usuarios2 = []
                        if (res == '1') {

                            Swal.fire({
                                icon: 'error',
                                title: 'GUARDAR',
                                text: 'NO EXISTE REGISTRO DE ESA UNIDAD PARA TRASEGADO!!',
                                footer: ''
                            })

                        } else {
                            this.Usuarios2 = datosRespuesta2[0];
                            this.TxtPlacaU4 = this.Usuarios2.placa;
                            this.TxtNroOrden4 = this.Usuarios2.orden;
                            this.TxtChofer4 = this.Usuarios2.chofer;
                            this.TxtEmpresa4 = this.Usuarios2.empresa;
                            this.TxtCarga4 = this.Usuarios2.carga;
                            this.TxtPesoO4 = this.Usuarios2.peso1;
                            this.TxtPesoM4 = this.Usuarios2.pesoo;

                            //capturamos el id del modal
                            const modalRegistro1 = document.querySelector("#Trasegado2");
                            //las opciones son opcional - puedes quitarlo
                            const myModal1 = new bootstrap.Modal(modalRegistro1);
                            myModal1.show(); //data-bs-dismiss
                            document.getElementById("TxtPesoE2").focus();

                        }
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();


            },

            DatosT() {

                let N1 = this.TxtEstacionamiento2;
                document.getElementById("TxtPesoM2").focus();

                if (N1 == "Trasegado") {

                    //capturamos el id del modal
                    const modalRegistro1 = document.querySelector("#Trasegado");
                    //las opciones son opcional - puedes quitarlo
                    const myModal1 = new bootstrap.Modal(modalRegistro1);
                    myModal1.show(); //data-bs-dismiss
                }



            },

            ActualizarRegistro1() {

                let FeE1 = this.TxtFechaE2;
                let FeH1 = this.TxtFechaH2;
                let Est1 = this.TxtEstacionamiento2;
                let Pes1 = parseInt(this.TxtPesoE2); //Peso que Cargo en Muelle
                let Pos1 = parseInt(this.TxtPesoO2); //Peso segun Orden de Carga
                let ID1 = document.getElementById("Id1").value;
                let accion1 = "ModificarCC3";
                let a = 0;
                let b = 0;

                a = (Pos1 + 100);
                b = (Pos1 - 50);

                if (Pes1 >= a || Pes1 <= b) {
                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE DE IR A TRASEGAR!!',
                        footer: ''
                    })
                    //capturamos el id del modal
                    const modalRegistro1 = document.querySelector("#Trasegado");
                            //las opciones son opcional - puedes quitarlo
                            const myModal1 = new bootstrap.Modal(modalRegistro1);
                            myModal1.show(); //data-bs-dismiss
                    return;
                }

                if (isNaN(Pes1)) { //PESO VACIO

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL PESO BRUTO O FINAL!!',
                        footer: ''
                    })
                    setTimeout(function() {
                        location.reload()
                    }, 2000);
                    return;
                }

                let json = {

                    "fechae": FeE1,
                    "horae": FeH1,
                    "pesof": Pes1,
                    "estacionamiento": Est1

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
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();

            },

            ActualizarRegistro2() {
                let Pla1 = this.TxtPlacaU2;
                let Ord1 = this.TxtNroOrden2;
                let Cho1 = this.TxtChofer2;
                let Emp1 = this.TxtEmpresa2;
                let Car1 = this.TxtCarga2;
                let Pos1 = this.TxtPesoO2
                let Pes1 = this.TxtPesoM2;
                let ID1 = document.getElementById("Id2").value;
                let accion1 = "ModificarCC4";
                const fecha = Date.now();
                const hoy = new Date(fecha);
                let hora = hoy.toLocaleTimeString();

                if (Pes1 == "") { //NOMBRE ESTACIONAMIENTO

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL PESO!!',
                        footer: ''
                    })
                    return;
                }

                let json = {

                    "placa": Pla1,
                    "orden": Ord1,
                    "chofer": Cho1,
                    "empresa": Emp1,
                    "carga": Car1,
                    "peso": Pes1,
                    "pesoo": Pos1,
                    "hora": hora
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
                        this.Alert();
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();


            },

            ActualizarRegistro3() {
                let Pla1 = this.TxtPlacaU4;
                let Ord1 = this.TxtNroOrden4;
                let Cho1 = this.TxtChofer4;
                let Emp1 = this.TxtEmpresa4;
                let Car1 = this.TxtCarga4;
                let Pes1 = parseInt(this.TxtPesoM4); //Peso Orden
                let Pem1 = parseInt(this.TxtPesoS4); //Peso Ingresado
                let ID1 = this.Id1;
                let accion1 = "TrasegadoC2";


                let a = 0;
                let b = 0;

                a = (Pes1 + 100);
                b = (Pes1 - 50);

                if (Pem1 >= a || Pem1 <= b) {
                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE DE IR A TRASEGAR!!',
                        footer: ''
                    })
                    return;
                }

                if (Pla1 == "") { //PLACA DE LA UNIDAD

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR LA PLACA DE LA UNIDAD!!',
                        footer: ''
                    })
                    return;
                }

                if (Pem1 == "") { //NOMBRE ESTACIONAMIENTO

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR EL NUEVO PESO!!',
                        footer: ''
                    })
                    return;
                }

                let json = {

                    "placa": Pla1,
                    "peso": Pem1,

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