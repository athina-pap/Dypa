<?php
require_once('config.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>insert</title>
</head>

<body>
	<?php
	
	if(empty($_POST['museum']) || empty($_POST['passwd']) || empty($_POST['region']) || empty($_POST['country']))
	{
			header("location:loginregister.php?EmptyS= Please Fill in the Blanks");
	}
	else{

		$museum = $_POST['museum'];
		$pass = $_POST['passwd'];
		$region = $_POST['region'];
		$country = $_POST['country'];
		$id = (rand(10,100));
		
		 
			$sql = "INSERT INTO museum(id, name, passwd, region, country) VALUES ('$id','$museum','$pass','$region','$country')";
			$result = mysqli_query($con,$sql); 
			if($result){			
				header("location:loginregister.php?EmptyS= Registration Succesfull");
			
			
			}else
			{
				echo "error";
			}
	}
	?>
</body>

</html>
