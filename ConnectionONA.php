<?php
$connection = mysqli_connect("online.c6rmnyt2gcgu.ap-south-1.rds.amazonaws.com","admin","12345678","Online");
$db = mysqli_select_db($connection,'Outdoor');

if(isset($_POST{'Submit'}))
{
	$N = $_POST['name'];
	$SOP = $_POST['selection of player'];
	$EI = $_POST['ename'];

	$query = "INSERT INTO 'ART' ('Name','Email','Performer') VALUES ('$N','$EI','$SOP')";
	$query_run = mysqli_query($connection,$query);

	if($query_run)
	{
		echo '<script type="text/javascript">alert("Data Saved") </script>';
	}
	else
	{
		echo '<script type="text/javascript">alert("Data Not Saved") </script>';
	}
}
?>
