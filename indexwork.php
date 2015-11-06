<!DOCTYPE HTML>
<html>
<head>
<title>Hi5..Coupons at your pocket </title>
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
<body class="homepage">

<!-- Header -->
<div id="header">
<div class="container">

<!-- Logo -->
<h1><a href="#" id="logo">Hi 5</a></h1>
</div></div>
<!-- Nav -->
<div id="main" class="wrapper style1">
<section class="container">
<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'Restaurents');
define('DB_USER','suhas');
define('DB_PASSWORD','suhasiiit1607');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
/*
   $ID = $_POST['user'];
   $Password = $_POST['pass'];
 */
function SignIn()
{
	session_start();   //starting the session for user profile page
	if(!empty($_POST['user']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
	{
		$query = mysql_query("SELECT *  FROM UserName where userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error());
		$row = mysql_fetch_array($query) or die(mysql_error());
		if(!empty($row['userName']) AND !empty($row['pass']))
		{
			$_SESSION['userName'] = $row['pass'];
			echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";

			echo "<html>";       
echo "<form action = "insert.php" method = "POST">\n";
echo "Restaurent name: <input type=\"text\" name=\"restaurentname\"><br>\n";
echo "Coupon: <input type=\"text\" name=\"coupon\">\n";
echo "Discount: <input type=\"text\" name=\"discount\"><br>\n";
echo "Condition: <input type=\"text\" name=\"condition\">\n";
echo "Validity: <input type=\"text\" name=\"validity\"><br>\n";
echo "Link: <input type=\"text\" name=\"link\">\n";
 
echo "</form> \n";
				echo "</html>";

		}
		else
		{
			echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
		}
	}
}
if(isset($_POST['submit']))
{
	SignIn();
}
?>               

</section>

</div>


<!-- Featured 
<div class="wrapper style2">
<section class="container">
]	<div class="row">
<img src="images/pic_A1.jpg" alt="">
</div>
<div class="row no-collapse-1">
<section class="4u">
<a href="http://www.amazon.com" class="image feature"><img src="images/pic03.png" alt=""></a>
<p>Nam in massa. Sed vel tellus. Curabitur sem urna, consequat vel, suscipit in, mattis placerat.</p>
</section>
<section class="4u">
<a href="http://www.flipkart.com/" class="image feature"><img src="images/pic02.jpg" alt=""></a>
<p>Donec ornare neque ac sem. Mauris aliquet. Aliquam sem leo, vulputate sed, convallis. Donec magna.</p>
</section>
<section class="4u">
<a href="http://www.myntra.com/" class="image feature"><img src="images/pic04.png" alt=""></a>
<p>Curabitur sem urna, consequat vel, suscipit convallis sem leo, mattis placerat, nulla. Sed ac leo.</p>
</section>

</div>
</section>
</div>-->



<!-- Main -->


<!-- Footer -->
<div id="footer">
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
