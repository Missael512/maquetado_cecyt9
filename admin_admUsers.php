<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/nav.css">
    <link rel="stylesheet" href="CSS/admin_admUsers.css">
    
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
    <main class="main_content">
        <h1>Administrar usuarios</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Usuario</th>
                <th scope="col">Contraseña</th>
                <th scope="col">Es administrador</th>
                <th scope="col">Editar</th>
                <th scope="col">Borrar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>JJiel12$</td>
                <td>Si</td>
                <td><button class="btn btn-outline-warning">Editar</button> </td>
                <td><button class="btn btn-outline-danger">Borrar</button> </td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton12</td>
                <td>No</td>
                <td><button class="btn btn-outline-warning">Editar</button> </td>
                <td><button class="btn btn-outline-danger">Borrar</button> </td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird$$%</td>
                <td>NO</td>
                <td><button class="btn btn-outline-warning">Editar</button> </td>
                <td><button class="btn btn-outline-danger">Borrar</button> </td>
                </tr>
            </tbody>
        </table>

</body>
</html>