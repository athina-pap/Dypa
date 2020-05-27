
<?php
	 	$con = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($con,"tourism");
		mysqli_set_charset($con, "utf8");
		$id = 1;
		$result = mysqli_query($con, "SELECT name FROM museums WHERE id_c = '$id' ");
		$data = array(); 
	 	while ($row = mysqli_fetch_assoc($result))
	 	{
	 		 $data[] = $row;
	 	}
	 	echo json_encode($data);
	 
?>

