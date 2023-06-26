<!DOCTYPE html>
<html lang="en">
<head>
<style>
 body
 {
 font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
 background:#202f3f;
 }
 h1,h2
 {

 color:gold;
 }
 table
 {
 margin:0 auto;
 }
 input[type=submit]
 {
 height:3rem;
 width:15rem;
 background:goldenrod;
 font-size:20px;
 color:#202f3f;
 font-weight:bolder

 }
</style>
</head>
<body>

 <?php

 session_start();
 $_SESSION['ques_count']=1;
 $server="localhost";
 $username="root";
 $password="";
 $db="quiz";
 $conn=mysqli_connect($server,$username,$password,$db);
 $user = $_SESSION['username'];
 echo "<h1 align='center'>Welcome To The Quiz</h1>";
 echo "<h1 align='center'>$user</h1>";
 $query="SELECT * FROM members WHERE username = '$user'";
 $result = mysqli_query($conn,$query);
 if($result)
 {
 if($row = mysqli_fetch_assoc($result))
 {
 if ($row['attempts']==0)
 {
 echo "<h2 align='center'>No Of Attempts : 0</h2>";
 echo "<h2 align='center'>Your Highest Score : None (Playing First Time)</h2>";
 }
 else
 {
 $var = $row['score'];
 $var1 = $row['attempts'];
 echo "<h2 align='center'>No Of Attempts : $var1</h2>";
 echo "<h2 align='center'>Your Highest Score = $var </h2>";
 }
 }
 }

 mysqli_close($conn);
 ?>
 <form action="quiz.php" method="GET">
 <table><th>
 <input type="submit" value="START QUIZ">
 </th></table>

 </form>
</body>
</html>