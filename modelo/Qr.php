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

        <!-- CUERPO DEL PROGRAMA-->
        <div class="text-center" id="Lista">

            <div class="row row-cols-8" id="Impresion">
                <div class="col-4">
                    <div class="container" id="C1">
                        <h1 class="fs-2 card-title text-center" id="codigo-qr1"></h1>
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>PLACA</th>
                                </th>
                                <td>
                                    <h6 class="h6 card-subtitle text-left" id="NomQR1"></h5>
                                </td>
                            </tr>
                            <tr>
                                <th>CONDUCTOR</th>
                                <td>
                                    <h6 class="h6 card-subtitle text-left" id="Conductor"></h5>
                                </td>
                            </tr>
                            <tr>
                                <th>EMPRESA</th>
                                <td>
                                    <h6 class="h6 card-subtitle text-left" id="Empresa"></h5>
                                </td>
                            </tr>
                            <tr>
                                <th>CARGA</th>
                                <td>
                                    <h6 class="h6 card-subtitle text-left" id="Carga"></h5>
                                </td>
                            </tr>
                            <label id="FechaLabel"></label>
                        </table>
                    </div>
                </div>
                <div class="col-4">
                    <div class="container" id="C2">
                        <h1 class="fs-2 card-title text-center" id="codigo-qr2"></h1>
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>PLACA</th>
                                </th>
                                <td>
                                    <h6 class="h6 card-subtitle text-left" id="NomQR2"></h5>
                                </td>
                            </tr>
                            <tr>
                                <th>CONDUCTOR</th>
                                <td>
                                    <h6 class="h6 card-subtitle text-left" id="Conductor2"></h5>
                                </td>
                            </tr>
                            <tr>
                                <th>EMPRESA</th>
                                <td>
                                    <h6 class="h6 card-subtitle text-left" id="Empresa2"></h5>
                                </td>
                            </tr>
                            <tr>
                                <th>CARGA</th>
                                <td>
                                    <h6 class="h6 card-subtitle text-left" id="Carga2"></h5>
                                </td>
                            </tr>
                            <label id="FechaLabel2"></label>
                        </table>
                    </div>
                </div>
                <div class="col-4">
                    <div class="container" id="C3">
                    <h1 class="fs-2 card-title text-center" id="codigo-qr3"></h1>
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>PLACA</th>
                                </th>
                                <td>
                                    <h6 class="h6 card-subtitle text-left" id="NomQR3"></h5>
                                </td>
                            </tr>
                            <tr>
                                <th>CONDUCTOR</th>
                                <td>
                                    <h6 class="h6 card-subtitle text-left" id="Conductor3"></h5>
                                </td>
                            </tr>
                            <tr>
                                <th>EMPRESA</th>
                                <td>
                                    <h6 class="h6 card-subtitle text-left" id="Empresa3"></h5>
                                </td>
                            </tr>
                            <tr>
                                <th>CARGA</th>
                                <td>
                                    <h6 class="h6 card-subtitle text-left" id="Carga3"></h5>
                                </td>
                            </tr>
                            <label id="FechaLabel3"></label>
                        </table>
                    </div>
                </div>
                <div class="col-4">
                    <div class="container" id="C4">
                    <h1 class="fs-2 card-title text-center" id="codigo-qr4"></h1>
                    <table class="table table-striped table-hover">
                            <tr>
                                <th>PLACA</th>
                                </th>
                                <td>
                                    <h6 class="h6 card-subtitle text-left" id="NomQR4"></h5>
                                </td>
                            </tr>
                            <tr>
                                <th>CONDUCTOR</th>
                                <td>
                                    <h6 class="h6 card-subtitle text-left" id="Conductor4"></h5>
                                </td>
                            </tr>
                            <tr>
                                <th>EMPRESA</th>
                                <td>
                                    <h6 class="h6 card-subtitle text-left" id="Empresa4"></h5>
                                </td>
                            </tr>
                            <tr>
                                <th>CARGA</th>
                                <td>
                                    <h6 class="h6 card-subtitle text-left" id="Carga4"></h5>
                                </td>
                            </tr>
                            <label id="FechaLabel4"></label>
                        </table>
                    </div>
                </div>
                <div class="col-4">
                    <div class="container" id="C5">
                    <h1 class="fs-2 card-title text-center" id="codigo-qr5"></h1>
                    <table class="table table-striped table-hover">
                            <tr>
                                <th>PLACA</th>
                                </th>
                                <td>
                                    <h6 class="h6 card-subtitle text-left" id="NomQR5"></h5>
                                </td>
                            </tr>
                            <tr>
                                <th>CONDUCTOR</th>
                                <td>
                                    <h6 class="h6 card-subtitle text-left" id="Conductor5"></h5>
                                </td>
                            </tr>
                            <tr>
                                <th>EMPRESA</th>
                                <td>
                                    <h6 class="h6 card-subtitle text-left" id="Empresa5"></h5>
                                </td>
                            </tr>
                            <tr>
                                <th>CARGA</th>
                                <td>
                                    <h6 class="h6 card-subtitle text-left" id="Carga5"></h5>
                                </td>
                            </tr>
                            <label id="FechaLabel5"></label>
                        </table>
                    </div>
                </div>
                <div class="col-4">
                    <div class="container" id="C6">
                        <h1 class="fs-2 card-title text-center" id="codigo-qr6"></h1>
                        <table class="table table-striped table-hover">
                                <tr>
                                    <th>PLACA</th>
                                    </th>
                                    <td>
                                        <h6 class="h6 card-subtitle text-left" id="NomQR6"></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <th>CONDUCTOR</th>
                                    <td>
                                        <h6 class="h6 card-subtitle text-left" id="Conductor6"></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <th>EMPRESA</th>
                                    <td>
                                        <h6 class="h6 card-subtitle text-left" id="Empresa6"></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <th>CARGA</th>
                                    <td>
                                        <h6 class="h6 card-subtitle text-left" id="Carga6"></h5>
                                    </td>
                                </tr>
                                <label id="FechaLabel6"></label>
                            </table>
                    </div>
                </div>
                <div class="col-4">
                    <div class="container" id="C7">
                        <h1 class="fs-2 card-title text-center" id="codigo-qr7"></h1>
                        <table class="table table-striped table-hover">
                                <tr>
                                    <th>PLACA</th>
                                    </th>
                                    <td>
                                        <h6 class="h6 card-subtitle text-left" id="NomQR7"></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <th>CONDUCTOR</th>
                                    <td>
                                        <h6 class="h6 card-subtitle text-left" id="Conductor7"></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <th>EMPRESA</th>
                                    <td>
                                        <h6 class="h6 card-subtitle text-left" id="Empresa7"></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <th>CARGA</th>
                                    <td>
                                        <h6 class="h6 card-subtitle text-left" id="Carga7"></h5>
                                    </td>
                                </tr>
                                <label id="FechaLabel7"></label>
                            </table>
                    </div>
                </div>
                <div class="col-4">
                    <div class="container" id="C8">
                        <h1 class="fs-2 card-title text-center" id="codigo-qr8"></h1>
                        <table class="table table-striped table-hover">
                                <tr>
                                    <th>PLACA</th>
                                    </th>
                                    <td>
                                        <h6 class="h6 card-subtitle text-left" id="NomQR8"></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <th>CONDUCTOR</th>
                                    <td>
                                        <h6 class="h6 card-subtitle text-left" id="Conductor8"></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <th>EMPRESA</th>
                                    <td>
                                        <h6 class="h6 card-subtitle text-left" id="Empresa8"></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <th>CARGA</th>
                                    <td>
                                        <h6 class="h6 card-subtitle text-left" id="Carga8"></h5>
                                    </td>
                                </tr>
                                <label id="FechaLabel8"></label>
                            </table>
                    </div>
                </div>
                <div class="col-4">
                    <div class="container" id="C9">
                        <h1 class="fs-2 card-title text-center" id="codigo-qr9"></h1>
                        <table class="table table-striped table-hover">
                                <tr>
                                    <th>PLACA</th>
                                    </th>
                                    <td>
                                        <h6 class="h6 card-subtitle text-left" id="NomQR9"></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <th>CONDUCTOR</th>
                                    <td>
                                        <h6 class="h6 card-subtitle text-left" id="Conductor9"></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <th>EMPRESA</th>
                                    <td>
                                        <h6 class="h6 card-subtitle text-left" id="Empresa9"></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <th>CARGA</th>
                                    <td>
                                        <h6 class="h6 card-subtitle text-left" id="Carga9"></h5>
                                    </td>
                                </tr>
                                <label id="FechaLabel9"></label>
                            </table>
                    </div>
                </div>
                <div class="col-4">
                    <div class="container" id="C10">
                        <h1 class="fs-2 card-title text-center" id="codigo-qr10"></h1>
                        <table class="table table-striped table-hover">
                                <tr>
                                    <th>PLACA</th>
                                    </th>
                                    <td>
                                        <h6 class="h6 card-subtitle text-left" id="NomQR10"></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <th>CONDUCTOR</th>
                                    <td>
                                        <h6 class="h6 card-subtitle text-left" id="Conductor10"></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <th>EMPRESA</th>
                                    <td>
                                        <h6 class="h6 card-subtitle text-left" id="Empresa10"></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <th>CARGA</th>
                                    <td>
                                        <h6 class="h6 card-subtitle text-left" id="Carga10"></h5>
                                    </td>
                                </tr>
                                <label id="FechaLabel10"></label>
                            </table>
                    </div>
                </div>
                <div class="col-4">
                    <div class="container" id="C11">
                        <h1 class="fs-2 card-title text-center" id="codigo-qr11"></h1>
                        <table class="table table-striped table-hover">
                                <tr>
                                    <th>PLACA</th>
                                    </th>
                                    <td>
                                        <h6 class="h6 card-subtitle text-left" id="NomQR11"></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <th>CONDUCTOR</th>
                                    <td>
                                        <h6 class="h6 card-subtitle text-left" id="Conductor11"></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <th>EMPRESA</th>
                                    <td>
                                        <h6 class="h6 card-subtitle text-left" id="Empresa11"></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <th>CARGA</th>
                                    <td>
                                        <h6 class="h6 card-subtitle text-left" id="Carga11"></h5>
                                    </td>
                                </tr>
                                <label id="FechaLabel11"></label>
                            </table>
                    </div>
                </div>
                <div class="col-4">
                    <div class="container" id="C12">
                        <h1 class="fs-2 card-title text-center" id="codigo-qr12"></h1>
                        <table class="table table-striped table-hover">
                                <tr>
                                    <th>PLACA</th>
                                    </th>
                                    <td>
                                        <h6 class="h6 card-subtitle text-left" id="NomQR12"></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <th>CONDUCTOR</th>
                                    <td>
                                        <h6 class="h6 card-subtitle text-left" id="Conductor12"></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <th>EMPRESA</th>
                                    <td>
                                        <h6 class="h6 card-subtitle text-left" id="Empresa12"></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <th>CARGA</th>
                                    <td>
                                        <h6 class="h6 card-subtitle text-left" id="Carga12"></h5>
                                    </td>
                                </tr>
                                <label id="FechaLabel12"></label>
                            </table>
                    </div>
                </div>
            </div>

        </div>
        <!--HASTA AQUI CUERPO DEL PROGRAMA-->

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
                TxtBuscar1: "",
                TxtBuscar2: "",
                Usuarios: [],
                Registro2: [],
                Registros3: [],
                Reg: [],
                TotalRegistros: 0,
                Pagina: 0,
                TotalPaginas: 0,
                Id1: "",
                Page: 1,
            }
        },
        //Cuando inicia la Aplicacion
        mounted() {
            this.Imprimir();
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

            Imprimir() {

                accion1 = "ListarTemp";

                let F = document.getElementById('FechaLabel');
                let F2 = document.getElementById('FechaLabel2');
                let F3 = document.getElementById('FechaLabel3');
                let F4 = document.getElementById('FechaLabel4');
                let F5 = document.getElementById('FechaLabel5');
                let F6 = document.getElementById('FechaLabel6');
                let F7 = document.getElementById('FechaLabel7');
                let F8 = document.getElementById('FechaLabel8');
                let F9 = document.getElementById('FechaLabel9');
                let F10 = document.getElementById('FechaLabel10');
                let F11 = document.getElementById('FechaLabel11');
                let F12 = document.getElementById('FechaLabel12');


                        const fecha = Date.now();
                        const hoy = new Date(fecha);
                        
                        F.innerHTML = "FECHA: " + hoy.toLocaleDateString('es-CL', {
                                                    timeZone: 'America/Caracas'
                                                });
                        F2.innerHTML = "FECHA: " + hoy.toLocaleDateString('es-CL', {
                                                    timeZone: 'America/Caracas'
                                                });
                        F3.innerHTML = "FECHA: " + hoy.toLocaleDateString('es-CL', {
                                                    timeZone: 'America/Caracas'
                                                });
                        F4.innerHTML = "FECHA: " + hoy.toLocaleDateString('es-CL', {
                                                    timeZone: 'America/Caracas'
                                                });
                        F5.innerHTML = "FECHA: " + hoy.toLocaleDateString('es-CL', {
                                                    timeZone: 'America/Caracas'
                                                });
                        F6.innerHTML = "FECHA: " + hoy.toLocaleDateString('es-CL', {
                                                    timeZone: 'America/Caracas'
                                                });
                        F7.innerHTML = "FECHA: " + hoy.toLocaleDateString('es-CL', {
                                                    timeZone: 'America/Caracas'
                                                });
                        F8.innerHTML = "FECHA: " + hoy.toLocaleDateString('es-CL', {
                                                    timeZone: 'America/Caracas'
                                                });
                        F9.innerHTML = "FECHA: " + hoy.toLocaleDateString('es-CL', {
                                                    timeZone: 'America/Caracas'
                                                });
                        F10.innerHTML = "FECHA: " + hoy.toLocaleDateString('es-CL', {
                                                    timeZone: 'America/Caracas'
                                                });
                        F11.innerHTML = "FECHA: " + hoy.toLocaleDateString('es-CL', {
                                                    timeZone: 'America/Caracas'
                                                });
                        F12.innerHTML = "FECHA: " + hoy.toLocaleDateString('es-CL', {
                                                    timeZone: 'America/Caracas'
                                                });


                fetch(this.Direccion + accion1, {
                        //method:"POST",
                        //body:JSON.stringify(accion1)
                    })
                    .then(respuesta => respuesta.json())
                    .then((datosRespuesta => {
                        //Respuesta datos que devuelve el JSON
                        //console.log(datosRespuesta);
                        if (typeof datosRespuesta[0].success === 'undefined') {
                            //Variable para cargar datos del Combo box para la busqueda
                            this.Registros3 = []
                            this.Registros3 = datosRespuesta[0]; //Llena la variable para mostrar en  el combo
                            let N1, N2, N3, N4, N5, N6, N7, N8, N9, N10, N11, N12;
                            let N1_1, N1_2, N1_3, N1_4, N1_5, N1_6, N1_7, N1_8, N1_9, N1_10, N1_11, N1_12;
                            let N2_1, N2_2, N2_3, N2_4, N2_5, N2_6, N2_7, N2_8, N2_9, N2_10, N2_11, N2_12;
                            let N3_1, N3_2, N3_3, N3_4, N3_5, N3_6, N3_7, N3_8, N3_9, N3_10, N3_11, N3_12;
                            let N4_1, N4_2, N4_3, N4_4, N4_5, N4_6, N4_7, N4_8, N4_9, N4_10, N4_11, N4_12;
                            var x1 = document.getElementById("C1");
                            var x2 = document.getElementById("C2");
                            var x3 = document.getElementById("C3");
                            var x4 = document.getElementById("C4");
                            var x5 = document.getElementById("C5");
                            var x6 = document.getElementById("C6");
                            var x7 = document.getElementById("C7");
                            var x8 = document.getElementById("C8");
                            var x9 = document.getElementById("C9");
                            var x10 = document.getElementById("C10");
                            var x11 = document.getElementById("C11");
                            var x12 = document.getElementById("C12");

                            x1.style.display = "block";
                            x2.style.display = "block";
                            x3.style.display = "block";
                            x4.style.display = "block";
                            x5.style.display = "block";
                            x6.style.display = "block";
                            x7.style.display = "block";
                            x8.style.display = "block";
                            x9.style.display = "block";
                            x10.style.display = "block";
                            x11.style.display = "block";
                            x12.style.display = "block";

                            let i2 = 0;
                            for (i = 0; i < datosRespuesta.length; i++) {

                                i2 = i2 + 1
                                if (N1 == null && i == 0) {
                                    this.Registros3 = datosRespuesta[i];
                                    N1   = this.Registros3.placa;
                                    N1_1 = this.Registros3.chofer;
                                    N2_1 = this.Registros3.empresa;
                                    N3_1 = this.Registros3.carga;
                                    N4_1 = this.Registros3.placa;
                                }

                                if (N1 != null && N2 == null && i == 1) {
                                    this.Registros3 = datosRespuesta[i];
                                    N2 = this.Registros3.placa;
                                    N1_2 = this.Registros3.chofer;
                                    N2_2 = this.Registros3.empresa;
                                    N3_2 = this.Registros3.carga;
                                    N4_2 = this.Registros3.placa;
                                }

                                if (N1 != null && N2 != null && i == 2) {
                                    this.Registros3 = datosRespuesta[i];
                                    N3 = this.Registros3.placa;
                                    N1_3 = this.Registros3.chofer;
                                    N2_3 = this.Registros3.empresa;
                                    N3_3 = this.Registros3.carga;
                                    N4_3 = this.Registros3.placa;
                                }

                                if (N1 != null && N2 != null && N3 != null && i == 3) {
                                    this.Registros3 = datosRespuesta[i];
                                    N4 = this.Registros3.placa;
                                    N1_4 = this.Registros3.chofer;
                                    N2_4 = this.Registros3.empresa;
                                    N3_4 = this.Registros3.carga;
                                    N4_4 = this.Registros3.placa;
                                }

                                if (N1 != null && N2 != null && N3 != null && N4 != null && i == 4) {
                                    this.Registros3 = datosRespuesta[i];
                                    N5 = this.Registros3.placa;
                                    N1_5 = this.Registros3.chofer;
                                    N2_5 = this.Registros3.empresa;
                                    N3_5 = this.Registros3.carga;
                                    N4_5 = this.Registros3.placa;
                                }

                                if (N1 != null && N2 != null && N3 != null && N4 != null && N5 != null && i == 5) {
                                    this.Registros3 = datosRespuesta[i];
                                    N6 = this.Registros3.placa;
                                    N1_6 = this.Registros3.chofer;
                                    N2_6 = this.Registros3.empresa;
                                    N3_6 = this.Registros3.carga;
                                    N4_6 = this.Registros3.placa;
                                }

                                if (N1 != null && N2 != null && N3 != null && N4 != null && N5 != null && N6 != null && i == 6) {
                                    this.Registros3 = datosRespuesta[i];
                                    N7 = this.Registros3.placa;
                                    N1_7 = this.Registros3.chofer;
                                    N2_7 = this.Registros3.empresa;
                                    N3_7 = this.Registros3.carga;
                                    N4_7 = this.Registros3.placa;
                                }

                                if (N1 != null && N2 != null && N3 != null && N4 != null && N5 != null && N6 != null && N7 != null && i == 7) {
                                    this.Registros3 = datosRespuesta[i];
                                    N8 = this.Registros3.placa;
                                    N1_8 = this.Registros3.chofer;
                                    N2_8 = this.Registros3.empresa;
                                    N3_8 = this.Registros3.carga;
                                    N4_8 = this.Registros3.placa;
                                }

                                if (N1 != null && N2 != null && N3 != null && N4 != null && N5 != null && N6 != null && N7 != null && N8 != null && i == 8) {
                                    this.Registros3 = datosRespuesta[i];
                                    N9 = this.Registros3.placa;
                                    N1_9 = this.Registros3.chofer;
                                    N2_9 = this.Registros3.empresa;
                                    N3_9 = this.Registros3.carga;
                                    N4_9 = this.Registros3.placa;
                                }

                                if (N1 != null && N2 != null && N3 != null && N4 != null && N5 != null && N6 != null && N7 != null && N8 != null && N9 != null && i == 9) {
                                    this.Registros3 = datosRespuesta[i];
                                    N10 = this.Registros3.placa;
                                    N1_10 = this.Registros3.chofer;
                                    N2_10 = this.Registros3.empresa;
                                    N3_10 = this.Registros3.carga;
                                    N4_10 = this.Registros3.placa;
                                }

                                if (N1 != null && N2 != null && N3 != null && N4 != null && N5 != null && N6 != null && N7 != null && N8 != null && N9 != null && N10 != null && i == 10) {
                                    this.Registros3 = datosRespuesta[i];
                                    N11 = this.Registros3.placa;
                                    N1_11 = this.Registros3.chofer;
                                    N2_11 = this.Registros3.empresa;
                                    N3_11 = this.Registros3.carga;
                                    N4_11 = this.Registros3.placa;
                                }

                                if (N1 != null && N2 != null && N3 != null && N4 != null && N5 != null && N6 != null && N7 != null && N8 != null && N9 != null && N10 != null && N11 != null && i == 11) {
                                    this.Registros3 = datosRespuesta[i];
                                    N12 = this.Registros3.placa;
                                    N1_12 = this.Registros3.chofer;
                                    N2_12 = this.Registros3.empresa;
                                    N3_12 = this.Registros3.carga;
                                    N4_12 = this.Registros3.placa;
                                }

                            }

                            if (N1 != null) {
                                const codigoQRDiv1 = document.getElementById('codigo-qr1');
                                codigoQRDiv1.innerHTML = '';
                                const codigoQR = new QRCode(codigoQRDiv1, {
                                    text: N4_1,
                                    width: 128,
                                    height: 128
                                });
                                document.getElementById('NomQR1').innerHTML = N1;
                                document.getElementById('Conductor').innerHTML = N1_1;
                                document.getElementById('Empresa').innerHTML = N2_1;
                                document.getElementById('Carga').innerHTML = N3_1;
                            } else {
                                x1.style.display = "none";
                            }

                            if (N2 != null) {
                                const codigoQRDiv2 = document.getElementById('codigo-qr2');
                                codigoQRDiv2.innerHTML = '';
                                const codigoQR2 = new QRCode(codigoQRDiv2, {
                                    text: N4_2,
                                    width: 128,
                                    height: 128
                                });
                                document.getElementById('NomQR2').innerHTML = N2;
                                document.getElementById('Conductor2').innerHTML = N1_2;
                                document.getElementById('Empresa2').innerHTML = N2_2;
                                document.getElementById('Carga2').innerHTML = N3_2;
                            } else {
                                x2.style.display = "none";
                            }

                            if (N3 != null) {
                                const codigoQRDiv3 = document.getElementById('codigo-qr3');
                                codigoQRDiv3.innerHTML = '';
                                const codigoQR3 = new QRCode(codigoQRDiv3, {
                                    text: N4_3,
                                    width: 128,
                                    height: 128
                                });
                                document.getElementById('NomQR3').innerHTML = N3;
                                document.getElementById('Conductor3').innerHTML = N1_3;
                                document.getElementById('Empresa3').innerHTML = N2_3;
                                document.getElementById('Carga3').innerHTML = N3_3;
                            } else {
                                x3.style.display = "none";
                            }

                            if (N4 != null) {

                                const codigoQRDiv4 = document.getElementById('codigo-qr4');
                                codigoQRDiv4.innerHTML = '';
                                const codigoQR4 = new QRCode(codigoQRDiv4, {
                                    text: N4_4,
                                    width: 128,
                                    height: 128
                                });
                                document.getElementById('NomQR4').innerHTML = N4;
                                document.getElementById('Conductor4').innerHTML = N1_4;
                                document.getElementById('Empresa4').innerHTML = N2_4;
                                document.getElementById('Carga4').innerHTML = N3_4;
                            } else {
                                x4.style.display = "none";
                            }

                            if (N5 != null) {

                                const codigoQRDiv5 = document.getElementById('codigo-qr5');
                                codigoQRDiv5.innerHTML = '';
                                const codigoQR5 = new QRCode(codigoQRDiv5, {
                                    text: N4_5,
                                    width: 128,
                                    height: 128
                                });
                                document.getElementById('NomQR5').innerHTML = N5;
                                document.getElementById('Conductor5').innerHTML = N1_5;
                                document.getElementById('Empresa5').innerHTML = N2_5;
                                document.getElementById('Carga5').innerHTML = N3_5;
                            } else {
                                x5.style.display = "none";
                            }

                            if (N6 != null) {

                                const codigoQRDiv6 = document.getElementById('codigo-qr6');
                                codigoQRDiv6.innerHTML = '';
                                const codigoQR6 = new QRCode(codigoQRDiv6, {
                                    text: N6,
                                    width: 128,
                                    height: 128
                                });
                                document.getElementById('NomQR6').innerHTML = N6;
                                document.getElementById('Conductor6').innerHTML = N1_6;
                                document.getElementById('Empresa6').innerHTML = N2_6;
                                document.getElementById('Carga6').innerHTML = N3_6;
                            } else {
                                x6.style.display = "none";
                            }

                            if (N7 != null) {

                                const codigoQRDiv7 = document.getElementById('codigo-qr7');
                                codigoQRDiv7.innerHTML = '';
                                const codigoQR7 = new QRCode(codigoQRDiv7, {
                                    text: N4_7,
                                    width: 128,
                                    height: 128
                                });
                                document.getElementById('NomQR7').innerHTML = N7;
                                document.getElementById('Conductor7').innerHTML = N1_7;
                                document.getElementById('Empresa7').innerHTML = N2_7;
                                document.getElementById('Carga7').innerHTML = N3_7;
                            } else {
                                x7.style.display = "none";
                            }

                            if (N8 != null) {

                                const codigoQRDiv8 = document.getElementById('codigo-qr8');
                                codigoQRDiv8.innerHTML = '';
                                const codigoQR8 = new QRCode(codigoQRDiv8, {
                                    text: N4_8,
                                    width: 128,
                                    height: 128
                                });
                                document.getElementById('NomQR8').innerHTML = N8;
                                document.getElementById('Conductor8').innerHTML = N1_8;
                                document.getElementById('Empresa8').innerHTML = N2_8;
                                document.getElementById('Carga8').innerHTML = N3_8;
                            } else {
                                x8.style.display = "none";
                            }

                            if (N9 != null) {

                                const codigoQRDiv9 = document.getElementById('codigo-qr9');
                                codigoQRDiv9.innerHTML = '';
                                const codigoQR9 = new QRCode(codigoQRDiv9, {
                                    text: N4_9,
                                    width: 128,
                                    height: 128
                                });
                                document.getElementById('NomQR9').innerHTML = N9;
                                document.getElementById('Conductor9').innerHTML = N1_9;
                                document.getElementById('Empresa9').innerHTML = N2_9;
                                document.getElementById('Carga9').innerHTML = N3_9;
                            } else {
                                x9.style.display = "none";
                            }

                            if (N10 != null) {

                                const codigoQRDiv10 = document.getElementById('codigo-qr10');
                                codigoQRDiv10.innerHTML = '';
                                const codigoQR10 = new QRCode(codigoQRDiv10, {
                                    text: N4_10,
                                    width: 128,
                                    height: 128
                                });
                                document.getElementById('NomQR10').innerHTML = N10;
                                document.getElementById('Conductor10').innerHTML = N1_10;
                                document.getElementById('Empresa10').innerHTML = N2_10;
                                document.getElementById('Carga10').innerHTML = N3_10;
                            } else {
                                x10.style.display = "none";
                            }

                            if (N11 != null) {

                                const codigoQRDiv11 = document.getElementById('codigo-qr11');
                                codigoQRDiv11.innerHTML = '';
                                const codigoQR11 = new QRCode(codigoQRDiv11, {
                                    text: N4_11,
                                    width: 128,
                                    height: 128
                                });
                                document.getElementById('NomQR11').innerHTML = N11;
                                document.getElementById('Conductor11').innerHTML = N1_11;
                                document.getElementById('Empresa11').innerHTML = N2_11;
                                document.getElementById('Carga11').innerHTML = N3_11;
                            } else {
                                x11.style.display = "none";
                            }

                            if (N12 != null) {

                                const codigoQRDiv12 = document.getElementById('codigo-qr12');
                                codigoQRDiv12.innerHTML = '';
                                const codigoQR12 = new QRCode(codigoQRDiv12, {
                                    text: N4_12,
                                    width: 128,
                                    height: 128
                                });
                                document.getElementById('NomQR12').innerHTML = N12;
                                document.getElementById('Conductor12').innerHTML = N1_12;
                                document.getElementById('Empresa12').innerHTML = N2_12;
                                document.getElementById('Carga12').innerHTML = N3_12;
                            } else {
                                x12.style.display = "none";
                            }


                            this.$forceUpdate();
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
        width: 1300px;
        height: 50%;
    }
</style>