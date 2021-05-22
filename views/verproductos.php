<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@500&display=swap" rel="stylesheet">
    <title>Ver productos</title>
<body>
<nav>
    <div class="nav-wrapper">
        <a class="brand-logo center gestion">Ver productos</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="../mostrarproductos.php"></i>Inicio</a></li>
            <li><a href="iniciarsesion.php"></i>Iniciar sesión</a></li>
            <li><a href="verproductos.php"></i>Ver productos</a></li>
            <li><a href="mispedidos.php"></i>Mis pedidos</a></li>
            <li><a href=""><i class="fas fa-shopping-cart"></i></a></li>
            <!--Barra para cerrar sesión-->
        </ul>
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">Menú</i></a>
    </div>
</nav>
<!--INICIO BARRA MOVIL-->
<ul id="slide-out" class="sidenav">
    <li><div class="user-view">
        <a href="#user"><img class="circle" src="../img/avatar.png"></a>
        <a href="#name"><span class="white-text name">Nombre</span></a>
        <a href="#email"><span class="white-text email">Correo</span></a>
        </div>
    </li>
    <li><a href="saliradmin.php" class="logout"><i class="fas fa-sign-out-alt"></i>Salir</a></li>
</ul>
<div class="container">
    <div class="row">
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-image">
                    <img src="https://clsonyb2c.vteximg.com.br/arquivos/ids/410252-1000-1000/5d02da5df552836db894cead8a68f5f3.jpg?v=637323396756130000">
                </div>
                <div class="card-content">
                    <p>
                    <span style="font-size:25px;color:black">Audifonos Sony</span>
                    </p>
                    <p>
                    <span style="font-size:25px;color:black">1</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-image">
                    <img src="https://clsonyb2c.vteximg.com.br/arquivos/ids/410252-1000-1000/5d02da5df552836db894cead8a68f5f3.jpg?v=637323396756130000">
                </div>
                <div class="card-content">
                    <p>
                    <span style="font-size:25px;color:black">Audifonos Sony</span>
                    </p>
                    <p>
                    <span style="font-size:25px;color:black">2</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-image">
                    <img src="https://clsonyb2c.vteximg.com.br/arquivos/ids/410252-1000-1000/5d02da5df552836db894cead8a68f5f3.jpg?v=637323396756130000">
                </div>
                <div class="card-content">
                    <p>
                    <span style="font-size:25px;color:black">Audifonos Sony</span>
                    </p>
                    <p>
                    <span style="font-size:25px;color:black">3</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-image">
                    <img src="https://clsonyb2c.vteximg.com.br/arquivos/ids/410252-1000-1000/5d02da5df552836db894cead8a68f5f3.jpg?v=637323396756130000">
                </div>
                <div class="card-content">
                    <p>
                    <span style="font-size:25px;color:black">Audifonos Sony</span>
                    </p>
                    <p>
                    <span style="font-size:25px;color:black">4</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-image">
                    <img src="https://clsonyb2c.vteximg.com.br/arquivos/ids/410252-1000-1000/5d02da5df552836db894cead8a68f5f3.jpg?v=637323396756130000">
                </div>
                <div class="card-content">
                    <p>
                    <span style="font-size:25px;color:black">Audifonos Sony</span>
                    </p>
                    <p>
                    <span style="font-size:25px;color:black">5</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!---FIN BARRA MOVIL-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://kit.fontawesome.com/254082c399.js" crossorigin="anonymous"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
    });
</script>

</body>
</html>