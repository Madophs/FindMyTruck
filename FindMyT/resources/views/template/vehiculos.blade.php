<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            @include('template.menu')
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href=""> Vehiculos </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-planet"></i>
                                    <span class="notification">5</span>
                                    <span class="d-lg-none">Notification</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Notificación 1</a>
                                    <a class="dropdown-item" href="#">Notificación 2</a>
                                    <a class="dropdown-item" href="#">Notificación 3</a>
                                    <a class="dropdown-item" href="#">Notificación 4</a>
                                    <a class="dropdown-item" href="#">Otra notificación</a>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <span class="d-lg-block">&nbsp;Busqueda</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('perfil') }}">
                                    <span class="no-icon">Mi perfil</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <p class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form2').submit();">
                                    <span class="no-icon">Cerrar sessión</span>
                                </p>
                                <form id="logout-form2" action="{{ route('logout')}}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>     
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->


            <div style="width: 80%; margin: auto; padding: 30px;">
                <a href="{{ route('conductores.agregar') }}" class="btn btn-primary float-left mb-1">
                    <img src="{{ asset('images/add-24.png') }}" alt="">
                </a>
                <div style = "clear: both;"></div>
                <table class="table table-bordered">
                    <thead style="background-color: black;">
                        <tr>
                            <th scope="col" style="color: white; font-weight: bold;">#</th>
                            <th scope="col" style="color: white; font-weight: bold;">Marca</th>
                            <th scope="col" style="color: white; font-weight: bold;">Modelo</th>
                            <th scope="col" style="color: white; font-weight: bold;">Fabricante</th>
                            <th scope="col" style="color: white; font-weight: bold;">Color</th>
                            <th scope="col" style="color: white; font-weight: bold;">Año</th>
                            <th scope="col" style="color: white; font-weight: bold;">No Placas</th>
                            <th scope="col" style="color: white; font-weight: bold;">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Honda</td>
                        <td>Si Coupe</td>
                        <td>Honda</td>
                        <td>azul</td>
                        <td>2020</td>
                        <td>qwerty</td>
                        <td>
                            <a href="" class="btn btn-warning">
                                <img src="{{ asset('images/edit-2-24.png') }}" alt="">
                            </a>
                            <a href="" class="btn btn-danger">
                                <img src="{{ asset('images/x-mark-3-24.png') }}" alt="">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Ford Explorer</td>
                        <td>Platinum</td>
                        <td>Ford</td>
                        <td>Roja</td>
                        <td>2020</td>
                        <td>qwertyyu</td>
                        <td>
                            <a href="" class="btn btn-warning">
                                <img src="{{ asset('images/edit-2-24.png') }}" alt="">
                            </a>
                            <a href="" class="btn btn-danger">
                                <img src="{{ asset('images/x-mark-3-24.png') }}" alt="">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Lamborguini</td>
                        <td>Huracan</td>
                        <td>Lamborguini</td>
                        <td>Amarillo</td>
                        <td>2014</td>
                        <td>labo1234</td>
                        <td>
                            <a href="" class="btn btn-warning">
                                <img src="{{ asset('images/edit-2-24.png') }}" alt="">
                            </a>
                            <a href="" class="btn btn-danger">
                                <img src="{{ asset('images/x-mark-3-24.png') }}" alt="">
                            </a>
                        </td>
                    </tr>
        
                    </tbody>
                </table>
            </div>


            <footer class="footer" style="position:fixed; bottom:0;">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="">Jaguar Code</a> Instituto Técnologico Superior de Ciudad Hidalgo
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>

</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Chartist Plugin  -->
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script>
    function agregarCanal(){
        var conductorNombre = $("#nombre").val();
        var conductorNumero = $("#canal").val();
        if(conductorNombre != "" && conductorNumero != ""){
            $('#msj-success').html("Canal "+conductorNombre+" fue guardado correctamente correctamente!!!");
            $('#msj-success').css('display','block');
            $('#msj-success').delay(2000).fadeOut(300);
            setTimeout(function() {
                window.location.replace("{{ route('conductores') }}");
            }, 2500);
            
        }else{
            $('#msj-error').html("Favor de llenar todos los campos.");
            $('#msj-error').css('display','block');
            $('#msj-error').delay(2000).fadeOut(300);
        }
    }
</script>

</html>
