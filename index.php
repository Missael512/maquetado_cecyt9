<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./IMG/icon.webp">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/normalice.css">
    <link rel="stylesheet" href="./CSS/index_style.css">
    <title>Bienvenido</title>
</head>
<body>
    <header id="Cabecera"> <a href="index.php">  <img src="./IMG/escudoCECyT9.png" width="150" height="150"></a> </header>
    <main>
        <div>
            <h1>Bienvenido al sistema de administración de alumnos</h1>
        </div>

        <form action="#" method="post">
                <div class="Separaciones">
                    <label for="ID">
                        <span>ID:</span>
                        <input class="input-class" type="text" id="ID" placeholder="Ingrese su ID">
                    </label>
                </div>
                <br>
                <div>
                    <label for="password">
                        <span>Contraseña:</span>
                        <input class="input-class" type="password" id="password" placeholder="Ingrese su contraseña">
                    </label>
                </div>
                <br>
                <div class="Separaciones">
                    <input type="submit" name="mainButton" class="main_button" value="Iniciar sesión">
                </div>
        </form>
    </main>

   
</body>
</html>

<?php
if(isset($_POST['mainButton'])){
    header('Location:admin.php');
}
?>