<!DOCTYPE html>
<html lang="en">
	<head>
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
							<h4 class="text-center">View Product</h4>
						</div>
						<div class="clearfix"></div>				
								<table class="table table-bordered" style="margin-top:20px;">
									<tr class="bg-info">
										<td>id</td>
										<td>Name</td>
										<td>price</td>
										<td>Discout</td>
										<td>Image</td>
										<td>Catalog</td>
										<td>edit</td>
										<td>delete</td>
									</tr>
									<?php
									//require'models/dB.php';
									require_once '../dB.php';
									$ADDproducts = ADDproducts();
									foreach($ADDproducts as $row){
									?>
									<tr>
										<td><?php echo $row['product_id']?></td>
										<td><?php echo $row['name']?></td>
										<td><?php echo $row['price']?></td>
										<td><?php echo $row['detail']?></td>
										<td><img   height="140" width="140" src="../images/<?php echo $row['image']?>" /></td>
										<td><?php echo $row['name_categogy']?></td>
										<td><a href="">edit</a></td>
										<td><a href="">delete</a></td>
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