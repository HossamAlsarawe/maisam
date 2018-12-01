<?php
extract($_POST);
	$con = mysql_connect('localhost','root','12345678');
	mysql_select_db('rejster',$con);
$result ="DELETE FROM `information` WHERE Email='$email'";
	 mysql_query($result,$con);
	if($result){
		echo "<script> window.location = 'rejster.html'; </script>";
	}
?>