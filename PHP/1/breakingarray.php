<?php
$g="one|two|four|three";
$v=explode("|",$g);
echo $v[0]." ".$v[1]." ".$v[2]." ".$v[3]."<br>";
$s=implode("|",$v);
echo $s;
?>