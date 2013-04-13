<?php
$g = $_GET['g'];
//echo $_GET['jsoncallback'] . '(' . $data . ');';
$data = file_get_contents('http://takipediyorum.com/parser/?'.$g.'=radikalGazete&cache=yes');
$data = substr($data, 1, strlen($data)-2);
echo $_GET['jsoncallback'] . '(' . $data . ');';
?>
