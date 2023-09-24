<?php
    include("../CMS/header.php");
    include("../CMS/includes/config.php");

    if(isset($_POST['submit'])){

        $FName=$_POST['FName'];
        $LName=$_POST['LName'];    
        $Poyear=$_POST['Poyear'];
        $Addres=$_POST['Addres'];
        $Email=$_POST['Email'];
        $Phone=$_POST['Phone'];
        $En_No=$_POST['En_no'];
        $Doc_Name=$_POST['Doc_Name'];

        $Sql3="INSERT INTO exstdudent(FName,LName,Poyear,Addres,Email,Phone,En_no,Doc_Name) VALUES('$FName','$LName','$Poyear','$Addres','$Email','$Phone','$En_No','$Doc_Name')";

        if(mysqli_query($db_conn,$sql3)){
            echo "<script>alert('your inquiry submited')</script>";
            header("Location: http://localhost/CMS/index.html");
        }else{
            echo "error:". mysqli_error($db_conn);
        }

    }

?>