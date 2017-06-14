<?php
$servername = "localhost";
$dbname = "siddisking";
// Create connection
$conn = mysqli_connect($servername,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$sql = 'CREATE TABLE employee( '.
       'emp_id INT NOT NULL AUTO_INCREMENT, '.
       'emp_name VARCHAR(20) NOT NULL, '.
       'emp_address  VARCHAR(20) NOT NULL, '.
       'emp_salary   INT NOT NULL, '.
       'join_date    timestamp(14) NOT NULL, '.
       'primary key ( emp_id ))';

mysql_select_db('siddisking');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
echo "Table employee created successfully\n";
mysql_close($conn);
?> 