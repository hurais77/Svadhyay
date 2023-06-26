<?php session_start();

$ans=0;


$sub = $_COOKIE['subs'];

if(isset($_SESSION['user']) && isset($_SESSION['ques_count'])){
$server="localhost";
$username="root";
$password="";
$db="iwp";
$conn=mysqli_connect($server,$username,$password,$db);
$user=$_SESSION['user'];
if($_SESSION['ques_count']==0){
$_SESSION['ques_count']=1;
}
else{
if(isset($_POST['next'])){
$i=$_SESSION['ques_count'];
$ans = "";
if(isset($_POST['q'])){
$ans = str_replace("hello","/",$_POST['q']);
}
$sql = "UPDATE members SET ans".$i."='$ans' WHERE username='$user' and sub='$sub'";

if (mysqli_query($conn, $sql)) {
//echo "Record updated successfully";
} else {
 echo "Error updating record: " . mysqli_error($conn);
}
$_SESSION['ques_count']++;
}
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<style type="text/css">
body
 {
 font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
 background:#202f3f;
 }
 .ques 
 {
     margin : 0 auto;
 }
.display
{
 margin:40px auto;
}
button
{
 width: 10%;
 height: 2em;
 background: goldenrod;
 font-style: bold;
 font-size: 15px;
 color:#202f3f;
 font-weight: bold;
}
</style>
<script language="javascript" type = "text/javascript">
window.history.forward();
var seconds=20;
function displayseconds(){
 seconds-=1;
 document.getElementById("display").innerText=seconds+" sec";
}
function timer(){
setInterval(displayseconds,1000);
}
var refresh_rate = 20; //<-- In seconds, change to your needs
var last_user_action = 0;
var has_focus = false;
var lost_focus_count = 0;
// If the user loses focus on the browser to many times
// we want to refresh anyway even if they are typing.
// This is so we don't get the browser locked into
// a state where the refresh never happens.
var focus_margin = 10;
// Reset the Timer on users last action
function reset() {
last_user_action = 0;
console.log("Reset");
}
function windowHasFocus() {
has_focus = true;
}
function windowLostFocus() {
 has_focus = false;
 lost_focus_count++;
console.log(lost_focus_count + " <~ Lost Focus");
}
// Count Down that executes ever second
setInterval(function () {
last_user_action++;
refreshCheck();
}, 1000);
// The code that checks if the window needs to reload
function refreshCheck() 
{
var focus = window.onfocus;
if ((last_user_action >= refresh_rate && !has_focus && document.readyState == "complete")
|| lost_focus_count > focus_margin) {
window.location.reload(); // If this is called no reset is needed
reset(); // We want to reset just to make sure the location reload is not called.
}
}
window.addEventListener("focus", windowHasFocus, false);
window.addEventListener("blur", windowLostFocus, false);
</script>
<style>
       .navbar-brand
{
  padding: 0px 0px;
}
div
{
    margin-left:1%;
}
.container-fluid
{
  background-color: #000;
}
    </style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" type="text/css" href="../css/style.css"/>
</head>
<body>
<header>
   
   <nav class="navbar navbar-inverse" style="border-radius:0px;margin-bottom:0px;">
    <div class="container-fluid" style="">
      <div class="navbar-header">
        <a class="navbar-brand" href="../student/student_dashboard.php"><img style="height:175%;" src="../logo.png"></a>
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
<center><h1>Quiz!!!</h1></center>
<div id="time">
<h3>Time Left:</h3>
<p id="display"></p>
</div>
<div class="ques">
<?php
if($_SESSION['ques_count'] == 1){
$sql = "SELECT * FROM $sub WHERE num = 1";

$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_assoc($result))
{

$ques=$row["q"];
$c1=$row["c1"];
$c2=$row["c2"];
$c3=$row["c3"];
$c4=$row["c4"];
$ans=$row["ans"];
?>
<h1>Question 1:</h1>
<div class="contain">
<form name="form1" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<h3><?php echo "$ques"; ?></h3>
<input type="radio" name="q" value=<?php echo "$c1"; ?>> <?php echo "$c1"; ?><br/><br/>
<input type="radio" name="q" value=<?php echo "$c2"; ?>> <?php echo "$c2"; ?><br/><br/>
<input type="radio" name="q" value=<?php echo "$c3"; ?>> <?php echo "$c3"; ?><br/><br/>
<input type="radio" name="q" value=<?php echo "$c4"; ?>> <?php echo "$c4"; ?><br/><br/>
<button type="submit" name="next" value="Next">Next</button>
</form>
</div>
<?php
}
}
} else if($_SESSION['ques_count'] == 2){
    $sql = "SELECT * FROM $sub WHERE num=2";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_assoc($result))
{
$ques=$row["q"];
$c1=$row["c1"];
$c2=$row["c2"];
$c3=$row["c3"];
$c4=$row["c4"];
echo $ques;
?>
<h1>Question 2:</h1>

<div class="contain">
<form name="form1" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<h3><?php echo "$ques"; ?></h3>
<input type="radio" name="q" value=<?php echo "$c1"; ?>> <?php echo "$c1"; ?><br/><br/>
<input type="radio" name="q" value=<?php echo "$c2"; ?>> <?php echo "$c2"; ?><br/><br/>
<input type="radio" name="q" value=<?php echo "$c3"; ?>> <?php echo "$c3"; ?><br/><br/>
<input type="radio" name="q" value=<?php echo "$c4"; ?>> <?php echo "$c4"; ?><br/><br/>
<button type="submit" name="next" value="Next">Next</button>
</form>
</div>
<?php
}
}
} else if($_SESSION['ques_count'] == 3){
    $sql = "SELECT * FROM $sub WHERE num=3";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_assoc($result))
{
$ques=$row["q"];
$c1=$row["c1"];
$c2=$row["c2"];
$c3=$row["c3"];
$c4=$row["c4"];
?>
<h1>Question 3:</h1>
<div class="contain">
<form name="form1" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<h3><?php echo "$ques"; ?></h3>
<input type="radio" name="q" value=<?php echo "$c1"; ?>> <?php echo "$c1"; ?><br/><br/>
<input type="radio" name="q" value=<?php echo "$c2"; ?>> <?php echo "$c2"; ?><br/><br/>
<input type="radio" name="q" value=<?php echo "$c3"; ?>> <?php echo "$c3"; ?><br/><br/>
<input type="radio" name="q" value=<?php echo "$c4"; ?>> <?php echo "$c4"; ?><br/><br/>
<button type="submit" name="next" value="Next">Next</button>
</form>
</div>
<?php
}
}
} else if($_SESSION['ques_count'] == 4){
    $sql = "SELECT * FROM $sub WHERE num=4";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_assoc($result))
{
$ques=$row["q"];
$c1=$row["c1"];
$c2=$row["c2"];
$c3=$row["c3"];
$c4=$row["c4"];
?>
<h1>Question 4:</h1>
<div class="contain">
<form name="form1" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<h3><?php echo "$ques"; ?></h3>
<input type="radio" name="q" value=<?php echo "$c1"; ?>> <?php echo "$c1"; ?><br/><br/>
<input type="radio" name="q" value=<?php echo "$c2"; ?>> <?php echo "$c2"; ?><br/><br/>
<input type="radio" name="q" value=<?php echo "$c3"; ?>> <?php echo "$c3"; ?><br/><br/>
<input type="radio" name="q" value=<?php echo "$c4"; ?>> <?php echo "$c4"; ?><br/><br/>
<button type="submit" name="next" value="Next">Next</button>
</form>
</div>
<?php
}
}
} else if($_SESSION['ques_count'] == 5){
    $sql = "SELECT * FROM $sub WHERE num=5";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_assoc($result))
{
$ques=$row["q"];
$c1=$row["c1"];
$c2=$row["c2"];
$c3=$row["c3"];
$c4=$row["c4"];
?>
<h1>Question 5:</h1>
<div class="contain">
<form name="form1" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<h3><?php echo "$ques"; ?></h3>
<input type="radio" name="q" value=<?php echo "$c1"; ?>> <?php echo "$c1"; ?><br/><br/>
<input type="radio" name="q" value=<?php echo "$c2"; ?>> <?php echo "$c2"; ?><br/><br/>
<input type="radio" name="q" value=<?php echo "$c3"; ?>> <?php echo "$c3"; ?><br/><br/>
<input type="radio" name="q" value=<?php echo "$c4"; ?>> <?php echo "$c4"; ?><br/><br/>
<button type="submit" name="next" value="Next">Finish</button>
</form>
</div>
<?php
}
}
} else{
//session_reset();
header('Location:res.php');
}
?>
</div>
</body>
</html>
<?php
if($_SESSION['ques_count']>=1 && $_SESSION['ques_count']<=6){
echo '<script type="text/javascript">timer();</script>';
}
}
}
?>