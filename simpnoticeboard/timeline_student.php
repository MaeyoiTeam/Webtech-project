<?php
session_start();
?>
<html>
<head>
<title>Notification Board</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
	<div id="content" align="center">
		<h1>แสดงสุดๆ</h1>
		ข้อความสุดๆ<br>
<?php
$dbname = "notice";
mysqli_select_db ($dbname,$objCon)
    $strSQL = "SELECT * FROM noticemsg";
    $result = mysqli_query($strSQL,$notice)
    while ($rs=mysqli_fetch_array($result)){
        echo $rs </br>;
    }
mysqli_close($objCon)
?>
    </div>
    </div>
         </body>
</html>