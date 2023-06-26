<?php
include ("db.php");

$val = $_POST['subject'];

$q1 = $_POST['q1'];
$c11 = $_POST['c11'];
$c12 = $_POST['c12'];
$c13 = $_POST['c13'];
$c14 = $_POST['c14'];


$q2 = $_POST['q2'];
$c21 = $_POST['c21'];
$c22 = $_POST['c22'];
$c23 = $_POST['c23'];
$c24 = $_POST['c24'];

$q3 = $_POST['q3'];
$c31 = $_POST['c31'];
$c32 = $_POST['c32'];
$c33 = $_POST['c33'];
$c34 = $_POST['c34'];

$q4 = $_POST['q4'];
$c41 = $_POST['c41'];
$c42 = $_POST['c42'];
$c43 = $_POST['c43'];
$c44 = $_POST['c44'];

$q5 = $_POST['q5'];
$c51 = $_POST['c51'];
$c52 = $_POST['c52'];
$c53 = $_POST['c53'];
$c54 = $_POST['c54'];

$q6 = $_POST['q6'];
$c61 = $_POST['c61'];
$c62 = $_POST['c62'];
$c63 = $_POST['c63'];
$c64 = $_POST['c64'];

$q7 = $_POST['q7'];
$c71 = $_POST['c71'];
$c72 = $_POST['c72'];
$c73 = $_POST['c73'];
$c74 = $_POST['c74'];

$q8 = $_POST['q8'];
$c81 = $_POST['c81'];
$c82 = $_POST['c82'];
$c83 = $_POST['c83'];
$c84 = $_POST['c84'];

$q9 = $_POST['q9'];
$c91 = $_POST['c91'];
$c92 = $_POST['c92'];
$c93 = $_POST['c93'];
$c94 = $_POST['c94'];

$q10 = $_POST['q10'];
$ca1 = $_POST['ca1'];
$ca2 = $_POST['ca2'];
$ca3 = $_POST['ca3'];
$ca4 = $_POST['ca4'];

$ans1 = $_POST['ans1'];
$ans2 = $_POST['ans2'];
$ans3 = $_POST['ans3'];
$ans4 = $_POST['ans4'];
$ans5 = $_POST['ans5'];
$ans6 = $_POST['ans6'];
$ans7 = $_POST['ans7'];
$ans8 = $_POST['ans8'];
$ans9 = $_POST['ans9'];
$ansa = $_POST['ansa'];

$sub ="";

echo $val;
if($val == "maths") 
$sub = "quesMat";
elseif($val == "gk") 
$sub = "quesGK";
elseif($val == "phy") 
$sub = "quesPhy";
elseif($val == "chem") 
$sub = "quesChem";
else 
$sub = "quesBio";


$qd = "UPDATE $sub SET q = '$q1',  c1 = '$c11' , c2='$c12' ,  c3= '$c13' ,  c4='$c14',ans='$ans1'  WHERE num = 1;";
$qd .= "UPDATE $sub SET q = '$q2' , c1 = '$c21' , c2='$c22' , c3= '$c23' , c4='$c24',ans='$ans2' WHERE num = 2;";
$qd .= "UPDATE $sub SET q = '$q3' , c1 = '$c31' , c2='$c32' , c3= '$c33' , c4='$c34',ans='$ans3' WHERE num = 3;";
$qd .= "UPDATE $sub SET q = '$q4' , c1 = '$c41' , c2='$c42' , c3= '$c43' , c4='$c44',ans='$ans4' WHERE num = 4;";
$qd .= "UPDATE $sub SET q = '$q5' , c1 = '$c51' , c2='$c52' , c3= '$c53' , c4='$c54',ans='$ans5' WHERE num = 5;";
$qd .= "UPDATE $sub SET q = '$q6' , c1 = '$c61' , c2='$c62' , c3= '$c63' , c4='$c64',ans='$ans6' WHERE num = 6;";
$qd .= "UPDATE $sub SET q = '$q7' , c1 = '$c71' , c2='$c72' , c3= '$c73' , c4='$c74',ans='$ans7' WHERE num = 7;";
$qd .= "UPDATE $sub SET q = '$q8' , c1 = '$c81' , c2='$c82' , c3= '$c83' , c4='$c84',ans='$ans8' WHERE num = 8;";
$qd .= "UPDATE $sub SET q = '$q9' , c1 = '$c91' , c2='$c92' , c3= '$c93' , c4='$c94' ,ans='$ans9' WHERE num = 9;";
$qd .= "UPDATE $sub SET q = '$q9' , c1 = '$ca1' , c2='$ca2' , c3= '$ca3' , c4='$ca4',ans='$ansa' WHERE num = 10";

echo "<script type='text/javascript'>alert('$qd')</script>";

if(mysqli_multi_query($conn,$qd))
{
                    echo '<script type="text/javascript">window.location.href = "add_quiz.php"; </script>';
                    
                } else
                {
                    echo '<script type="text/javascript">alert("Something Went Wrong!")</script>';
                }



?>