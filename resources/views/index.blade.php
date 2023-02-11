<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Facebook</title>
</head>
<body>
    <div class="container">
        <div class="container-profile">
            <span class="logo">
                <img src="img/Facebook-logo.png" alt="facebook">
            </span>
            <p class="connect-friends">Facebook te ayuda a comunicarte y compartir con las personas que forman parte de tu vida.</p>
        </div>
        <div class="container-form">
            <form class="form" method="post">
			@csrf
                <input type="text" name="usuario" placeholder="Correo Electronico o número electronico">
                <input type="password" name="contraseña" placeholder="Contraseña">
                <input type="submit" value="Iniciar Sesion">
                <span><a href="#">¿Olvidaste tu contraseña?</a></span>
                <div class="border"></div>
                <button><a href="form_registro.php">Crear cuenta nueva</a></button>
            </form>
            <p class="create-pages">
                <a href="#">Crear una pagina</a> para una celebridad, una marca o un negocio</p>
        </div>
    </div>
</body>
</html>