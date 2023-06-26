<?php
session_start();
$user=$_POST['user'];
$server="localhost";
$username="root";
$password="";
$db="quiz";
$_SESSION['username']=$user;
$conn=mysqli_connect($server,$username,$password,$db);
$_SESSION['conn']=$conn;
if(!$conn)
{
die("connection failed: ".mysqli_connect_error());
}
$sql_u = "SELECT * FROM members WHERE username='$user'";
$res_u = mysqli_query($conn, $sql_u);
if (mysqli_num_rows($res_u) > 0) {
$_SESSION["username"]=$user;
header("Location:http://localhost/quiz/2nd.php");
}
else{
echo "<script> alert('Username not exists');</script>";
}
mysqli_close($conn);
?>