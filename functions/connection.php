<?php function connection(){
$enllac = mysqli_connect("localhost","usuario","alumne","usuaris");
return $enllac;
}