<?php
session_start();
$host = "localhost";
$username = "root";
$password = "";
$dbname = "Twitter";
// Create connection to the database.
$con=mysqli_connect($host,$username,$password,$dbname);
// Check connection
  if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$result = mysqli_query($con,"SELECT COUNT(*) AS COUNT_OF_USERS FROM USER_FOLLOW WHERE FOLLOWING='$_SESSION[username]'");
$row = mysqli_fetch_array($result);
if($row['COUNT_OF_USERS']==1)
{
	echo $row['COUNT_OF_USERS'];
}
else
{
	echo $row['COUNT_OF_USERS'];
}
mysqli_close($con);
?>
