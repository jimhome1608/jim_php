<?php 
 $temp = $_POST['Command'];
$file = 'Commands.txt';
$current = file_get_contents($file);
$current .= $temp;
file_put_contents($file, $current);
 echo ($temp);
 ?>