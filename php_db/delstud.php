<?php
ini_alter('date.timezone','Asia/Calcutta');
//---------- server information -------------
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
//----------
$rg = json_decode( base64_decode( $_GET['id'] ) );
// ------ Create connection --------------
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql="DELETE FROM stud where roll=$rg";
   
   if (mysqli_query($conn, $sql)) {
      echo "Record deleted successfully";
   } else {
      echo "Error deleting record: " . mysqli_error($conn);
   }
   mysqli_close($conn);
header('Location: index.php');

?>