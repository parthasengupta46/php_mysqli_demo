<script>
function confirmation(e) {
    var answer = confirm("Are you sure?")
    if (!answer){ 
        e.preventDefault();
        return false;
    }
}
</script>
<?php
    
	//ini_alter('date.timezone','Asia/Calcutta');
      //--------------- showing records with delete/edit option / one can add record also---------------
                $s = "localhost";
                $u = "root";
                $p = "";
                $d = "test";

      $conn = mysqli_connect($s, $u, $p, $d);
	  $sql="select * from stud";
	  $result = mysqli_query($conn, $sql);
	  echo "<body bgcolor='#FFF8F6'><center><br>
	       <br>
	      <table border=1 cellpadding=20> 
			<tr>
			<th>Roll</th>
			<th>Name</th>
			<th>Age</th>
			<th colspan=2>Update/Delete</th>
			</tr>";
		while($row = mysqli_fetch_array($result))
			{
			echo "<tr>";
			echo "<td>" . $row['roll'] . "</td>";
			echo "<td>" . $row['name'] . "</td>";
			echo "<td>" . $row['age'] . "</td>";
			echo "<td><a  onclick=\"return confirm('Delete this record?')\" href='delstud.php?id=" . base64_encode( json_encode($row['roll']) ) . "' >Delete</a></td>";
			echo "<td><a  onclick=\"return confirm('Edit this record?')\" href='editstud.php?id=" . base64_encode( json_encode($row['roll']) ) . "' >Edit</a></td></tr>";
			}
		echo "<tr><td colspan=6 align='left'><a  onclick=\"return confirm('Add New Record?')\" href='add.php'>Add New</a></td></table></center></body>";
		//mysqli_close($con);

  ?>
