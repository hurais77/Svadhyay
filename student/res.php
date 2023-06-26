<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" type="text/css" href="../css/style.css"/>
<style>
table,th,td{
border:10px solid black;
border-collapse:collapse;
 width:50%;
height:50px;
font-weight:bold;
font-size:20px;
}
body
{

}
h1{
text-align:center;
font-size:72px;

}
td
{
 color:navy;
 text-align:center
}
h2{
    text-align:center;
 color:navy;
font-size:40px;
}
.home a:link{ position:absolute; left:7%;
top:5%;
color:green;
font-size:20px;
font-weight:bold;
}
.logout a:link{ position:absolute; left:92%;
top:5%;
color:red;
font-size:20px;
font-weight:bold;
}
a{
text-decoration:none;
}
.logout a:visited {
color: red;
background-color: transparent;
text-decoration: none;
}
.home a:visited {
color: green;
background-color: transparent;
text-decoration: none;
}
.navbar-brand
{
  padding: 0px 0px;
}
.container-fluid
{
  background-color: #000;
}
</style>
</head>
<body>
<div class="home">
<a href="http://localhost/svadhyaay/student/student_dashboard.php">Home</a>
</div>
<header>
   
 <nav class="navbar navbar-inverse" style="border-radius:0px;margin-bottom:0px;">
  <div class="container-fluid" style="">
    <div class="navbar-header">
      <a class="navbar-brand" href="../student/student_dashboard.php"><img style="height:105%;" src="../logo.png"></a>
    </div>
    <ul class="nav navbar-nav" style="float:right;">
      <li><a href="../student/student_dashboard.php">Dashboard</a></li>
      
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Contact us</a>
        <ul class="dropdown-menu">
          <li><a href="../student/contact_us.php">Technical Help</a></li>
          <li><a href="../doubt_forum/doubt_forum.php">Ask Doubt</a></li>
        </ul>
      </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> My Account</a>
        <ul class="dropdown-menu">
          <li><a href="../student/profile.php">Edit Profile</a></li>
          <li><a href="../logout.php">Log out</a></li>
        </ul>
      </li>

    </ul>
  </div>
</nav>
 </header>

<h1>Quiz Result!!!</h1>
<?php session_start();
if(isset($_SESSION['user'])){
 $server="localhost";
 $username="root";
 $password="";
 $db="iwp";
 $conn=mysqli_connect($server,$username,$password,$db);
$user=$_SESSION['user'];

$score;
$cur_score=0;
$sub =  $_SESSION['sub'];
$sql = "SELECT * FROM members WHERE username='$user' and sub='$sub'";
$result = mysqli_query($conn,$sql);
$uans1="";
$uans2="";
$uans3="";
$uans4="";
$uans5="";
$attempts="";

if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_assoc($result))
{
$score=$row["score"];

$uans1=$row["ans1"];
$uans2=$row["ans2"];
$uans3=$row["ans3"];
$uans4=$row["ans4"];
$uans5=$row["ans5"];

}
}
$i=1;
while($i<=5){
    $sub = $_SESSION['sub'];
$sql = "SELECT ans FROM $sub WHERE num=$i";
$result = mysqli_query($conn,$sql);
$ans="";
$str="uans".$i;

if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_assoc($result))
{
$ans=$row["ans"];
}
}

if ($$str==$ans) {
 $cur_score=$cur_score+1;
}
$i++;
}

$sql = "UPDATE members SET score='$cur_score' WHERE username='$user' and sub='$sub'";
if (mysqli_query($conn, $sql)) {
// echo "Record updated successfully";
} else {
 echo "Error updating record: " . mysqli_error($conn);
}
$score=$cur_score;

echo "<table align='center'>
<tr>
<th colspan='2'><h2>Quiz Result</h2></th>
</tr>
<tr>
<td>Username</td>
<td>$user</td>
</tr>
<tr>
<td>Current Marks(out of 5):</td>
<td>$cur_score</td>
</tr>
</table>";
}
?>
<br/>
</body>
</html>