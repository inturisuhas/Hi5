<?php
$servername = "localhost";
$username = "suhas";
$password = "suhasiiit1607";

//connection to the database
$dbhandle = mysql_connect($servername, $username, $password)
 or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysql_select_db("contacts",$dbhandle)
  or die("Could not select examples");

//execute the SQL query and return records
$result = mysql_query("SELECT ID,Restaurent,Coupon FROM restaurents");

//fetch tha data from the database
while ($row = mysql_fetch_array($result)) {
   echo "ID:".$row{'ID'}." name:".$row{'Restaurent'}."Coupon: ". //display the results
   $row{'Coupon'}."<br>";
}
//close the connection
mysql_close($dbhandle);
?>
