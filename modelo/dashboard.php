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
    <link rel="stylesheet" href="../vista/css/chartist.min.css">
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
                <label><strong class="text-black fs-5 me-4">📊 DASHBOARD</strong></label>
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
        <!-- HASTA AQUI USUARIO ACTIVO MODAL -->

        <!--NODAL PARA TRASEGADO DE SALIDA un Registro-->

        <div class="modal" tabindex="-1" id="Buscar">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h5 class="modal-title">
                            <div class="h4 pb-2 mb-2 text-light border-danger">
                                🔍 BUSQUEDA
                            </div>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="table-info">Placa</th>
                                        <td>
                                            <input type="text" v-model="TxtUnidad1" id="TxtUnidad1" class="form-control me-1 border-danger" placeholder="Placa Unidad" maxlength="50" disabled />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Chofer</th>
                                        <td>
                                            <input type="text" v-model="TxtChofer1" id="TxtChofer1" class="form-control me-1 border-danger" placeholder="Placa Unidad" maxlength="50" disabled />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Empresa</th>
                                        <td>
                                            <input type="text" v-model="TxtEmpresa1" id="TxtEmpresa1" class="form-control me-1 border-danger" placeholder="Placa Unidad" maxlength="50" disabled />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Fecha de Entrada</th>
                                        <td>
                                            <input type="text" v-model="TxtFecha1" id="TxtFecha1" class="form-control me-1 border-danger" placeholder="Placa Unidad" maxlength="50" disabled />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Estacionamiento #1</th>
                                        <td>
                                            <input type="text" v-model="TxtPlacaU1" id="TxtPlacaU1" class="form-control me-1 border-danger" placeholder="Placa Unidad" maxlength="50" disabled />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Estacionamiento #2</th>
                                        <td>
                                            <input type="text" v-model="TxtPlacaU2" id="TxtPlacaU2" class="form-control me-1 border-danger" placeholder="Placa Unidad" maxlength="50" disabled />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Estacionamiento #3</th>
                                        <td>
                                            <input type="text" v-model="TxtPlacaU3" id="TxtPlacaU3" class="form-control me-1 border-danger" placeholder="Placa Unidad" maxlength="50" disabled />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Estacionamiento #4</th>
                                        <td>
                                            <input type="text" v-model="TxtPlacaU4" id="TxtPlacaU4" class="form-control me-1 border-danger" placeholder="Placa Unidad" maxlength="50" disabled />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Estacionamiento #5</th>
                                        <td>
                                            <input type="text" v-model="TxtPlacaU5" id="TxtPlacaU5" class="form-control me-1 border-danger" placeholder="Placa Unidad" maxlength="50" disabled />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Estacionamiento #6</th>
                                        <td>
                                            <input type="text" v-model="TxtPlacaU6" id="TxtPlacaU6" class="form-control me-1 border-danger" placeholder="Placa Unidad" maxlength="50" disabled />
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
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">❌ Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hasta Aqui-->


        <!-- DASHBOARD -->

        <div class="text-center" id="Lista">

            <div class="container-fluid px-4">
                <div class="col-md-3">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <input type="text" v-model="TxtBusqueda" id="TxtBusqueda" class="form-control me-1 border-danger" placeholder="🔍 Buscar" maxlength="50" />     
                        </div>
                        <button type="button" class="btn btn-outline-info" title="BUSCAR REGISTRO" v-on:click="BuscarRegistro()">🔍</button>
                    </div>
                </div>
                <div class="row g-3 my-2">
                    <div class="col-md-2">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><label id="R1"></label></h3>
                                <p class="fs-5">ESPERA PATIO</p>
                            </div>
                            <h2>🚛</h2>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><label id="R2"></label></h3>
                                <p class="fs-5">ESPERA MUELLE</p>
                            </div>
                            <h2>🚢</h2>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><label id="R3"></label></h3>
                                <p class="fs-5">UNIDADES CARGADAS </p>
                            </div>
                            <h2>🔵</h2>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><label id="R4"></label></h3>
                                <p class="fs-5">UNIDADES DESPACHADAS</p>
                            </div>
                            <h2>🚚</h2>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><label id="R5"></label></h3>
                                <p class="fs-5">PESAJE DE SALIDA</p>
                            </div>
                            <h2>🔴</h2>
                        </div>
                    </div>

                </div>

            </div>

            <div id="Box1">
                <div class="ct-chart" id="container"></div>
            </div>
            
            <div id="Box2">
                <div class="ct-chart2" id="container2"></div>
            </div>



        </div>
    </div>


    <script src="../controlador/js/vue.cjs.js"></script>
    <script src="../controlador/js/bootstrap.min.js"></script>
    <script src="../controlador/js/sweetalert2.js"></script>
    <script src="../controlador/js/chartist.min.js"></script>


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
                Usuarios: [],
                Registro2: [],
                Registro3: [],
                TotalRegistros: 0,
                Pagina: 0,
                TotalPaginas: 0,
                Page: 1,
                TxtBusqueda: "",
                TxtPlacaU1: "",
                TxtPlacaU2: "",
                TxtPlacaU3: "",
                TxtPlacaU4: "",
                TxtPlacaU5: "",
                TxtPlacaU6: "",
                TxtChofer1: "",
                TxtEmpresa1: "",
                TxtUnidad1: "",
                TxtFecha1:""

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

                if (UserLevel === "Admin") {

                    this.ActualizarRegistros();
                
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

            ActualizarRegistros() {

                //Se buscan los datos en la BD 1er Registro

                let accion1 = "Datos1";
                let R1 = document.getElementById("R1");
                fetch("../controlador/base.php?accion1=" + accion1, {
                        //method:"POST",
                        //body:(e)
                    })
                    .then(respuesta2 => respuesta2.json())
                    .then((datosRespuesta2 => {
                        //Respuesta datos que devuelve el JSON
                        //console.log(datosRespuesta2);
                        R1.innerHTML = datosRespuesta2;
                       
                    }))
                    .catch(console.log) //En caso de que Falle


                //Se buscan los datos en la BD 2do Datos

                accion1 = "Datos2";
                let R2 = document.getElementById("R2");

                fetch("../controlador/base.php?accion1=" + accion1, {
                        //method:"POST",
                        //body:(e)
                    })
                    .then(respuesta2 => respuesta2.json())
                    .then((datosRespuesta2 => {
                        //Respuesta datos que devuelve el JSON
                        //console.log(datosRespuesta2);
                        R2.innerHTML = datosRespuesta2;
                        
                    }))
                    .catch(console.log) //En caso de que Falle


                //Se buscan los datos en la BD 3er Datos

                accion1 = "Datos3";
                let R3 = document.getElementById("R3");

                fetch("../controlador/base.php?accion1=" + accion1, {
                        //method:"POST",
                        //body:(e)
                    })
                    .then(respuesta2 => respuesta2.json())
                    .then((datosRespuesta2 => {
                        //Respuesta datos que devuelve el JSON
                        //console.log(datosRespuesta2);
                        R3.innerHTML = datosRespuesta2;
                        
                    }))
                    .catch(console.log) //En caso de que Falle

                //Se buscan los datos en la BD 3er Datos

                accion1 = "Datos4";
                let R4 = document.getElementById("R4");

                fetch("../controlador/base.php?accion1=" + accion1, {
                        //method:"POST",
                        //body:(e)
                    })
                    .then(respuesta2 => respuesta2.json())
                    .then((datosRespuesta2 => {
                        //Respuesta datos que devuelve el JSON
                        //console.log(datosRespuesta2);
                        R4.innerHTML = datosRespuesta2;
                        
                    }))
                    .catch(console.log) //En caso de que Falle

                accion1 = "Datos5";
                let R5 = document.getElementById("R5");

                fetch("../controlador/base.php?accion1=" + accion1, {
                        //method:"POST",
                        //body:(e)
                    })
                    .then(respuesta2 => respuesta2.json())
                    .then((datosRespuesta2 => {
                        //Respuesta datos que devuelve el JSON
                        //console.log(datosRespuesta2);
                        R5.innerHTML = datosRespuesta2;
                        
                    }))
                    .catch(console.log) //En caso de que Falle

                setTimeout(function() {

                    let a = R1.innerHTML;
                    let b = R2.innerHTML;
                    let c = R3.innerHTML;
                    let d = R4.innerHTML;
                    let e = R5.innerHTML;

                    
                        //1er Grafico Barras
                        const fecha = Date.now();
                        const hoy = new Date(fecha);
                        let Fecha = hoy.toLocaleDateString('es-CL', {
                            timeZone: 'America/Caracas'
                        });

                        new Chartist.Bar('.ct-chart', {
                            labels: [Fecha],
                            series: [
                                [a],
                                [b],
                                [c],
                                [d],
                                [e]
                            ]
                        }, {
                            seriesBarDistance: 30,
                            axisX: {
                                offset: 60
                            },
                            axisY: {
                                offset: 80,
                                labelInterpolationFnc: function(value) {
                                    return value
                                },
                                scaleMinSpace: 15,
                            }
                        });


                        //2do Grafico Circulo

                        new Chartist.Pie('.ct-chart2', {
                            series: [a, b, c, d, e]
                        }, {
                            donut: true,
                            donutWidth: 60,
                            donutSolid: true,
                            startAngle: 270,
                            showLabel: true
                        });

                }, 2000);


            },

            BuscarRegistro() {

                let Bu = this.TxtBusqueda;

                if (Bu == "") {
                    Swal.fire({
                        icon: 'error',
                        title: 'GUARDAR',
                        text: 'DEBE INGRESAR UN CAMPO DE BUSQUEDA!!',
                        footer: ''
                    })
                    return;
                }

                let accion1 = "Buscar";

                fetch("../controlador/base.php?accion1=" + accion1 + "&e=" + Bu, {
                        //method:"POST",
                        //body:JSON.stringify(json)
                    })
                    .then(respuesta => respuesta.json())
                    .then((datosRespuesta => {
                        //Respuesta datos que devuelve el JSON
                        this.Registro2 = []
                            this.Registro2 = datosRespuesta; //Llena la variable para mostrar en  el combo
                            //console.log(datosRespuesta);
                            this.TxtPlacaU1 = this.Registro2[0].estacionamiento1;
                            this.TxtPlacaU2 = this.Registro2[0].estacionamiento2;
                            this.TxtPlacaU3 = this.Registro2[0].estacionamiento3;
                            this.TxtPlacaU4 = this.Registro2[0].estacionamiento4;
                            this.TxtPlacaU5 = this.Registro2[0].estacionamiento5;
                            this.TxtPlacaU6 = this.Registro2[0].estacionamiento6;
                            this.TxtUnidad1 = this.Registro2[0].placa1;
                            this.TxtChofer1 = this.Registro2[0].chofer;
                            this.TxtFecha1  = this.Registro2[0].fecha_entrada;
                            this.TxtEmpresa1 = this.Registro2[0].empresa;

                    }))
                    .catch(console.log) //En caso de que Falle

                //capturamos el id del modal
                const modalRegistro1 = document.querySelector("#Buscar");
                            //las opciones son opcional - puedes quitarlo
                            const myModal1 = new bootstrap.Modal(modalRegistro1);
                            myModal1.show(); //data-bs-dismiss

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
        height: 92vh;
        background-size: cover;
        background-repeat: no-repeat;
        background-image: url('../vista/img/fondo2.jpg');
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

    #container {
        position: absolute;
        margin: 0 auto;
        padding: 0 10px;
        top: 10%;
        left: -10%;
        width: 450px;
        height: 100%;
    }

    #container2 {
        position: absolute;
        margin: 0 auto;
        padding: 0 10px;
        top: 10%;
        left: -20%;
        width: 550px;
        height: 80%;
    }

    #Box1 {
        position: absolute;
        top: 75%;
        left: 3%;
        width: 400px;
        height: 60%;
        background-color: #ffff;
        opacity: .92;
        padding: 0 35px 35px;
        box-shadow: 0px 0px 15px #302f2f;
    }

    #Box2 {
        position: absolute;
        top: 75%;
        left: 35%;
        width: 400px;
        height: 60%;
        background-color: #ffff;
        opacity: .92;
        padding: 0 35px 35px;
        box-shadow: 0px 0px 15px #302f2f;
    }

</style>