<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>
</head>

<body>
    <main>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>Ya tienes una cuenta</h3>
                    <p>Inicia seseion para entrar en la pagina</p>
                    <button id="btn_iniciar-sesion">Iniciar sesion</button>
                </div>
                <div class="caja__trasera-registro">
                    <h3>Aun no tienes cuenta</h3>
                    <p>Registrate para que puedas iniciar sesion</p>
                    <button id="btn_registro">Registrarse</button>
                </div>
            </div>

            <div class="contenedor__login-registro">
                <form action="" class="formulario__login">
                    <h2>Iniciar sesion</h2>
                    <input type="text" placeholder="Correo electronico">
                    <input type="password" placeholder="Contraseña">
                    <button>Entrar</button>
                </form>

                <form action="../Login-Register/PHP/registro_usuarios_db.php" method="POST" class="formulario__registro">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="nombre completo" name="nombre_completo">
                    <input type="text" placeholder="CorreoElectronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>

    </main>

    <script src="JS/script.js"></script>


</body>

</html>