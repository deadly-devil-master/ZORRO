<?php
  include 'db.php';
	$a=$_POST['name'];
	$b=$_POST['email'];
	$c=$_POST['pass'];
	$d=mysql_query("INSERT INTO register (`name`, `email`, `pass`) VALUES ('$a', '$b', '$c');") or die(mysql_error());
	echo "<script>alert('You have registered Successful');
	      window.location.assign('index.php');</script>";	  
?>