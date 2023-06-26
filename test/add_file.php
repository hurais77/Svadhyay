<!DOCTYPE html>
<html>
<head>
	<title>Enter Test Name</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
		    height: 50%;
		    border-style: dotted;
		    margin: 10px 25%;
		    padding: 10px;
		    text-align: center;
		}
	</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
</head>
<body>
<form method="POST">
<label style="float:left;font-size: 30px;font-family: 'Aclonica';font-size:25px;">Test Name:</label><input class="form-control" style="width:70%;" type="text" name="quizname" id="question"><br><br><br>
<label style="float:left;font-size: 30px;font-family: 'Aclonica';font-size:25px;">Subject:  </label><select class="form-control" style="width:70%;float: left;" name="subject" id="dropdown"><br><br><br>
</select><br><br><br><br>
<button class="btn btn-default" style="width: 30%;margin-top:18px;font-family: 'Aclonica';" type="submit" name="submit">ADD</button>
</form>
	<?php
        include('../ebook/dropdown.php');
        ?>
	        <script type="text/javascript">
        var x = document.getElementById('dropdown');
        <?php $row=mysqli_fetch_array($res); ?>

        var maths = "<?php echo $row['maths'] ?>";
        var phy = "<?php echo $row['phy'] ?>";
        var chem = "<?php echo $row['chem'] ?>";
        var bio = "<?php echo $row['bio'] ?>";
        var gk = "<?php echo $row['gk'] ?>";
        var comp = "<?php echo $row['comp'] ?>";

        if(maths == 1)
        {
        var option = document.createElement('option');
        option.value = "maths";
        option.innerHTML = "Maths";
        x.appendChild(option);
        }
        if(phy == 1)
        {
        var option = document.createElement('option');
        option.value = "phy";
        option.innerHTML = "PHY";
        x.appendChild(option);
        }
        if(chem == 1)
        {
        var option = document.createElement("option");
        option.value = "chem";
        option.innerHTML = "CHEMISTRY";
        x.appendChild(option);
        }
        if(bio == 1)
        {
        var option = document.createElement("option");
        option.value = "bio";
        option.innerHTML = "BIOLOGY";
        x.appendChild(option);
        }
        if(gk == 1)
        {
        var option = document.createElement("option");
        option.value = "gk";
        option.innerHTML = "GK";
        x.appendChild(option);
        }
        if(comp == 1)
        {
        var option = document.createElement("option");
        option.value = "comp";
        option.innerHTML = "COMPUTER";
        x.appendChild(option);
        }

    </script>
	<?php 

	if ( isset( $_POST['submit'] ) ) {
	$quizname = $_POST['quizname'];
	$subject = $_POST['subject'];
	$_SESSION['subject'] = $subject;
    $usrfolder= substr(md5(time()),0,15);
   $newname = $usrfolder."_".$quizname;
	$myfile = fopen("uploads/$newname.js", "a") or die("Unable to open file!");
	$first = "var allQuestions = [";
	fwrite($myfile, $first);
	$_SESSION['description']=$quizname;
    $_SESSION['file']=$newname;
	
	echo '<script type="text/javascript">if(confirm("Test has been added now enter questions.")){window.location.href = "quizcreator.php"; }else{window.location.href = "quizcreator.php";}</script>';

}
	?>
</body>
</html>