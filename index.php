<?php
include("connection.php");
$con = connection();
$sql = "SELECT * FROM users";
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="./css/styles.css" rel="stylesheet">
        <title>Homepage</title>
    </head>
    <body>
        <h1>Perazza Productions</h1>
        <?php
        if ($_SESSION['id'] == 1) {
        echo "<div class='users-table'>";
           echo "<h2>Usuaris registrats</h2>";
           echo "<table>";
           echo "<thead>";
           echo "<tr>";
           echo "<th>ID</th>";
           echo "<th>Nom</th>";
           echo "<th>Cognoms</th>";
           echo "<th>Nom d'usuari</th>";
           echo "<th>Contrasenya</th>";
           echo "<th>Email</th>";
           echo "<th></th>";
           echo "<th></th>";
           echo "</tr>";
           echo "</thead>";
           echo "<tbody>";
                    while ($row = mysqli_fetch_array($query)):
                        echo "<tr>";
                        echo "<th>".$row['id']."</th>";
                        echo "<th>".$row['name']."</th>";
                        echo "<th>".$row['lastname']."</th>";
                        echo "<th>".$row['username']."</th>";
                        echo "<th>".$row['password']."</th>";
                        echo "<th>".$row['email']."</th>";
                        echo "<th><a href='update.php?id=".$row['id']."' class='users-table--edit'>Editar</a></th>";
                        echo "<th><a href='delete_user.php?id=".$row['id']."' class='users-table--delete'>Eliminar</a></th>";
                        echo "</tr>";
                    endwhile;
                    echo "</tbody>";
                    echo "</table>";
                    echo "</div>";
        }
        ?>
    </body>
    <footer id="footer" class="fixed-bottom">
        <?php include(__DIR__ . "functions/partials_footer.php"); ?>
    </footer>
</html>