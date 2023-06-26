<html>
<head>
<script language="javascript" type = "text/javascript">
window.history.forward();
</script>
</head>
<?php
session_start();
$server="localhost";
$username="root";
$password="";
$db="iwp";
$conn=mysqli_connect($server,$username,$password,$db);
$user=$_SESSION['username'];
$attempts;
$sql = "SELECT * FROM members WHERE username='$user'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_assoc($result))
{
$attempts=$row["attempts"];
}
}
$attempts=$attempts+1;
$sql = "UPDATE members SET attempts='$attempts' WHERE username='$user'";
if (mysqli_query($conn, $sql))
{
 header("Location:http://localhost/quiz/ques.php");
 }
 else{
 echo "ERROR";
 }
 ?>
 mysqli_close($conn);
 </html>