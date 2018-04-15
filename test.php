<?php
session_start();
include("config.php");

$sql="SELECT Fname,ID FROM studentt ORDER BY Fname";
$x=0;
$y=0;
if ($result=mysqli_query($objCon,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
      $x++;
    printf ("%s (%s)\n",$row[0],$row[1]);
    }
  // Free result set
  mysqli_free_result($result);
}
echo $x;
mysqli_close($objCon);
?>