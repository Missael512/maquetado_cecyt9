<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="./IMG/icon.webp">
    <link rel="stylesheet" href="CSS/nav.css">
    <link rel="stylesheet" href="CSS/admin_style.css">
    <title>:: Administrador ::</title>
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
        
        <div class="main_content__text">
            <h1>Bienvenido</h1>
            <p>Usted ha ingresado como administrador, seleccione una opción</p>

            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home-2" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#43001A" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <polyline points="5 12 3 12 12 3 21 12 19 12" />
                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                <rect x="10" y="12" width="4" height="4" />
            </svg>
        </div>
    </main>
    <footer>
        <center>
        <a link href="index.php">Cerrar sesion</a>
        </center>
    </footer>


</body>
</html>