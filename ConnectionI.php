<?php
$connection = mysqli_connect("indoor.c6rmnyt2gcgu.ap-south-1.rds.amazonaws.com","admin","12345678","Indoor");
$db = mysqli_select_db($connection,'Outdoor');

if(isset($_POST{'Submit'}))
{
	$SOP = $_POST['player'];
	$PN1 = $_POST['fname'];
	$PN2 = $_POST['fname'];
	$SOG = $_POST['selection of game'];
	$A = $_POST['age'];
	$AOT = $_POST['aname'];
	$CN = $_POST['cname'];
	$EI = $_POST['ename'];
	$WN = $_POST['wname'];
	$P = $_POST['password'];

	$query = "INSERT INTO '$SOG' ('Team_Name','Team_Captain_Name','Team_Vice_Captain_Name','Age','Address','Contact_Number','Email','Whatsapp_Number','Password') VALUES ('$TN','$CN','$VCN','$A','$AOT','$CN','$EI','$WN','$P')";
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
