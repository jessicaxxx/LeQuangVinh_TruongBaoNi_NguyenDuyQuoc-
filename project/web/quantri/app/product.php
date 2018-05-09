
<?php
class product extends db
{
	
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
	public function getproducts($page,$count){
	$start = ($page-1)*$count;
	$sql = "SELECT * FROM product ORDER BY product_id DESC LIMIT $start,$count";
	$result = self::$conn->query($sql);
	return $this->getdata($result);
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

	
	
}
?>
