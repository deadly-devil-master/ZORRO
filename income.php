<?php
	include 'db.php';
	@session_start();
	$a=$_POST['incomesrc'];
	$b=$_POST['date'];
	$c=$_POST['amount'];
	$userid=$_SESSION['email'];
	$e=mysql_query("INSERT INTO income(`email` , `incomesrc`, `date`, `amount`) VALUES ('$userid', '$a', '$b', '$c');") or die(mysql_error());
	if($e){
		echo "<script> alert('Income updated sucesfully'); window.location.assign('dashboard.php')</script>";
	}
	
?>