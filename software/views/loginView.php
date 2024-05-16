<?php
class loginView
{
    function __construct()
    {
    }

    function showFormSession()
    {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Corporación Tapia Pisá</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="img/favicon/apple-icon-152x152.png" type="image/x-icon" />

    <link rel="stylesheet" href="assets/css/estilosL.css" />
</head>

<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

<div class="contenedor__login-register">

<form action="" class="formulario__login">
    <h2>Iniciar Sesión</h2>
    <input type="text" placeholder="Correo Electronico" />
    <input type="password" placeholder="Contraseña" />
    <button>Entrar</button>
</form>

Register
<form action="" class="formulario__register">
        <h2>Regístrarse</h2>
        <input type="text" placeholder="Nombre completo" />
        <input type="text" placeholder="Correo Electronico" />
        <input type="text" placeholder="Usuario" />
        <input type="password" placeholder="Contraseña" />
        <button>Regístrarse</button>
    </form>
</div>
</div>
</main>

<script src="assets/js/script.js"></script>
</body>

</html>
<?php
    }
}
?>