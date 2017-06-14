<?php
$servername = "localhost";
$dbname = "form";
$name=$_POST["name"];
$mail=$_POST["E_mail"];
$classs=$_POST["classs"];
$phone=$_POST["phone_no"];

// Create connection
$conn = mysqli_connect($servername,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$sql="INSERT INTO enquiry
(name,E_mail,phone_no,class)
VALUES('$name','$mail','$phone','$classs')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);
?> 