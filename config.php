<?php

$host='localhost';
$user='root';
$password='';
$db=@mysql_connect($host,$user,$password) or die("Could connect to the database".mysql_error());
mysql_select_db("projectcwc")or die("couldn't connect");
echo "";

?>
