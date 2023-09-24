<?php
include('../CMS/includes/config.php');

if(isset($_POST['submit']))
{
    $names=$_POST['names'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $topic=$_POST['topic'];
    // $chk="";
    // foreach($inquiry as $chk){
    //     $chk.=$chk1.",";
    // }
    $sql1="INSERT INTO inquiry(names,email,mobile,topic)values('$names','$email','$mobile','$topic')";

    if(mysqli_query($db_conn,$sql1)){
        echo "<script>alert('your inquiry submited')</script>";
    }else{
        echo "error";
    }

}
?>