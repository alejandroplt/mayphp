<!DOCTYPE html>

<html> 
    <head>
        <title>MayLú - Login</title>
        <meta charset="UTF-8">
        <link rel="shortcut icon" type="image/png" href="img/icon.png" />
        <link rel="stylesheet" type="text/css" href="styles/estilos-login.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Lobster+Two&display=swap" rel="stylesheet">
    </head>
 
    <body background="img/zapato-1.jpg">
        <section class="container">
            <section class="left" id="left" >
                <img src="img/maylu.png" alt="logo" width="530" height="510" />
            </section>

            <section class="right" id="right" >
                <h1>Bienvenido al sistema</h1>        		

                <div class="container2">
                    <h3>Ingresa a tu cuenta</h3>

                    <label for="usuario" class="colocar_usuario">Usuario:</label>
                    <input type="text" name="introducir_usuario" id="usuario" required="obligatorio" placeholder="________________">
                    <label for="pass" class="colocar_pass">Contraseña:</label>
                    <input type="password" pattern="[A-Za-z0-9@#$%]{8,20}" minlength="8" maxlength="20"
                           name="introducir_pass" id="pass" required="obligatorio" placeholder="________________">

                    <button type="submit" name="enviar_formulario" id="enviar"><label class="tipo">Entrar</label></button>
                </div>
            </section>
    </section>
       
    </body>
</hmtl>
