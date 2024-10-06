<?php 

include('connection.php');
$con = connection();

$id=$_GET['id'];

$sql = "SELECT * FROM users WHERE id='$id'";
$query =mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuarios</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container">
    <div class="user-form">
        <form action="edit_user.php" method="POST">
            <h1>Editar usuario</h1>
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="text" name="name" class="form-control mb-3" placeholder="Nombre" value= "<?= $row['name'] ?>">
            <input type="text" name="lastname" class="form-control mb-3" placeholder="Apellido" value= "<?= $row['lastname'] ?>">
            <input type="text" name="username" class="form-control mb-3" placeholder="username" value= "<?= $row['username'] ?>">
            <input type="text" name="password" class="form-control mb-3" placeholder="Password" value= "<?= $row['password'] ?>">
            <input type="text" name="email" class="form-control mb-3" placeholder="Email" value= "<?= $row['email'] ?>">

            <button type="submit" class="btn btn-secondary btn-lg">
                Actualizar información
            </button>
            
        </form>
    </div>
</body>
</html>