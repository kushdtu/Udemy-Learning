<?php
$servername = "localhost";
$username ="root";
$password ="";
$dbname = "form";
$name=$_POST["name"];
$mail=$_POST["E_mail"];
$classs=$_POST["classs"];
$phone=$_POST["phone_no"];
// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql="INSERT INTO enquiry
(name,E_mail,phone_no,class)
VALUES('$name','$mail','$phone','$classs')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
