<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/mainstyle.css"/>
<link rel="stylesheet" type="text/css" href="css/template.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

	<div id="box_1">
		<img id="dynamic-img" src="resources/argyle1.jpg" height="400px" width="765px">

		<div id="tempsliderbanner"><h1>Temporary banner that will likely be fixed to image/slide</h1></div>

		<div id="slider_mask">
			<div id="slider_box">
			<img class="preview" src="resources/argyle1.jpg" height="80px" width="130px">
			</div>
			<div id="slider_box">
			<img class="preview" src="resources/loose1.jpg" height="80px" width="130px">
			</div>
			<div id="slider_box">
			<img class="preview" src="resources/roughpink1.jpg" height="80px" width="130px">
			</div>
			<div id="slider_box">
				
			</div>
			<div id="slider_box">
				
			</div>
		</div>
	</div>

	<div id="box_2">
		<form action onsubmit id="contentForm" method="post">
		<div class="formField">
			<p style="color:blue; padding-top:5px;font-weight: bold;">Contact Us Today To Receive Your FREE Pink Diamond Investment E-BOOK!</p>
		</div>
		<div class="formField">
			Your Name:<br>
			<input type="text" placeholder="*Your Name" name="name" id="name">
		</div>
		<div class="formField">
			Email:<br>
			<input type="text" placeholder="*Email" name="email" id="email">
		</div>
		<div class="formField">
			Phone Number:<br>
			<input type="text" placeholder="Phone Number" name="phone" id="phone">
			<br><br>
		</div>
		<div class="formField">
			Country:<br>
			<select title="Select Country" name="country" id="country">
			<option value="Canada">Canada</option>
			<option value="Mozambique">Mozambique</option>
			<option value="United States">United States</option>
			<option value="Zimbabwe">Zimbabwe</option>
			</select>
		</div>
		<div class="formField">
			Are you interested in?<br>
			<select title="*Please select" name="interest" id="interest">
			<option value="investment diamonds">Investment Diamonds</option>
			<option value="pink diamonds">Pink Diamonds</option>
			<option value="jewellery">Custom Jewellery</option>
			</select>
			<br><br>
		</div>
		<div class="formField">
			<input class="submit_button" type="submit" value="SUBMIT">
		</div>
		</form>
	</div>

	<div id="box_3">
		<div id= "inventory-header">
			<h1>Livingstone Exclusives</h1>
		</div>
		<div id="inventory">
			<img src="resources/pearpink.png" style="width:250px; height:225px;">
		</div>
		<div id="inventory_button">
			<a href="">click to view more</a>
		</div>	
	</div>

	<div id="box_4">
		<div id="inventory-header">
			<h1>Recently Sold</h1>
		</div>
		<div id="inventory">
			<img src="resources/roundpink.png" style="width:250px; height:225px;">
		</div>
		<div id="inventory_button">
			<a href="">browse recently sold</a>
		</div>		
	</div>

	<div id="box_5">
		<div id="press-release-header-box">
			<img src="resources/newspaper_icon.png" height="35px" width="35px">
			<h1>Press Releases</h1>
		</div>

		<div id="nf-sectional">

		<li id="nf-list">
		<div id="nf-list-box">
			<img src="resources/forbes.jpg">
			<div id="nf-list-box-article">
			<h1>Are Diamonds an Investor's Best Friend?</h1>
			<p>hi im brandon</p>
			</div>
		</div>
		</li>

		<li id="nf-list">
		<div id="nf-list-box">
			<img src="resources/WSJ.gif">
			<div id="nf-list-box-article">
			<h1>Demand Soars for Pink Diamonds</h1>
			</div>
		</div>
		</li>

		<li id="nf-list">
		<div id="nf-list-box">
			<img src="resources/Tout.jpg">
			<div id="nf-list-box-article">
			<h1>The Advantages of Investing in Pink Diamonds</h1>
			</div>
		</div>
		</li>

		<li id="nf-list">
		<div id="nf-list-box">
			<img src="resources/bloomberg.jpg">
			<div id="nf-list-box-article">
			<h1>Diamonds Attract Funds as Prices Surge 76% in Year</h1>
			</div>
		</div>
		</li>

		</div>

	</div>

	<div id="chart-box">
		<div class="chart-container">
			<div>
				<canvas id="myChart" height="350px" width="500px"></canvas>
			</div>
		</div>

		<div class="chart-container">
			<div>
				<canvas id="myBarChart" height="350px" width="500px"></canvas>
			</div>
		</div>

	</div>

	<div id="listing-box">
		<div id="listing-box-items">
			<div id="listing-box-left"><img src="resources/custom_em_neck_1.jpg"></div>
			<div id="listing-box-right">
				<div id="listing-box-right-1"><img src="resources/custom_em_ear_1.jpg"></div>
				<div id="listing-box-right-2"><img src="resources/custom_dia_brac_1.jpg"></div>
			</div>
		</div>
		<div id="listing-box-bottom">
			<div id="listing-box-bottom-left">
				<h1 style="font-family:helvetica; font-size:16px;">Livingstone Luxury Jewelry</h1>
				<p>Livingstone is world renowned for creating breathtaking jewelry of the finest quality</p>
			</div>
			<div id="listing-box-bottom-right">
				<button class="listing-button">exclusive jewelry</button>
			</div>
		</div>
	</div>

<!-- 	<div id="testi-box">
		<ul>
			<li>
			<div class="testi-list-box" id="box-gradient">
			<img src="resources/youngcouple.jpg">
			</div>
			</li>

			<li>
			<div class="testi-list-box" id="box-gradient">
			<img src="resources/blackcouple.jpg">
			</div>
			</li>

			<li>
			<div class="testi-list-box" id="box-gradient">
			<img src="resources/asian.jpg">
			</div>
			</li>
			
			<li>
			<div class="testi-list-box">
			<img src="resources/oldcouple.jpg">
				<div id="testi-list-box-text">
				<h1 style="font-style:italic; font-weight:bold; font-size: 13.5px; color:blue;">"I can finally get my pecker up again!"<span style="font-style:none; color: grey;"><br>- Harvey Hauer</span></h1>
				<p>"space in the container will be distributed equally to all children. If one of the children has a value of 2, the remaining space would take up twice as much space as the others (or it will try to, at least)."</p>
				</div>	
			</div>
			</li>
		</ul>
	</div> -->


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
<script>
	$('.preview').on('click', function(){
		$('#dynamic-img').prop('src', this.src);
	});
</script>
<script type="text/javascript">
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['2013', '2014', '2015', '2016', '2017', '2018'],
    datasets: [{
      label: 'Pink Diamonds',
      data: [16000, 19500, 21000, 27000, 32000, 43200],
      lineTension: 0.1,
    }, {
      label: 'gold',
      data: [1690, 1200, 1300, 1080, 1170, 1210],
      lineTension: 0.1,
    }]
  }
});
</script>
<script type="text/javascript">
var ctx = document.getElementById('myBarChart').getContext('2d');
var myBarChart = new Chart(ctx,{
	type:'line',
	data: {
    labels: ["2013", "2014", "2015", "2016", "2017", "2018"],
    datasets: [{
			label: "Pink",
/*
            fillColor: "rgba(220,220,220,0.5)",
            strokeColor: "rgba(220,220,220,0.8)",
            highlightFill: "rgba(220,220,220,0.75)",
            highlightStroke: "rgba(220,220,220,1)",*/
            data: [22, 19, 8, 16, 26, 35]
        },
        {
            label: "Gold",
/*          fillColor: "rgba(151,187,205,0.5)",
            strokeColor: "rgba(151,187,205,0.8)",
            highlightFill: "rgba(151,187,205,0.75)",
            highlightStroke: "rgba(151,187,205,1)",*/
            data: [7, -25, 8, -15, 9, 2]
    }]
	},
	options:{
		responsive: true,
		scaleStartValue: -50,
	}

});
</script>
</body>


</html>