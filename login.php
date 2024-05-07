<!DOCTYPE html>
<html>
<head>
    <title>Inici de sesio</title>
    <link href="./css/styles.css" rel="stylesheet">
</head>
<body>
     <form action="functions/user_login.php" method="POST">
        <h2>Inici de sesio</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>Nom d'usuari</label>
        <input type="text" name="username" placeholder="Nom d'usuari"><br>
        <label>Contrasenya</label>
        <input type="password" name="password" placeholder="Contrasenya"><br> 
        <button type="submit">Enviar</button>
     </form>
     <footer id="footer" class="fixed-bottom">
        <?php include(__DIR__ . "functions/partials_footer.php"); ?>
    </footer>
</body>
</html>