<?php
  extract($_POST);
$db=mysql_connect("localhost","root","12345678");
mysql_select_db("rejster",$db);
  $s="SELECT Email,Password FROM information WHERE  Email ='$email' AND  Password ='$password'";
  $q=mysql_query($s,$db);
  $n=mysql_fetch_array($q);
  if($n[0] == "$email" && $n[1]=="$password")
{ 
  echo '<script>window.location="project.html"</script>';
}
  else{
   echo '<script>window.alert("ID OR PASSWORD NOT VALID")</script>';
  echo '<script>window.location="login.html"</script>';

  }
  mysql_close($db);
  ?>