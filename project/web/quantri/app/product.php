
<?php
class product extends db
{
	
	public function category_product($category_id){
	
		$sql = "SELECT product.product_id,name,price,image,detail FROM category,product WHERE  product.category_id= '$category_id' AND  product.category_id= category.category_id";
	

		$result = self::$conn->query($sql);
	
		$arr = array();
		while($row = $result->fetch_assoc()){
			$arr[] = $row;
		}
		return $arr;
	}
	public function getProductById($id){
		$sql ="SELECT * FROM product WHERE product_id = $id";
		//var_dump($sql);
		$result = self::$conn->query($sql);
		return $this->getdata($result);
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
	$sql = "SELECT * FROM product  ORDER BY  product_id DESC LIMIT $start,$count ";
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
	public function ADDproduct_database($category_id,$name,$price,$detail,$image,$created,$modified,$description){
		$sql = "INSERT INTO product(category_id,name,price,detail,image,created,modified,description) VALUES ($category_id,'$name','$price','$detail','$image','$created','$modified','$description')";
		$result = self::$conn->query($sql);
		return $result;
	}
	public function ADDproducts(){
	$sql = "SELECT * FROM product,category WHERE product.category_id= category.category_id";
	$result = self::$conn->query($sql);
	return $this->getdata($result);
	}
	public function deleteproduct($product_id){
		$sql = "DELETE FROM product WHERE product_id= $product_id";
		$result = self::$conn->query($sql);
		return $result;
	}
	public	function editProduct($id,$category_id,$name,$price,$detail,$image,$created,$modified,$description) {
    $sql = "UPDATE product SET category_id = $category_id,name = '$name', price = $price, detail = '$detail', image = '$image', created = '$created', modified = '$modified', description = '$description' WHERE product_id = $id";
    $result = self::$conn->query($sql);
    return $result;

}


	
}
?>
