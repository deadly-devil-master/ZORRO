<?php

$hostname='localhost';
$dbname='zorro';
$username='root';
$password='';


$conn=mysql_connect($hostname,$username,$password) or DIE('error while connecting');

mysql_select_db($dbname) or DIE('error on connecting to database');
?>