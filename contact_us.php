<html>
<head>
	<script>
		function hello()
		{
			alert("Details Sent");
			window.location.href = "http://localhost/svadhyaay/contact_us.php";
		}
	</script>
	<title>Contact Us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/contact_us.css"/>
</head>
<?php
 include ('navbar_home.html');
 ?>
<body>
    	<div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Contact Us</h2>
				<input type="text" class="field" placeholder="Your Name"/>
				<input type="email" class="field" placeholder="Your E-mail"/>
				<input type="text" class="field" placeholder="Your Phone"/>
				<textarea class="field area" placeholder="message"></textarea>
				<button class="btn" onclick="hello()">Send</button>
            </div>
            </div>
        </div>
</body>
</html>