<?php 
    include("connection.php");
    $con=connection();
    $id=$_GET['id'];
    $sql="SELECT * FROM users WHERE id='$id'";
    $query=mysqli_query($con, $sql);
    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Editar usuaris</title>
    </head>
    <body>
        <div class="users-form">
            <form action="edit_user.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input type="text" name="name" placeholder="Nom" value="<?= $row['name']?>">
                <input type="text" name="lastname" placeholder="Cognoms" value="<?= $row['lastname']?>">
                <input type="text" name="username" placeholder="Nom d'usuari" value="<?= $row['username']?>">
                <input type="text" name="password" placeholder="Contrasenya" value="<?= $row['password']?>">
                <input type="text" name="email" placeholder="Email" value="<?= $row['email']?>">

                <input type="submit" value="Actualitzar">
            </form>
        </div>
    </body>
</html>