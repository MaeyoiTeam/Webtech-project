<html>
<head>
<title>All </title>
</head>
<body>
<?php
$dbhost = "localhost";
 $dbusername = "root";
 $dbpassword = "";
 $dbname = "notice";
 $mysqli = new mysqli ($dbhost, $dbusername, $dbpassword, $dbname);
	
$strSQL = "SELECT * FROM data ";
$objQuery = mysqli_query($mysqli,$strSQL);

$Num_Rows = mysqli_num_rows($objQuery);

$Per_Page = 2;   // Per Page

$Page = $_GET["Page"];
if(!$_GET["Page"])
{
	$Page=1;
}

$Prev_Page = $Page-1;
$Next_Page = $Page+1;

$Page_Start = (($Per_Page*$Page)-$Per_Page);
if($Num_Rows<=$Per_Page)
{
	$Num_Pages =1;
}
else if(($Num_Rows % $Per_Page)==0)
{
	$Num_Pages =($Num_Rows/$Per_Page) ;
}
else
{
	$Num_Pages =($Num_Rows/$Per_Page)+1;
	$Num_Pages = (int)$Num_Pages;
}


$strSQL .=" order  by no ASC LIMIT $Page_Start , $Per_Page";// no คือ autoincrement

$objQuery = mysqli_query($mysqli,$strSQL);
?>
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">no</div></th>
    <th width="98"> <div align="center">campaign </div></th>
    <th width="198"> <div align="center">url</div></th>
    
  </tr>
<?php
while($objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC))
{
?>
  <tr>
    <td><div align="center"><?php echo $objResult["no"];?></div></td>
    <td><div align="center"><?php echo $objResult["camp"];?></div></td>
    <td><div align="center"><?php echo $objResult["url"];?></div></td>
    
  </tr>
<?php
}
?>
</table>

<br>
Total <?php echo $Num_Rows;?> Record : <?php echo $Num_Pages;?> Page :
<?php
if($Prev_Page)
{
	echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page'><< Back</a> ";
}

for($i=1; $i<=$Num_Pages; $i++){
	if($i != $Page)
	{
		echo "[ <a href='$_SERVER[SCRIPT_NAME]?Page=$i'>$i</a> ]";
	}
	else
	{
		echo "<b> $i </b>";
	}
}
if($Page!=$Num_Pages)
{
	echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$Next_Page'>Next>></a> ";
}
mysqli_close($mysqli);
?>
</body>
</html>