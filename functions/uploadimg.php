<?php function uploadimg(){
$target_dir = "..img/";
$target_file = $target_dir . basename($_FILES["file"]["nom"]);
$uploadOk = 0;
$existeix = 0;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["file"]["tmp_nom"]);
  if(file_exists($target_file)) {
    $existeix = 1;
    } else {
    if($check != false && $imageFileType == ".jpg" or $imageFileType == ".png" or $imageFileType == ".jpeg") {
        $uploadOk = 1;
        }
    }
}
return $uploadOk && $existeix;
}