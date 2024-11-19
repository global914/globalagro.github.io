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
                <label><strong class="text-black fs-5 me-4">🚛 ESPERA MUELLE</strong></label>
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
                                    📓 ESPERA MUELLE
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
                                            <th class="table-info">Placa Chuto</th>
                                            <td>
                                                <input type="text" v-model="TxtPlacaC1" id="TxtPlacaC1" class="form-control me-1 border-danger" placeholder="Placa Chuto" maxlength="50" disabled />
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
                                                <input type="text" v-model="TxtChofer1" id="TxtChofer1" class="form-control me-1 border-danger" placeholder="Nombre Apellido" maxlength="50" disabled />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="table-info">Empresa</th>
                                            <td>
                                                <input type="text" v-model="TxtCIChofer1" id="TxtCIChofer1" class="form-control me-1 border-danger" placeholder="N# de CI" maxlength="50" disabled />
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
                            <input type="hidden" id="Id1" v-model="Id1">
                            <button type="button" class="btn btn-outline-primary" v-on:click="ActualizarRegistro()">💾 Guardar</button>
                            <button type="button" class="btn btn-outline-danger" v-on:click="Alert()" data-bs-dismiss="modal">❌ Cerrar</button>
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
                TxtPlacaU1: "",
                TxtPlacaC1: "",
                TxtNroOrden1: "",
                TxtChofer1: "",
                TxtCIChofer1: "",
                TxtEstacionamiento1: "",
                TxtLlegada1: "",
                TxtFechaE1: "",
                TxtFechaH1: "",
                Id1: ""
            }
        },
        //Cuando inicia la Aplicacion
        mounted() {
            this.login()
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

                if (UserLevel === "Logistica3" || UserLevel === "Admin") {

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

                fetch(this.Direccion + accion1 + '&e=' + NB, {
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

                            this.TxtPlacaU1 = this.Usuarios2.placa1;
                            this.TxtPlacaC1 = this.Usuarios2.placa2;
                            this.TxtNroOrden1 = this.Usuarios2.orden_carga;
                            this.TxtChofer1 = this.Usuarios2.chofer;
                            this.TxtCIChofer1 = this.Usuarios2.ci;
                            this.TxtLlegada1 = this.Usuarios2.nro_llegada;
                            this.TxtEstacionamiento1 = "CARGA DE PRODUCTO";
                            this.Id1 = this.Usuarios2.id;
                            this.TxtFechaE1 = fechaA
                            this.TxtFechaH1 = hoy.toLocaleTimeString();

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

            ActualizarRegistro() {

                let Est1 = this.TxtEstacionamiento1;
                let Id = this.Id1;
                let accion1 = "ActualizarEsta2";
                const fecha = Date.now();
                            const hoy = new Date(fecha);
                let fechaA = hoy.toLocaleDateString('es-CL', {
                                timeZone: 'America/Caracas'
                            });
                let diaA = fechaA.substring(0, 2);
                let mesA = fechaA.substring(5, 3);
                let anoA = fechaA.substring(6, 10);
                let hora = hoy.toLocaleTimeString();

                if (Est1 == "") { //NOMBRE DEL CHOFER

                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE ESCOGER EL ESTACIONAMIENTO!!',
                        footer: ''
                    })
                    return;
                }

                let json = {

                    "estacionamiento": Est1,
                    "id": Id,
                    "fecha": fechaA,
                    "hora": hora,
                    "diaA": diaA,
                    "mesA": mesA,
                    "anoA": anoA
                };

                fetch(this.Direccion + accion1, {
                        method: "POST",
                        body: JSON.stringify(json)
                    })
                    .then(respuesta3 => respuesta3.json())
                    .then((datosRespuesta3 => {
                        //console.log(datosRespuesta3.success);
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
                    }))
                    .catch(console.log) //En caso de que Falle

                console.clear();
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
        width: 1300px;
        height: 50%;
    }
</style>