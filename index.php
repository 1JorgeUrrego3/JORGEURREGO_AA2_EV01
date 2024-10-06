<?php 
include("connection.php");

$con = connection();

$sql = "SELECT * FROM users";
$query =mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container">
    <div class="row">
        <form action="insert_user.php" method="POST">
            <h1 class="modal-title ">crear usuario</h1>
            <div class=" row mt-5"></div>
            <input type="text" class="form-control mb-3" name="name" placeholder="Nombre">
            <input type="text" class="form-control mb-3" name="lastname" placeholder="Apellido">
            <input type="text" class="form-control mb-3" name="username" placeholder="Username">
            <input type="text" class="form-control mb-3" name="password" placeholder="Password">
            <input type="text" class="form-control mb-3" name="email" placeholder="Email">

            <button type="submit" class="btn btn-outline-success">Agregar usuario</button>

        </form>
    </div>

    <div class="row mt-5">
        <div class="col-4"></div>
        <h2 class="col-4 badge text-bg-primary p-3">Usuarios registrado</h2>
        <div class="col-4"></div>
        <div class="row mt-5"></div>

        <table class="table table-hover">
            
            
            
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($query)): ?>
                <tr>

                <td> <?= $row['id'] ?> </td>
                <td> <?= $row['name'] ?> </td>
                <td> <?= $row['lastname'] ?> </td>
                <td> <?= $row['username'] ?> </td>
                <td> <?= $row['password'] ?> </td>
                <td> <?= $row['email'] ?> </td>

                <td><a href="update.php?id=<?= $row['id'] ?>" class="btn btn-outline-warning">Editar</a></td>
                <td><a href="delete_user.php?id=<?= $row['id'] ?>" class="btn btn-outline-danger">Eliminar</a></td>

                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>