<?php
$rg = json_decode( base64_decode( $_GET['id'] ) );
//---------- server information -------------
ini_alter('date.timezone','Asia/Calcutta');
  //------------------------------
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "test";
// ------ Create connection --------------
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql="select * from stud where roll='$rg'";
 $result = mysqli_query($conn, $sql);
	  echo "<center><br><br><table border=1>"; 
			
		while($row = mysqli_fetch_array($result))
			{
			echo "<h2><u>Detail Information (May be updated)</u></h2>";
			echo "<form action='edit.php' method='post'>";
			echo "<tr>
			       <td>Roll:</td><td><input type='text' name='rl' value='" . $row['roll'] . "'></td>
			       <td>Name:</td><td><input type='text' name='nm' value='" . $row['name'] . "'></td>
				   <td>Age:</td><td><input type='text' name='ag' value='" . $row['age'] . "'></td>";
				  echo "</tr></table>
			
                    <hr/>
				<table border>
                     <tr><td align='center'><input type='submit' value='Submit' name='submit' id='upload' class='upload'/></td></tr>
                   </form>
				</table>
				</center>";
			}
	  $sql="delete from stud where roll='".$rg."'";
	  $r = mysqli_query($conn, $sql);
	  


		?>