<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/nav.css">
    <link rel="stylesheet" href="CSS/admin_admStudents.css">
    
    <title>Document</title>
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
    <main class="main-content">
        <h1>Administrador de estudiantes</h1>
        <form action="#" method="POST">
            <label for="op">Ingrese la boleta del alumno:</label>
            <input type="text" name="inBoleta" require>
            <input type="submit" name="btnBoleta" value="Buscar" class="btn btn-success">
        </form>
    </main>
</body>
</html>