<?php
$sql = "SELECT vend_name, prod_name, prod_price FROM vendors, products WHERE vendors.vend_id = products.vend_id";

// CONNECT TO THE SAKILA DATABASE
$mysqli = new mysqli("localhost", "root", "mojndo","forta"); // creates the object

// HERE WE EXECUTE THE SQL
$result =  $mysqli->query($sql); // query

while($row = $result->fetch_assoc()){
    echo "<h1 class=\"myClass\">" . $row['vend_name'] . "</h1>  ";
    echo $row['prod_name'] . '<br />';
	// HERE ADD THE PRICE TO THE LOOP
   }

// NEW SQL $sql2 = "select bla bla bla"
// $RESULT $result2 =  $mysqli->query($sql2);
// while($row = $result2->fetch_assoc()){



mysqli_close($mysqli); 
?>
