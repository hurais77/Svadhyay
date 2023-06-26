<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
	<style type="text/css">
				body
		{
		    margin: 0;
		    background-repeat: no-repeat;
		    background-attachment: fixed;
			width: 100%;
			height: 100%;
			background-repeat: no-repeat;
			background-color: #F02FC2; /* For browsers that do not support gradients */
			background-image: linear-gradient(to bottom right, #F02FC2, #6094EA); /* Standard syntax (must be last) */
		}
		html {
		    height: 100%;
		}
				form
		{
		    height: auto;
		    border-style: dotted;
		    margin: 10px 25%;
		    padding: 10px;
		    text-align: center;
		}
	</style>
	<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
</head>
<body>
	<form method="POST">

<label style="float: left;font-family: 'Aclonica';font-size:25px;">Question:</label><input class="form-control" type="text" name="question" id="question"><br>
<label style="float: left;font-family: 'Aclonica';font-size:25px;">Option1:</label><input class="form-control" type="text" name="option1"><br>
<label style="float: left;font-family: 'Aclonica';font-size:25px;">Option2:</label><input class="form-control" type="text" name="option2"><br>
<label style="float: left;font-family: 'Aclonica';font-size:25px;">Option3:</label><input class="form-control" type="text" name="option3"><br>
<label style="float: left;font-family: 'Aclonica';font-size:25px;">Option4:</label><input class="form-control" type="text" name="option4"><br>
<label style="float: left;font-family: 'Aclonica';font-size:25px;">Answer:</label><input class="form-control" type="text" name="answer"><br>

<button class="btn btn-default" style="width: 35%;float:left;margin-top:18px;font-family: 'Aclonica';"  type="submit" name="next">Click to add more Questions</button>
<button class="btn btn-default" style="width: 30%;float:right;margin-top:18px;font-family: 'Aclonica';" type="submit" name="submit">Submit</button>
</form>
	<?php  
	include('../db.php');
session_start();

if ( isset( $_POST['next'] ) ) {
		$quizname = $_SESSION['file'];
	$myfile = fopen("uploads/$quizname.js", "a") or die("Unable to open file!");
	$question = $_POST['question'];
	$opt1 = $_POST['option1'];
	$opt2 = $_POST['option2'];
	$opt3 = $_POST['option3'];
	$opt4 = $_POST['option4'];
	$ans = $_POST['answer'];
	$ques = '{question:"'.$question.'",';
	$option = 'options:["'.$opt1.'","'.$opt2.'","'.$opt3.'","'.$opt4.'"],';
	$answer = 'answer:'.($ans-1).'},';

	fwrite($myfile, $ques);
	fwrite($myfile, $option);
	fwrite($myfile, $answer);
	
}

if ( isset( $_POST['submit'] ) ) {
if ( isset($_POST['option1']))
{$quizname = $_SESSION['file'];
	$myfile = fopen("uploads/$quizname.js", "a") or die("Unable to open file!");
	$question = $_POST['question'];
	$opt1 = $_POST['option1'];
	$opt2 = $_POST['option2'];
	$opt3 = $_POST['option3'];
	$opt4 = $_POST['option4'];
	$ans = $_POST['answer'];
	$ques = '{question:"'.$question.'",';
	$option = 'options:["'.$opt1.'","'.$opt2.'","'.$opt3.'","'.$opt4.'"],';
	$answer = 'answer:'.($ans-1).'},';

	fwrite($myfile, $ques);
	fwrite($myfile, $option);
	fwrite($myfile, $answer);
}



	$quizname = $_SESSION['file'];
	$myfile = fopen("uploads/$quizname.js", "a") or die("Unable to open file!");
	$close = '];';
	fwrite($myfile, $close);
	fclose($myfile);
	$subject=$_SESSION['subject'] ;
	$description=$_SESSION['description'];
	$path="uploads/". $_SESSION['file'].".js";


 $filesql = "INSERT INTO test (name,path,date,subject) VALUES('$description','$path',CURDATE(),'$subject')";
                $fileresult=mysqli_query($conn, $filesql);
                if (isset($fileresult))
                {
	

	  echo '<script type="text/javascript">if(confirm("Test Added Sucessfully!")){window.location.href = "test.php"; }else{window.location.href = "test.php";}</script>';

	}
}
?>
</body>
</html>