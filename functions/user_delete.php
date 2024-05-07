<?php

include("connection.php");
$con = connection();
if ($_SESSION['id'] == 1) {
    $id=$_GET["id"];

    $sql="DELETE FROM users WHERE id='$id'";
    $query = mysqli_query($con, $sql);

    if($query){
        Header("Location: index.php");
    }else{
        echo "Hi ha hagut un error";
    }
} else {
    Header("Location: index.php");
}