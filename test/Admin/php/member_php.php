<div class="table">
	<table border="1">
	<?php
		$sql = "SELECT `Email`,`Name`,`Points`,`MemberType` FROM `user`";
		$result=mysqli_query($conn,$sql);
		echo "<tr>";
		echo "<td>Email</td>";
		echo "<td>Name</td>";
		echo "<td>Points</td>";
		echo "<td>Level</td>";
		echo "<td>modify</td>";
		echo "</tr>";
		while($row = mysqli_fetch_array($result)){
		   	$Email=$row['Email'];
		   	$Name=$row['Name'];
		   	$Points=$row['Points'];
		   	$level=$row['MemberType'];

		   	echo "<tr>";
		   	echo "<td>$Email</td>";
			echo "<td>$Name</td>";
			echo "<td>$Points</td>";
			if ($level=='1') {
		    	echo "<td bgcolor=blue></td>";
			}

			else{
				echo "<td bgcolor=green></td>";
			}
			echo "<td>";
			echo "<button onclick=\"location.href='./removeAccount.php?name={$Email}'\">Remove</button>";
			echo "</td>";
			echo "</tr>";	
		    }
	?>
	</table>
</div>

<style type="text/css">
	.table{
		position: absolute;
		left: 250px;
		top: 175px;
	}
</style>