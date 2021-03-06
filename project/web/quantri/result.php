<?php
require "app/config.php";

spl_autoload_register(function	($class_name)	{
require	"./app/".$class_name .	'.php';
});
$product =	new	product();
$id=$_POST['id'];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<style>
.button {
  display: inline-block;
  padding: 5px 5px;
  font-size: 20px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.button2 {
      display: inline-block;
  padding: 5px 5px;
  font-size: 20px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #f44336;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}
.button2:hover {background-color: #f44336}

.button2:active {
  background-color: #f44336;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
	<meta charset=utf-8 />
	<title>View Product</title>
		<link rel=stylesheet href="css/bootstrap.min.css" />
		<script src="js/jquery-2.2.2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"/>
		<link rel="stylesheet" href="css/normalize.css"/>
		<link rel="stylesheet" href="css/style.css"/>
	</head>
	<body>
	<div id="warper">
		<div id="top">
			<nav class="navbar navbar-default site-top">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			        <div class="w3ls_logo_products_left">
				<h1><a href="../index.html"><span>Grocery</span> Store</a></h1>
			</div>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav navbar-right">
			        <li><p class="text-center" style="padding-top: 15px;">Hello  <span style="color: red">Admin</span></p></li>
			        <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</div>
		<!--end #top-->
		<div class="col-md-2 left">
			<div class="left-menu">
				<div class="panel-group">
				    <div class="panel panel-default">				     
				      <div class="panel-heading">
				        <h4 class="panel-title">
				          <a data-toggle="collapse" href="trangchu.php"><i class="fa fa-tachometer" aria-hidden="true"></i>    Dashboard</a>
				        </h4>
				      </div>
				    </div>
				    <div class="panel panel-default">				     
				      <div class="panel-heading">
				        <h4 class="panel-title">
				          <a data-toggle="collapse" href="#danhmuc"> <i class="fa fa-table" aria-hidden="true"></i>  Manager Product  </a>
				        </h4>
				      </div>
				      <div id="danhmuc" class="panel-collapse collapse">
				        <ul id="home" class="danhmuc">
							<li><a href="themSanPham.html"><i class="fa fa-angle-right" aria-hidden="true"></i>  Add Product  </a></li>
							<li><a href="xemSanPham.php"><i class="fa fa-angle-right" aria-hidden="true"></i>  View Product </a></li>

						</ul>
						   			
						</ul>
				      </div>
				    </div>
					<div class="panel panel-default">
				      <div class="panel-heading">
				        <h4 class="panel-title">
				          <a data-toggle="collapse" href="#thanhvien"><i class="fa fa-user" aria-hidden="true"></i>   Manager Catalog  </a>
				        </h4>
				      </div>
				      <div id="thanhvien" class="panel-collapse collapse">
				        <ul id="home" class="baiviet">
							<li><a href="themdanhmuc.php"><i class="fa fa-angle-right" aria-hidden="true"></i>  Add  Catalog </a></li>
							<li><a href="xemdanhmuc.php"><i class="fa fa-angle-right" aria-hidden="true"></i>  View Catalog </a></li>
						</ul>
				      </div>
				    </div>
				</div>
			</div>
			<!--end .left-menu-->
			<div class="clearfix"></div>
		</div>
		<div class="right">
				<div class="col-md-10">				
					<div class="content">
						<div class="col-md-4 add-dm">
							<h4 class="text-center">View Product</h4>
						</div>
						<div class="w3l_search">
						<form action="result2.php" method="get" width="25" height="50">
						<input type="text" name="key" width="25" height="50">
						<input type="submit" value="search">
							</form>
							</div>
					
				
						<div class="clearfix"></div>				
								<table class="table table-bordered" style="margin-top:20px;">
									<tr class="bg-info">
										<td>id</td>
										<td>Name</td>
										<td>price</td>
										<td>Discout</td>
										<td>Image</td>
										<td>edit</td>
										<td>delete</td>
									</tr>
											<?php
								 $key =$_GET['key']; 
											$search = $product->search($key);      
                 							?>
												<?php
                       					foreach($search  as $row){
                  						  ?>
									<tr>
										<td><?php echo $row['product_id']?></td>
										<td><?php echo $row['name']?></td>
										<td><?php echo $row['price']?></td>
										<td><?php echo $row['detail']?></td>
										<td><img   height="140" width="140" src="../images/<?php echo $row['image']?>" /></td>
									
										<td><a href="editform.php?id=<?php echo $row['product_id']?>" class="btn btn-info" role="button">Edit</a></td>
										<td><a href="delete.php?id=<?php echo $row['product_id']?>" class="btn btn-info" role="button">Delete</a></td>
										
										
									</tr>
									<?php
										}
									?>
								</table>							
 
       
					</div><!--end .content-->
				</div>
		</div>
	</div>
	</body>
<html>