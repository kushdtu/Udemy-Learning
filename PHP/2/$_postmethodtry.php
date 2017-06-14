<html>
<body>
<form method=POST>
Enter the value:<input type="text" name=field1><input type="submit" value="send">
</form>
</body>
</html>
<?php
$v=$_POST['field1'];
echo $v;
?>