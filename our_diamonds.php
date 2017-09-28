<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<!--<link rel="stylesheet" type="text/css" href="css/mainstyle.css"/>-->
<link rel="stylesheet" type="text/css" href="css/template.css"/>
<link rel="stylesheet" type="text/css" href="css/sortpage.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php
	include 'datalogin.php';
?>
</head>
<body>

<header id="header_container">

<div id="header-top-bar">

</div>

<div id="header">
	<div id="nav_menu">
		<div id="logo"><img src="resources/watchlogo.png" height="73px" width="150px"></div>
		<ul>
			<li><a href="/">HOME</a></li>
			<li><a href="/Investing">INVESTING</a></li>
			<li><a href="/our_diamonds.php">OUR DIAMONDS</a></li>
			<li><a href="/education">EDUCATION</a></li>
			<li><a href="/media">MEDIA</a></li>
			<li><a href="/press">PRESS</a></li>
			<li><a href="/blog">BLOG</a></li>
			<li><a href="/contact">CONTACT</a></li>
		</ul>
	</div>
	<div id="phone_number">
		<div id="phone_number_icons">
			<img src="resources/phone_icon.png" height="20px" width="20px">
		</div>
		<a href="/">1-855-240-4043</a>
	</div>
</div>
</header>

<div id="content_wrapper">
	<div id="content_container">
		<div class="item-container">

		<?php

		$sql = "SELECT name, price, img from `products`";
		$retval = mysqli_query($conn, $sql);
		 if (!$retval) {
            die ("Could not get data for retval.");
        }
        while ($row = mysqli_fetch_array($retval)){
        	$name = $row[0];
        	$price = $row[1];
        	$image = $row[2];
        	echo('
			<div class="item-box">
				<img src="'.$image.'">
				<div class="item-box-bottom">
					<div class="item-description"><a href="">'.$name.'</a></div>
					<div class="item-price"><a href="">'.$price.'</a></div>
				</div>
			</div> ');
		}
		mysqli_close($conn);
		?>
 			<div class="item-box">
				<img src="resources/inv_item1.jpg">
				<div class="item-box-bottom">
					<div class="item-description"><a href="">0.57-Brownish Pink Cushion Cut Diamond</a></div>
					<div class="item-price"><a href="">C$12,754.00</a></div>
				</div>
			</div>
			<div class="item-box">
				<img src="resources/inv_item2.jpg">
				<div class="item-box-bottom">
					<div class="item-description"><a href="">0.57-Brownish Pink Cushion Cut Diamond</a></div>
					<div class="item-price"><a href=""><span style="color: red; font-style: arial;">CALL FOR PRICE</span></a></div>
				</div>
			</div>
			<div class="item-box">
				<img src="resources/inv_item3.jpg">
				<div class="item-box-bottom">
					<div class="item-description"><a href="">0.57-Brownish Pink Cushion Cut Diamond</a></div>
					<div class="item-price"><a href="">C$12,754.00</a></div>
				</div>
			</div>
			<div class="item-box">
				<img src="resources/inv_item4.jpg">
				<div class="item-box-bottom">
					<div class="item-description"><a href="">0.57-Brownish Pink Cushion Cut Diamond</a></div>
					<div class="item-price"><a href="">C$12,754.00</a></div>
				</div>
			</div>
			<div class="item-box">
				<img src="resources/inv_item5.jpg">
				<div class="item-box-bottom">
					<div class="item-description"><a href="">0.57-Brownish Pink Cushion Cut Diamond</a></div>
					<div class="item-price"><a href="">C$12,754.00</a></div>
				</div>
			</div>
			<div class="item-box">
				<img src="resources/inv_item6.jpg">
				<div class="item-box-bottom">
					<div class="item-description"><a href="">0.57-Brownish Pink Cushion Cut Diamond</a></div>
					<div class="item-price"><a href="">C$12,754.00</a></div>
				</div>
			</div>
			<div class="item-box">
				<img src="resources/inv_item7.jpg">
				<div class="item-box-bottom">
					<div class="item-description"><a href="">0.57-Brownish Pink Cushion Cut Diamond</a></div>
					<div class="item-price"><a href="">C$12,754.00</a></div>
				</div>
			</div>
			<div class="item-box">
				<img src="resources/inv_item8.jpg">
				<div class="item-box-bottom">
					<div class="item-description"><a href="">0.57-Brownish Pink Cushion Cut Diamond</a></div>
					<div class="item-price"><a href="">C$12,754.00</a></div>
				</div>
			</div>
			<div class="item-box">
				<img src="resources/inv_item9.jpg">
				<div class="item-box-bottom">
					<div class="item-description"><a href="">0.57-Brownish Pink Cushion Cut Diamond</a></div>
					<div class="item-price"><a href="">C$12,754.00</a></div>
				</div>
			</div>
			<div class="item-box">
				<img src="resources/inv_item10.jpg">
				<div class="item-box-bottom">
					<div class="item-description"><a href="">0.57-Brownish Pink Cushion Cut Diamond</a></div>
					<div class="item-price"><a href="">C$12,754.00</a></div>
				</div>
			</div>
			<div class="item-box">
				<img src="resources/inv_item11.jpg">
				<div class="item-box-bottom">
					<div class="item-description"><a href="">0.57-Brownish Pink Cushion Cut Diamond</a></div>
					<div class="item-price"><a href="">C$12,754.00</a></div>
				</div>
			</div>
			<div class="item-box">
				<img src="resources/inv_item12.jpg">
				<div class="item-box-bottom">
					<div class="item-description"><a href="">0.57-Brownish Pink Cushion Cut Diamond</a></div>
					<div class="item-price"><a href="">C$12,754.00</a></div>
				</div>
			</div>
			<div class="item-box">
				<img src="resources/inv_item11.jpg">
				<div class="item-box-bottom">
					<div class="item-description"><a href="">0.57-Brownish Pink Cushion Cut Diamond</a></div>
					<div class="item-price"><a href="">C$12,754.00</a></div>
				</div>
			</div>
			<div class="item-box">
				<img src="resources/inv_item12.jpg">
				<div class="item-box-bottom">
					<div class="item-description"><a href="">0.57-Brownish Pink Cushion Cut Diamond</a></div>
					<div class="item-price"><a href="">C$12,754.00</a></div>
				</div>
			</div>
			<div class="item-box">
				<img src="resources/inv_item12.jpg">
				<div class="item-box-bottom">
					<div class="item-description"><a href="">0.57-Brownish Pink Cushion Cut Diamond</a></div>
					<div class="item-price"><a href="">C$12,754.00</a></div>
				</div>
			</div>
			<div class="item-box">
				<img src="resources/inv_item11.jpg">
				<div class="item-box-bottom">
					<div class="item-description"><a href="">0.57-Brownish Pink Cushion Cut Diamond</a></div>
					<div class="item-price"><a href="">C$12,754.00</a></div>
				</div>
			</div>
		</div>
	</div>
</div>

<footer id="footer_container">
	<div id="footer">
        <div class="bottomMenu container firstone">
            <h4>Site Links</h4>
            <ul>
                <li><a href="meta/keywords.html">Keywords</a></li>
                <li><a href="/genres.html">Investing</a></li>
 				<li><a href="/investing.html">Investing</a></li>
 				<li><a href="/diamonds.html">Our diamonds</a></li>
 				<li><a href="/jewellery.html">Our Jewellery</a></li>
 				<li><a href="/profile.html">Company profile</a></li>
 				<li><a href="/diamond_education.html">Education</a></li>
 				<li><a href="/media.html">Media Center</a></li>
 				<li><a href="/contact.html">Contact Us</a></li>
            </ul>
        </div>
	</div>
</footer>
</body>
</html>