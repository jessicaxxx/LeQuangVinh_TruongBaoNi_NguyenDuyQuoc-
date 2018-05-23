<?php
//require_once 'models/config.php';
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','mysql');
define('DB_NAME','shoponline');
class db
{
	public static $conn;

	public function __construct()
	{
		self::$conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
		self::$conn->set_charset('utf8');
	}
	
	public function getdata($rs){
		$arr = array();
		while($row = $rs->fetch_assoc()){
			$arr[] = $row;
		}
		return $arr;
	}
	public function Allproducts(){
		$sql = "SELECT * FROM product";
		//var_dump($sql);
		$result = self::$conn->query($sql);
		return $this->getdata($result);
	}
	public function category(){
		$sql = "SELECT * FROM category";
		$result = self::$conn->query($sql);
		return $this->getdata($result);
	}
	public function getproducts($page,$count){
	$start = ($page-1)*$count;
	$sql = "SELECT * FROM product ORDER BY product_id DESC LIMIT $start,$count";
	$result = self::$conn->query($sql);
	return $this->getdata($result);
	}
	public function ADDproducts(){
	$sql = "SELECT * FROM product,category WHERE product.category_id= category.category_id";
	$result = self::$conn->query($sql);
	return $this->getdata($result);
	}
	public function ADDproduct_database($category_id,$name,$price,$detail,$image,$created,$modified){
		$sql = "INSERT INTO product(category_id,name,price,detail,image,created,modified) VALUES ($category_id,'$name','$price','$detail','$image','$created','$modified')";
		$result = self::$conn->query($sql);
		return $this->$result;
	}
		public function category_product($category_id){
		//2. viet cau truy van
		$sql = "SELECT product.product_id,name,price,image,detail FROM category,product WHERE  product.category_id= '$category_id' AND  product.category_id= category.category_id";
	
		//3.Thuc thi cau truy van
		$result = self::$conn->query($sql);
		//4.Chuyen object thanh mang
		$arr = array();
		while($row = $result->fetch_assoc()){
			$arr[] = $row;
		}
		return $arr;
	}
	public function search($key){
	$sql = "SELECT * FROM product WHERE name LIKE '%$key%'";
	$result = self::$conn->query($sql);
	return $this->getdata($result);
	}
	public function countproducts(){
	$sql = "SELECT * FROM product";
	$result = self::$conn->query($sql);
	return $result->num_rows;
	}

	public function pagination($base_url, $total_rows, $page, $count){
		$total_pages = ceil($total_rows/$count);
		 $link ="";
		  for($j=1; $j <= $total_pages ; $j++)
		  	{ 
		  		$link = $link."<a href='$base_url?page=$j'> $j </a>";
		  	 } 
		  	 return $link;
	}
	public function chitiet($key){
$sql = "SELECT * FROM product WHERE product_id='$key'";
	$result = self::$conn->query($sql);
	return $this->getdata($result);
	}

	public function __destruct(){
		self::$conn->close();
	}
}

?>