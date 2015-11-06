<?php
$servername = "localhost";
$username = "suhas";
$password = "suhasiiit1607";

//connection to the database
$dbhandle = mysql_connect($servername, $username, $password)
        or die("Unable to connect to MySQL");
        //echo "Connected to MySQL<br>";

        //select a database to work with
        $selected = mysql_select_db("Restaurents",$dbhandle)
        or die("Could not select examples");

        //execute the SQL query and return records
        $result = mysql_query("SELECT * FROM restaurents");

        //fetch tha data from the database
        while ($row = mysql_fetch_array($result)) {
                echo "ID:".$row{'id'}."name: ".$row{'name'}."coupon:".$row{'coupon'}."discount:".$row{'discount'}."condition:".$row{'condition'}."validity:".$row{'validity'}."link :".$row{'link'}."<br>";
        }
//close the connection
mysql_close($dbhandle);
?>

