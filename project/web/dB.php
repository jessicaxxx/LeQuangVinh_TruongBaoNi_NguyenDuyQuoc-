<?php
//require_once 'models/config.php';
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','shoponline');
	function connectDB() {
		$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		$conn->set_charset('utf8');
		return $conn;
	}
	function getdata($rs){
		$arr = array();
		while($row = $rs->fetch_assoc()){
			$arr[] = $row;
		}
		return $arr;
	}
	function category(){
		$conn = connectDB();
		$sql = "SELECT * FROM category";
		$result = $conn->query($sql);
		return getdata($result);
		$conn->close();
	}
	function getproducts($page,$count){
	$conn = connectDB();
	$start = ($page-1)*$count;
	$sql = "SELECT * FROM product ORDER BY product_id DESC LIMIT $start,$count";
	$result = $conn->query($sql);
	return getdata($result);
	$conn->close();
	}
	function Allproducts(){
	$conn = connectDB();
	$sql = "SELECT * FROM product ";
	$result = $conn->query($sql);
	return$result->num_rows;
	$conn->close();
	}
	function ADDproducts(){
	$conn = connectDB();
	$sql = "SELECT * FROM product,category WHERE product.category_id= category.category_id";
	$result = $conn->query($sql);
	return getdata($result);
	$conn->close();
	}

	

?>