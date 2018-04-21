<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Notification Board</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
	<div id="content" align="center">
		<form action="notifyexec.php" method="post">
		<h1>Notice Board</h1><br> 
<?php echo $_SESSION['ID'];?>
		Message<br>
		<textarea type="text" name="message" class="ed" rows="15" cols="50" class="form-control"></textarea><br/><br/>
		<input type="submit" class="btn btn-primary" value="Send" id="button1">
		</form>
	</div>
    </div>
    </body>
</html>