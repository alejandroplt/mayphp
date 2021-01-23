<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>MayLu - Vendedor</title>

    <!-- using online links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">

    <!-- using local links -->
    <!-- <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css"> -->

    <link rel="stylesheet" href="styles/estilos-principal.css">
    <link rel="stylesheet" href="styles/sidebar-themes.css">
    <link rel="stylesheet" href="styles/estilos-nuevoproducto.css">
    <link rel="stylesheet" href="styles/popups.css">
    <link rel="shortcut icon" type="image/png" href="img/icon.png" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
</head>

<body>

     <div class="page-wrapper default-theme sidebar-bg bg1 toggled">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    
     </button>
     <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
         <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <!-- sidebar-brand  -->
                <div class="sidebar-item sidebar-brand">
                    <span align="center">
                        <i class="fa fa-shoe-prints"></i>
                        MayLú
                    </span>
                </div>
                <div class="sidebar-item sidebar-header d-flex flex-nowrap">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" src="img/user.png" alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name"><strong>Carlos
                                Loaeza</strong>
                        </span>
                        <span class="user-role">Almacén</span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                    </div>
                </div>
                 <!-- sidebar-menu  -->
              <div class=" sidebar-item sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>General</span>
                        </li>
                        <li>
                            <a href="principal-vendedor.html">
                                <i class="fa fa-tachometer-alt"></i>
                                <span class="menu-text">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="Punto-Venta-Vendedor.html">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="menu-text">Punto de Venta</span>
                            </a>
                        </li>
                        <li>
                            <a href="Almacen-Vendedor.html">
                                <i class="fa fa-warehouse"></i>
                                <span class="menu-text">Inventario</span>
                            </a>
                        </li>
                        <li class="header-menu">
                            <span>Extra</span>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-question"></i>
                                <span class="menu-text">Ayuda</span>
                                <span class="badge badge-pill badge-primary">Prox</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-calendar"></i>
                                <span class="menu-text">Calendario</span>
                                <span class="badge badge-pill badge-primary">Prox</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" id="btnabrir">
                                <i class="fa fa-power-off"></i>
                                <span class="menu-text" onclick="cierra()">Cerrar sesión</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <div class="sidebar-footer">
                <div class="dropdown">
                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-laptop-code"></i>
                        <i class="fa fa-terminal"></i>
                        <span> codiguITO</span>
                    </a>
                </div>
            </div>
          
        </nav>
        </div>
            <!-- contenido  -->
        <main class="page-content pt-2">
            <div id="overlay" class="overlay"></div>
            <section id="main-content">

                <article>
                    <div id="divnombre">
                        <p id="pnombre"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg> Nombre</p>
                    </div>
                    <div id="divcerrar">
                        <button class="btn-tiny btn-danger">
                            Cerrar Sesión <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                <path fill-rule="evenodd"
                                    d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                            </svg></button>
                    </div>
                    <header id="encabezado">
                        <img id="img-inventario" class="img-responsive img-rounded" src="img/punto.png" height="150"
                            width="150" alt="Inventario picture">
                        <br>
                        <br>
                        <h1>Punto de Venta</h1>
                    </header>

                    <div class="row ventas">
                        <div class="col-md-8">
                            <div class="datos">
                                <div id="container">
                                    <div class="field" id="searchform">
                                        <input type="text" id="searchterm" placeholder="Ingresar Modelo" />
                                        <button type="button" id="search">Buscar</button>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered" id="tablee">
                                            <thead>
                                                <tr>
                                                    <th>Codigo</th>
                                                    <th>Foto</th>
                                                    <th>Cantidad</th>
                                                    <th>Talla</th>
                                                    <th>Color</th>
                                                    <th>Precio</th>
                                                    <th>Quitar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>4500MX</td>
                                                    <td></td>
                                                    <td>$250</td>
                                                    <td>22</td>
                                                    <td>Rojo</td>
                                                    <td>7</td>
                                                    <td><button class="quitar" onclick="borraElemento(this);"><i
                                                        class="fas fa-trash-alt"></i></button></td>
                                                </tr>
                                                <tr>
                                                    <td>4500MX</td>
                                                    <td></td>
                                                    <td>$280</td>
                                                    <td>24</td>
                                                    <td>Rosa</td>
                                                    <td>10</td>
                                                    <td><button class="quitar" onclick="borraElemento(this);"><i
                                                        class="fas fa-trash-alt"></i></button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="detalles">
                                <h1>Detalles</h1>
                                <h3>Fecha y hora: </h3>
                                <div class="wrap">
                                        <div class="fecha">
                                            <p id="diaSemana" class="diaSemana"></p>
                                            <p id="dia" class="dia"></p>
                                            <p>de </p>
                                            <p id="mes" class="mes"></p>
                                            <p>del </p>
                                            <p id="year" class="year"></p>
                                            <div class="reloj">
                                                <p id="horas" class="horas"></p>
                                                <p>:</p>
                                                <p id="minutos" class="minutos"></p>
                                                <p>:</p>                                   
                                                    <p id="segundos" class="segundos"></p>
                                                    <p id="ampm" class="ampm"></p>
                                            </div>
                                        </div>
                                    </div>
                                <h3>Vendedor: </h3>
                                <h3>Total:</h3>
                                <h3>Recibido:</h3>
                                <h3>Cambio:</h3>

                                <div class="botones">
                                    <button id="hecho" class="btn btn-success">
                                        <i class="fas fa-check"></i> Concretar Venta
                                    </button>
                                    <button id="cancel" class="btn btn-success">
                                        <i class="fas fa-times"></i> Cancelar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </section>


        </main>
        </nav>
    </div>
    <!-- page-wrapper -->

    <!-- using online scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
        </script>
    <script src="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- using local scripts -->
    <!-- <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script> -->

    <script src="js/popups.js"></script>
    <script src="js/vendedor/principal-vendedor.js"></script>

</body>

</html>