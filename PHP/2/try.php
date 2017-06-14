<?php
$arr=array();
$i=0;
$con=new mysqli('localhost','root','','form');
if($con->connect_error)
{
	die("connection failed".$con->connect_error);
}
else
{
	echo"Connected sucessfully";
}
$sql="select name from enquiry"
$result=$con->query($sql);
if($result->num_rows>0)
{
	while($row=$result->fetch-assoc())
	{
		array(i)=$row["name"];
		i++;
	}
}
$con->close();
?>