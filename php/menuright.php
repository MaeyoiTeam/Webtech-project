 <?php
                    
                
                    
                    
                    
                if(isset($_SESSION['ID'])){
                    
                    if($_SESSION['Status']=="Teacher"){
                        $sql = "teachert";
                        $link2 ="teacher_page.php";
                    }
                    else{
                        $sql ="studentt";
                        $link2 ="student_page.php";
                    }
                    $strSQL = "SELECT * FROM ".$sql." WHERE ID = '".$_SESSION['ID']."' ";
	                $objQuery = mysqli_query($objCon,$strSQL);
	                $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
                    
                    
               echo "<h1>Hi! ".$objResult["Fname"]."<br>".$objResult["Lname"]."</h1>"; 
                    
                $button1 = "Logout";
                $button2 = "My Profile";
                $link1 = "logout.php";
                }
                else{
                    
                $button1 = "Login";
                $button2 = "register";
                $link1 = "login.php";
                $link2 = "register.php";
                }
                echo  "<a href=".$link1."><h1>".$button1."</h1></a>";
                echo  "<a href=".$link2."><h1>".$button2."</h1></a>";
                echo  "<a href=ClassRoom.php><h1>Classroom</h1></a>";
?>