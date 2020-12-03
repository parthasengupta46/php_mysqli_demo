<?php
$r = $_POST['rl'];
$n = $_POST['nm'];
$a = $_POST['ag'];
//---------- server information -------------
ini_alter('date.timezone','Asia/Calcutta');
  //------------------------------
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "test";
// ------ Create connection --------------
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql="insert into stud values('$r','$n','$a')";
mysqli_query($conn, $sql);
	 
	 echo "Record updated"; 
	  header('Location: index.php');


		?>