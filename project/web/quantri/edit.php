<?php

$id= $_POST['id'];
$name = $_POST['name'];
$category_id = $_POST['catalog'];
$created = $_POST['created'];
$modified = $_POST['modified'];
$detail = $_POST['detail'];
$price= $_POST['price'];
$description= $_POST['description'];
$image = $_FILES["fileToUpload"]["name"];
$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
require "./app/config.php";
spl_autoload_register(function ($class_name){
	require "app/" .$class_name . ".php";
});
$product = new product;
$product->editproduct($id,$category_id,$name,$price,$detail,$image,$created,$modified,$description);
//var_dump($product);
header('location:xemSanPham.php');

