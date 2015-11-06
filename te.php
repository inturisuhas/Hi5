<!DOCTYPE HTML>
<html>

<head>
<title>Online shopping coupons</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.dropotron.min.js"></script>
<script src="js/skel.min.js"></script>
<script src="js/skel-layers.min.js"></script>
<script src="js/init.js"></script>
<noscript>
<link rel="stylesheet" href="css/skel.css" />
<link rel="stylesheet" href="css/style.css" />
</noscript>
<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
</head>
<body class="right-sidebar">

<!-- Header -->
<div id="header">
<div class="container">

<!-- Logo -->
<h1><a href="#" id="logo">Hi5</a></h1>
<h3>View online shopping sites</h3>

<!-- Nav -->
<nav id="nav">
<ul>
<li><a href="index.html">Home</a></li>
<li>
<a href="">Restaurent Coupons</a>
<ul>
<li><a href="http://www.dominos.co.in/">Dominos</a></li>
<li><a href="https://orders.pizzahut.co.in/phindia/web">Pizza Hut</a></li>
<li><a href="http://www.kfc.co.in/">KFC</a></li>
<li>
<a href="http://www.foodpanda.com/">Food Panda</a>
<ul>
<li><a href="http://www.dominos.co.in/">Dominos</a></li>
<li><a href="#">KFC</a></li>
<li><a href="#">Pizza hut</a></li>
</ul>
</li>
<li><a href="http://www.paradisefoodcourt.com/">Paradise</a></li>
</ul>
</li>
<li><a href="shopping.html">online shopping coupons</a></li>
<li><a href="travel.html">travel coupons</a></li>
<li><a href="contact.html">contact</a></li>
</ul>
</nav>
<div class="row">
</div>

</div>
</div>

<!-- Main -->

<div id="main" class="wrapper style1">
<section class="container">
<header class="major">

<img src="images/pic_A1.jpg" alt="">
<h2>Online shoppers stop</h2>

</header>
<div class="row">

<!-- Content -->
<div class="6u">
<section>
<ul class="style">
<li>
<a href="#" class="image feature"><img src="images/pic03.png" alt="" class="fa fa-cogs"></a>
<form action = "te.php" method = "POST">
<!--Submit:<input type ="submit" value = "submit"/>
-->
<button type ="submit " value ="submit"><h3> Amazon</h3></button>
</form>						
<?php
$servername = "localhost";
$username = "suhas";
$password = "suhasiiit1607";

//connection to the database
$dbhandle = mysql_connect($servername, $username, $password)
	or die("Unable to connect to MySQL");
	//echo "Connected to MySQL<br>";

	//select a database to work with
	$selected = mysql_select_db("contacts",$dbhandle)
	or die("Could not select examples");

	//execute the SQL query and return records
	$result = mysql_query("SELECT ID,Restaurent,Coupon FROM restaurents");

	//fetch tha data from the database
	while ($row = mysql_fetch_array($result)) {
		echo "ID:".$row{'ID'}. //display the results
			$row{'Coupon'}."<br>";
	}
//close the connection
mysql_close($dbhandle);
?>

<span>At Amazon, our vision is to be Earth's most customer centric company; to build a place where people can come to find and discover virtually anything they want to buy online..</span>
</li>
<div class="container">

<!-- Lists -->
<div class="row">
<div class="8u">
<section>
<header class="major">
<h2>for more info...</h2>
<span class="byline">List of restaurents and online shopper stops.</span>
</header>
<div class="row">
<section class="6u">
<ul class="default">
<li><a href="#">Paradise</a></li>
<li><a href="#">KFC</a></li>
<li><a href="#">Food Panda</a></li>
<li><a href="#">Dominos</a></li>
</ul>
</section>
<section class="6u">
<ul class="default">
<li><a href="http://www.snapdeal.com/">Snap Deal</a></li>
<li><a href="http://www.myntra.com/">myntra</a></li>
<li><a href="http://www.flipkart.com/">Amazon</a></li>
<li><a href="http://www.flipkart.com/">Flipkart</a></li>
</ul>
</section>
</div>
</section>
</div>
<div class="4u">
<section>
<header class="major">
<h2>About us</h2>
<span class="byline">A one stop site for all coupons.We help online shoppers to get coupons, deals and offers for all online shopping websites in India at one place. You can call us Coupon & Deals aggregators. We have become a one stop free shop to get all latest, working and genuine coupon codes, promo deals and discount offers in India. Our team of highly skilled coupons and deals hunters are on the job 24 x 7 to hunt for latest money saving coupons and deals. We list all these discount coupons, deals and offers from various online shopping sites in India at Hi5 which can be availed freely by you and that surely helps you save a lot of money online. So, now no need to visit every website daily and hunt for discounts, just check out Hi5 and you will get the latest deals here</span>
</header>

</section>
</div>
</div>

<!-- Copyright -->
<div class="copyright">
<h2>&copy Designed and maintained by Suhas and Varun.</h2>
</div>

</div>
</div>

</body>
</html>
