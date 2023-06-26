<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
	<link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Amarante' rel='stylesheet'>
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
		    font-size: 14px;
		}
		li p
		{
		    font-family: 'Amaranth';
		    font-size: 22px;
		}
		li lable
		{
			font-family: 'Amarante';
			font-size: 20px;
		}
		ol,ul
		{
			font-size: 20px;
		}
		input[type=radio]
		{
			height: 15px;
			width: 15px;
			margin-right:7px; 
		}
	</style>
</head>
<?php 
session_start();
if (isset($_GET['path'])) {
$string=$_GET['path'];

}

?>
<body>
<ol id="list"></ol>
<script src="quizmaker.js"></script>
<script type="text/javascript" src="<?php echo $string; ?>"></script>
<script type="text/javascript">
	window.onload = nextQuestion()
</script>
<p id="demo"></p>
<form method="post">
<button class="btn btn-default" name="submit" style="width: 10%;float:left;margin-top:18px;" onclick="chooseOption()">Submit</button>
</form>
 <script>
 	 window.history.forward(); 
        function noBack() { 
            window.history.forward(); 
        } 
       	 var mark = sessionStorage.getItem("marks");
</script>
<?php 
        include('../db.php');
       if(isset($_POST['submit']))
       {

       	

     
       echo '<script type="text/javascript">if(confirm("Exam completed")){window.location.href = "student_ebook.php"; }else{window.location.href = "student_ebook.php";}</script>';
     
    }    
?>
</body>
</html>