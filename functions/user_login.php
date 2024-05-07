<?php 
session_start(); 
include "connection.php";
if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $user = validate($_POST['username']);
    $pass = validate($_POST['password']);
    if (empty($username)) {
        header("Location: index.php?error=El nom d'usuari es obligatori");
        exit();
    }else if(empty($pass)){
        header("Location: index.php?error=La contrasenya es obligatoria");
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE user_name='$user' AND password='$pass'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $user && $row['password'] === $pass) {
                echo "Logged in!";
                $_SESSION['username'] = $row['username'];
                $_SESSION['nom'] = $row['nom'];
                $_SESSION['id'] = $row['id'];
                header("Location: index.php");
                exit();
            }else{
                header("Location: index.php?error=Credencials incorrectes");
                exit();
            }
        }else{
            header("Location: index.php?error=Credencials incorrectes");
            exit();
        }
    }
}else{
    header("Location: index.php");
    exit();
}