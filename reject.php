<?php
$conn=new mysqli('localhost','root','','n2n');
if($conn->connect_error)
{
	die("Connection Error".$conn->connect_error);
}
$id=$_GET['id'];
$sql="UPDATE news SET status='rejected' WHERE id='$id'";
if($conn->query($sql))
{
	echo '<script type="text/javascript">alert("News Has been Rejected successfully");
		      window.location="admin.php"</script>';
}
?>