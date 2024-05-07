<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registre</title>
    <link href="./css/styles.css" rel="stylesheet">
</head>
<body>
    <div class="users-form">
        <h1>Crear usuari</h1>
        <form action="functions/insert_user.php" method="POST">
            <input type="text" name="name" placeholder="Nom">
            <input type="text" name="lastname" placeholder="Cognoms">
            <input type="text" name="username" placeholder="Nom d'usuari">
            <input type="password" name="password" placeholder="Contrasenya">
            <input type="email" name="email" placeholder="Email">

            <input type="submit" value="Enviar">
        </form>
    </div>
    <footer id="footer" class="fixed-bottom">
        <?php include(__DIR__ . "functions/partials_footer.php"); ?>
    </footer>
</body>
</html>