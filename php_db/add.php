<form method="POST" action="">
 <center>
  <table border cellpadding=10>
    <tr><td>Roll</td><td><input type="text" name="roll" value="" placeholder="Type Roll"></input></td></tr>
    <tr><td>Name</td><td><input type="text" name="name" value="" placeholder="Type your name"></input></td></tr>
	<tr><td>Age</td><td><input type="text" name="age" value="" placeholder="Type your age"></input></td></tr>
    <tr><td colspan=2><input type="submit" value="submit"></input></td></tr>
 </table>	
</form>
</center>
<?php
try
 {
   if (isset($_POST["roll"]))
     {
	   $r=$_POST['roll'];	 
       $n=$_POST['name'];
       $a=$_POST['age'];
       $conn = mysqli_connect("localhost", "root", "","test");
       $sql="insert into stud values('$r','$n','$a')";
	   mysqli_query($conn,$sql); 
       echo "1 record added";
	   header('Location: index.php');
     }
 }
 catch(Exception $e)
 {
    echo $e->getMessage();
 }
?>