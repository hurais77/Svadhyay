<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
			display:none;
		}
	</style>
</head>
<body>
<ol id="list"></ol>
<script src="quizmaker.js"></script>
<?php

if (isset($_GET['path'])) {
$string=$_GET['path'];

}

?>
<script type="text/javascript" src="<?php echo $string; ?>"></script>
<script type="text/javascript">
	window.onload = nextQuestion()
</script>
<p id="demo"></p>
</body>
</html>