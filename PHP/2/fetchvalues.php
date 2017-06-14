<?php
ini_set('smtp_port',25);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";
$i=0;
$store=array();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT E_mail from enquiry";
$result = mysqli_query($conn,$sql);
while($row =mysqli_fetch_array($result,MYSQLI_ASSOC)) 
{
        echo "id: " . $row["E_mail"]."<br>";
		$store[]=$row["E_mail"];
}
$arr_length=count($store);
for($i=0;$i<$arr_length;$i++)
{
	echo $store[$i]."<br>";
}
$bsl="delete from enquiry";
$conn->query($bsl);
mail('abc@gmail.com','helo','heloo','siddhantbahuguna@gmail.com');
echo "mail sent to".$store[0];
$conn->close();

?> 