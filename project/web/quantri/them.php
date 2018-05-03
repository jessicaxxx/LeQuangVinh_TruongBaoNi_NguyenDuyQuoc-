<?php
require_once '../dB.php';
$name = $_POST['name'];
$category_id = $_POST['catalog'];
$created = $_POST['created'];
$modified = $_POST['modified'];
$detail = $_POST['detail'];
$price= $_POST['price'];
$image = $_FILES["fileToUpload"]["name"];
$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// Check if image file is a actual image or fake image
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
  $db = new db();
$db->ADDproduct_database()
if(ADDproduct_database($category_id,$name,$price,$detail,$image,$created,
	$modified))
{
   move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
   header('location:xemSanPham.php');
}else
{
    echo "upload not success";
}
