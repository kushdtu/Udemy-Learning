<?php
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

$sql = "SELECT name from enquiry";
$result = mysqli_query($conn,$sql);
while($row =mysqli_fetch_array($result,MYSQLI_ASSOC)) 
{
        echo "id: " . $row["name"]."<br>";
		$store[]=$row["name"];
}
echo $store[1];
$conn->close();

?> 