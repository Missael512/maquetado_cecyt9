<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./IMG/icon.webp">
    <link rel="stylesheet" href="CSS/nav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/admin_newUser.css">
    <title>Registrar nuevo usuario</title>
</head>
<body>
<header id="Cabecera"> 
        
        <nav>
            <a href="admin.php"> <img src="./IMG/escudoCECyT9.png" width="150" height="150"></a>
            <ul class="main-nav">
                <li class="main-nav__item"><a href="./admin.php">Inicio</a></li>
                <li class="main-nav__item"><a href="./admin_registrarUsuario.php">Registrar nuevo usuario</a></li>
                <li class="main-nav__item"><a href="./admin_admUsers.php">Administrar usuarios</a></li>
                <li class="main-nav__item"><a href="./admin_admStudents.php">Administrar alumnos</a></li>
            </ul>
        </nav>
    </header>
    <main class="main_content">
    <h1>Registrar nuevo usuario:</h1>
        <form action="admin_registrarUsuario.php" method="post">
            <label for="name">Identificador de usuario:</label><br>
            <input class="entradas" type="text" name="userID" placeholder="Ingrese nombre de usuario"><br>
            <label for="pass">Contraseña:</label><br>
            <input class="entradas" type="password" name="userPass" placeholder="Ingrese su contraseña"><br>
            <label for="cPass">Confirme contraseña:</label><br>
            <input class="entradas" type="password" name="userPassConfirm" placeholder="Confirme contraseña"><br>
            <label for="cars">El usuario sera o no administrador:</label><br>
            <select name="isAdmin">
                <option value="si">SI</option>
                <option value="no" selected>NO</option>
            </select>
            <br><br>
            <input type="submit" name="btnRegistrar" class="main_button" value="Registrar">
        </form>
    </main>
</body>
</html>