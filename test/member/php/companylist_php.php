<select name="company">
	<?php
		$sql="SELECT `CompanyName`,`ID` FROM `company`";
		$result=mysqli_query($conn,$sql);
		while($row = mysqli_fetch_array($result)){
			$ID=$row['ID'];
			$Name=$row['CompanyName'];
			echo "<option value=".$ID.">".$Name."</option>";
		}
	?>
</select>
