<?php
   include('../includes/config.php');
   session_start();
   

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db_conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db_conn,$_POST['password']); 
      
      $sql = "SELECT * FROM login WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db_conn,$sql);
      
      // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         while($row = mysqli_fetch_assoc($result)){
            if ($row["userType"]== "Admin" ) {
               $_SESSION['loginuser']= $row["Username"];
               header('location: ../admin/dashboard.php');
            }
            else if ($row["userType"]== "Student" ) {
               $_SESSION['loginuser']= $row["Username"];
               header('location: ../student/student-index.php');
            }
            else if ($row["userType"]== "Faculty" ) {
               $_SESSION['loginuser']= $row["Username"];
               header('location: ../admin/dashboard.php');
            }else{
               echo "invalid data";
            }
         }
      }else {
         echo "Your Login Name or Password is invalid";
         header("location: ../login.php");
      }
   }
?>
