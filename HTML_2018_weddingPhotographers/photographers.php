<!DOCTYPE html>

<?php
		$mysql = mysql_connect("lamp.soton.ac.uk", "MANG6180_student", 
		"tintin1830") or die("Connect failed!");

		mysql_select_db("mgmt_webapp_msc") or die(mysql_error());

		$get_name_sql = "SELECT first_name, last_name, address, postcode, email, phone FROM photographers";

		$result = mysql_query($get_name_sql) or die(mysql_error());
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<title>Photographers</title>


	
</head>
<body>

	<div class="all">
		<div class="wrap">
			<div class="header">
				 
				<h1>Our Photographers</h1>

				<div class="outer">
					<div class="nav">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="gallery.html">Gallery</a></li>
							<li><a href="photographers.php"><em>Photographers</em></a></li>
						</ul>
						
					</div>
							
				</div>

				<img src="http://www.publicdomainpictures.net/pictures/70000/velka/wedding-photographer.jpg" alt="" class="logo">
			</div>
			<br>
			<br>
			<br>

			<style>
				table {
				    border-collapse: collapse;
				    width: 100%;
				}

				th, td {
				    padding: 8px;
				    text-align: left;
				    border-bottom: 1px solid #ddd;
				}

				tr:hover {background-color:#f5f5f5;}
				a {
					text-decoration: none;
				}
			</style>

			<table class="photographers_list">
				<tr>
					<td>First Name</td>
					<td>Last Name</td>
					<td>Address</td>
					<td>Postcode</td>
					<td>Email</td>
					<td>Phone</td>
				</tr>
	<?php

		while ($result_row = mysql_fetch_array($result)) {
			//$id = $result_row['photographer_id'];
			$first_name = $result_row['first_name'];
			$last_name = $result_row['last_name'];
			$add = $result_row['address'];
			$postcode = $result_row['postcode'];
			$email = $result_row['email'];
			$phone = $result_row['phone'];
			
			echo "
			<tr>
				<td>$first_name</td>
				<td>$last_name</td>
				<td>$add</td>
				<td>$postcode</td>
				<td>$email</td>
				<td>$phone</td>
			";
			
		}
	?>
			</table>
			
			<div class="footer">
				<p style="font-size: 25px; text-align: center; color: #e1aebb;">Check our tribes on our social media!</p>
				<div class="sns">
					<ul>
						<a href=""><li><div class="fb"></div></li></a>
						<a href=""><li><div class="ins"></div></li></a>
						<a href=""><li><div class="twt"></div></li></a>
						<a href=""><li><div class="pin"></div></li></a>
					</ul>
				</div>	
				<p style="text-align: center">&copy; 2018 South East Wedding Photographers <br>
				</p>
				<br>
				<p style='color: grey; font-size: 15px;'>Note that this is a fictitious website that was developed by a student as part of a programming assignment. None of the content on this page is meant to be genuine nor should it be taken as such</p>
				<br>
				<br>

			</div>
			

	
</body>
</html>