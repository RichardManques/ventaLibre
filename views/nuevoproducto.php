<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendedor</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<nav>
    <div class="nav-wrapper">
        <a class="brand-logo center gestion">Vendedor</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="mispedidos.php"></i>Mis ventas</a></li>
            <li><a href="nuevoproducto.php"></i>Agregar producto</a></li>
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
            <div class="col l4 m4 s12">
            </div>
            <div class="col l4 m4 s12">
                <h3>Ingresar Producto</h3>
                <form action="../controllers/ControlNuevoCliente.php" method="POST">
                    <div class="input-field">
                        <input id="rut" type="text" name="rut">
                        <label for="rut">Nombre</label>
                    </div>
                    <div class="input-field">
                        <input id="nombre" type="text" name="nombre">
                        <label for="nombre">Precio</label>
                    </div>
                    <div class="input-field">
                        <input id="direccion" type="text" name="direccion">
                        <label for="direccion"></label>
                    </div>
                    <div class="input-field">
                        <input id="telefono" type="text" name="telefono">
                        <label for="telefono">Cantidad</label>
                    </div>
                    <div class="input-field">
                        <input id="fecha" type="text" name="fecha" class="datepicker">
                        <label for="fecha">Estado</label>
                    </div>
                    <div class="input-field">
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    <button class="btn red">Crear</button>
                </form>
                <p class="red-text">
                    <?php
                        if(isset($_SESSION['error'])){
                            echo $_SESSION['error'];
                            unset ($_SESSION['error']);
                        }
                    ?>
                </p>
                <p class="green-text">
                <?php
                        if(isset($_SESSION['resp'])){
                            echo $_SESSION['resp'];
                            unset($_SESSION['resp']);
                        }
                    ?>
                </p>
            </div>
        </div>
    </div>
</body>
</html>