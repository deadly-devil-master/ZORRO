<?php
	include 'db.php';
	@session_start();
	$a=$_POST['resourse'];
	$b=$_POST['date'];
	$c=$_POST['amount'];
	$userid=$_SESSION['email'];
	$e=mysql_query("INSERT INTO expend(`email` , `resourse`, `date`, `amount`) VALUES ('$userid', '$a', '$b', '$c');") or die(mysql_error());
	if($e){
		echo "<script> alert('Expenditure updated sucesfully'); window.location.assign('dashboard.php')</script>";
	}
	
?>