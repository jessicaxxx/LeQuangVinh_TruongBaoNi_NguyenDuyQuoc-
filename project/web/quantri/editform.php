<?php
require "app/config.php";

spl_autoload_register(function	($class_name)	{
require	"./app/".$class_name .	'.php';
});
$product =	new	product();


?>

<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset=utf-8 />
	<title>Add Product</title>
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
				<h1><a href="index.html"><span>Grocery</span> Store</a></h1>
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
							<li><a href="themSanPham.php"><i class="fa fa-angle-right" aria-hidden="true"></i>  Add Product  </a></li>
							<li><a href="xemSanPham.php"><i class="fa fa-angle-right" aria-hidden="true"></i>  View Product </a></li>
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
					
					<?php
						$id = $_GET['id'];
					
						$productById = $product->getProductById($id);
			
					?>
							<h4 class="text-center">Edit  Product </h4>
						</div>
						<div class="clearfix"></div>
						<form method="post" action="edit.php" enctype="multipart/form-data">
							<div class="form" >							
								<table class="table">
							      <tr>
							        <td><P>Name Product </p></td>
							        <td><input type="text" name="name" class="form-control" value="<?php echo $productById[0]['name'] ?>"></td>
							      </tr>
							     <tr>
							        <td><P>Price </p></td>
							        <td><input type="text" name="price" class="form-control" value="<?php echo $productById[0]['price'] ?>" ></td>
							      </tr>
							      <tr>
							        <td><P>detail </p></td>
							        <td><input type="text" name="detail" class="form-control" value="<?php echo $productById[0]['detail'] ?>" ></td>
							      </tr>
							      <tr>
							        <td><P>Image</p></td>
							        <td> <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" src="../images/<?php echo $productById[0]['image']?>">
   									 </td>
							      </tr>
							      <tr>
							        <td><P>created</p></td>
							        <td><input name="created" type="date"" class="form-control"  value="<?php echo $productById[0]['created'] ?>" ></td>
							      </tr>
							      <tr>
							        <td><P>modified</p></td>
							        <td><input input name="modified" value="<?php echo $productById[0]['modified'] ?>" type="date" class="form-control"></td>
							      </tr>
							      <tr>
							        <td><P>Description </p></td>
							        <td><textarea rows="4" cols="100" name="description">
                 							  <?php echo $productById[0]['description'] ?>
                                   </textarea> </td>
							      </tr>
							      <tr>
							        <td><p>Catalog</p></td>
							        < <td><select name="catalog" class="form-control">
										<option  value="1">Select Catalog</option>
										<option value="2">Households</option>
										<option value="3">Veggies & Fruits</option>
										<option value="4">Kitchen</option>
										<option value="5">Short Codes</option>
										<option value="6">Beverages</option>
										<option value="7">Pet Food</option>
										<option value="8">Frozen Foods</option>
									</select>
									</td>
									</td>
							      </tr>							      
							  </table>							
							</div>
							<div class="col-md-3 form-group pull-right">
								 <button type="submit" class="btn btn-primary btn-block"><?php isset($_GET['submit'])
											
											
										?>upload</button>
										<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
							</div>
						</form>
					</div><!--end .content-->
				</div>
		</div>
	</div>
	</body>
<html>

