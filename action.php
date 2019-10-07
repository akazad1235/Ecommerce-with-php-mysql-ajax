<?php include('db.php')?>
<?php
if (isset($_GET["category"])) {
	$query="SELECT * from  tbl_category";
	$result=mysqli_query($conn, $query);
	echo"<div class='rightsidebar span_3_of_1'>
					<h2>Category</h2>";
	if (mysqli_num_rows($result)>0) {
		
		while ($row=mysqli_fetch_array($result)) {
			$cid=$row['catId'];
			$cat_name=$row['cat_name'];
			echo"<ul><li><a href='#' class='category' cid='$cid'>$cat_name</a></li></ul>";

		}
		
	}
	echo"</div>";
}
if (isset($_GET["brand"])) {
	$query="SELECT * from  tbl_brand";
	$result=mysqli_query($conn, $query);
	echo"<div class='rightsidebar span_3_of_1'>
					<h2>Brand</h2>";
	if (mysqli_num_rows($result)>0) {
		
		while ($row=mysqli_fetch_array($result)) {
			$cid=$row['id'];
			$brand_name=$row['brand_name'];
			echo"<ul><li><a href='#'>$brand_name</a></li></ul>";

		}
		
	}
	echo"</div>";
}

if (isset($_GET["product"])) {
	$query="SELECT * from  tbl_product limit 9 ";
	$result=mysqli_query($conn, $query);
	
	if (mysqli_num_rows($result)>0) {
		
		while ($row=mysqli_fetch_array($result)) {
			$cid=$row['id'];
			$image=$row['image'];
			$product_name=$row['product_name'];
			$price=$row['price'];
			echo"<div class='grid_1_of_4 images_1_of_4'>
				<a href='preview.html'><img src='images/feature-pic2.jpg' alt='image' /></a>
					 <h2>$product_name</h2>
					 <p><span class='price'>$price</span></p>   
				     <div class='button'><span><a href='preview.html' class='details'>Details</a></span></div></div>";

		}
		
	}
	
}
if (isset($_GET['get_selected_category'])) {
	echo $cid=$_GET['cid_id'];
	$query="SELECT * from  tbl_product where cat='$cid'";
	$result=mysqli_query($conn, $query);
	if ($result) {
	while ($row=mysqli_fetch_array($result)) {
			$cid=$row['id'];
			$image=$row['image'];
			$product_name=$row['product_name'];
			$price=$row['price'];
			echo"<div class='grid_1_of_4 images_1_of_4'>
				<a href='preview.html'><img src='images/feature-pic2.jpg' alt='image' /></a>
					 <h2>$product_name</h2>
					 <p><span class='price'>$price</span></p>   
				     <div class='button'><span><a href='preview.html' class='details'>Details</a></span></div></div>";
}
}else{
	echo"prodcut not fund";
}
}
?>
