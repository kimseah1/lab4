<!DOCTYPE html>
<html>
	<head> 
		<title>Menu with CSS </title>
		
		<link rel="stylesheet" href="white.css" />
		<script type="text/javascript" src="popup.js"></script>
		
	</head>


	<body bgcolor="#fff">
		<br><br><br> 
		
	

	<center><img src="img/logo.png"></center><br>
	<h1 align="center"> JBU Online Store </h1>
	
	<ul>
		<li class="menu-item"><a href="#" class="drp">Product </a>
			<div class="menu-content">
				
				<a  href="add_book.php">Buy drinks</a><br>
				<a  href="remove_book.php">California Cafe</a><br>
				<a href="display_books.php">Display Orders</a><br>
			</div>
		
		</li>
		
		<li class="menu-item"><a href="#" class="drp">Orders </a>
		<div class="menu-content">
			<a  href="add_book.php">Add Book</a><br>
			<a  href="remove_book.php">Remove Book</a><br>
			<a href="display_books.php">Display all Books</a><br>
		</div>
		
		</li>
		
		<li class="menu-item"><a href="#" class="drp">User </a>	
		<div class="menu-content">
			<a href="add_user.php">User Profile</a><br>
			<a href="remove_user.php">Order List</a><br>
			<a href="display_users.php">Settings</a><br>
		</div>
		</li>
				 
</ul>

	
	<img src="img/cart.png" width=5%  onclick="myFunction()" style="position:absolute; top:20px; right:120px;" />

<div class="cartImg" id="cart">
<label id="output"></label>
</div>

<table align = "center" width= 80% border = 1>
			<tr>
<?php

$count=1;
include("db_connection.php");

	$sql_product="SELECT * FROM product_tab";
	$result_product=$connect->query($sql_product);
	
	while($row_product = $result_product->fetch_assoc())
	{
	?>
		<td>
			<?php 
			
			echo "<img src='".$row_product["product_img"]."' />"; ?><br>
			<?php echo $row_product["product_name"]?>
				price: $<?php echo $row_product["unit_price"]?>


				<button onclick = "addtocart('<?php echo $row_product ["product_name"];?>' )">Add to cart</button>
				
			</td>
			
		
	<?php 

	if($count>=3)
	{
		echo "</tr><tr>";
		$count=1;
	}
	else{
		$count++;
	}
	}
	


	
	?>
	</table>


		
		


	
	</body>
</html>



<script>window.scrollTo(0, 0); setTimeout(function() { window.scrollTo(0, 0); },200)</script>