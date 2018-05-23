<?php 

require "./app/config.php";
spl_autoload_register(function  ($class_name) {
require "./app/".$class_name .  '.php';
});
$product =  new product();

$delete=$_GET['id'];

$deleteproduct=$product->deleteproduct($delete);

if($deleteproduct){
		
		
		header('location:xemSanPham.php');
	}else
	{
		echo "xoa khong thanh cong";
	}

?>