<?php   
if ($_GET) {
$firstname = $_GET["fname"];
$lastname = $_GET["lname"];
?>
<!DOCTYPE html>
<html> 
<head> 
<title>HTML5 and CSS practice</title>
	<meta charset="UTF-8">
	<meta name="description" content="Form practice">
	<meta name="keywords" content="html5, Form">
	<meta name="author" content="MTC student">
	
</head>
<body>
</p>
<div><p> Thanks, <strong>
<?php 
print($firstname); print(" "); print($lastname); 
?>
</strong>,
for testing form contest.
</p>
<p>
If you work hard for this class, you'll get a good job.  Good Luck!.
</p>
</div>
</body> 
</html>
<?php
}
?>
