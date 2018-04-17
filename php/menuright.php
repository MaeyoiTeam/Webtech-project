 <?php
                    
                
                    
                    
                    
                if(isset($_SESSION['ID'])){
                    
                    if($_SESSION['Status']=="Teacher"){
                        $sql = "teachert";
                        $link2 ="teacher_page.php";
 			        $link3 ="teacher_course.php";
                    $link4 ="teacher_swap.php";
                    }
                    else{
                        $sql ="studentt";
                        $link2 ="student_page.php";
			$link3 ="student_course.php";
			$link4 ="student_swap.php";
                        
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
                $button2 = "Register";
                $link1 = "login.php";
                $link2 = "register.php";
                $link3 = "index.php";
                $link4 = "index.php";
                }
                echo  "<a href=".$link1."><h1>".$button1."</h1></a>";
                echo  "<a href=".$link2."><h1>".$button2."</h1></a>";
                echo  "<a href=".$link3."><h1>Course</h1></a>";
                echo  "<a href=".$link4."><h1>SwapClass</h1></a>";
?>