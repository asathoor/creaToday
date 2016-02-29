<h1>Action!</h1>
<!-- user cannot add tags -->
<?php echo strip_tags( $_GET['text'] ); ?>
<!-- user cannot execute SQL -->
<?php echo addslashes( 
	strip_tags( 
		$_GET['text'] 
		) 
		); ?>
		
<h2>Insert</h2>

<p>Trying to insert data</p>

<?php

$input = strip_tags( addslashes($_GET['text']) ); 

$sql = "INSERT INTO `forta`.`vendors` (
`vend_id` ,
`vend_name` ,
`vend_address` ,
`vend_city` ,
`vend_state` ,
`vend_zip` ,
`vend_country`
)
VALUES (
NULL , '" .  $input  . "', 'aaaa', 'aaa', 'aaa', '1234', 'aaa'
)
";

echo $sql;

$mysqli = new mysqli("localhost", "root", "mojndo","forta"); // creates the object
$insert = $mysqli->query($sql);

















?>