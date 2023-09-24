<?php
    include("../CMS/header.php");
    include("../CMS/includes/config.php");

    if(isset($_POST['submit']))
{
    $First_Name=$_POST['First_Name'];
    $Father_Name=$_POST['Father_Name'];
    $Last_Name=$_POST['Last_Name'];
    $birthday=$_POST['birthday'];
    $Email_id=$_POST['Email_id'];
    $Mobile=$_POST['Mobile'];
    $Gender=$_POST['Gender'];
    $Addres=$_POST['Addres'];
    $City=$_POST['City'];
    $Pin_Code=$_POST['Pin_Code'];
    $Country=$_POST['Country'];
    $X_board=$_POST['X_board'];
    $X_Perc=$_POST['X_Perc'];
    $X_YearOP=$_POST['X_YearOP'];
    $XII_board=$_POST['XII_board'];
    $XII_Perc=$_POST['XII_Perc'];
    $XII_YearOP=$_POST['XII_YearOP'];
    $Branch=$_POST['Branch'];

    $sql2="INSERT INTO admission (First_Name,Father_Name,Last_Name,birthday,Email_id,Mobile,Gender,Addres,City,Pin_Code,Country,X_board,X_Perc,X_YearOP,XII_Board,XII_Perc,XII_YearOP,Branch) VALUES('$First_Name','$Father_Name', '$Last_Name', '$birthday', '$Email_id', '$Mobile', '$Gender', '$Addres', '$City', '$Pin_Code', '$Country', '$X_board', '$X_Perc', '$X_YearOP', '$XII_board', '$XII_Perc', '$XII_YearOP', '$Branch')";

    // $sql3="INSERT INTO admission('First_Name', 'Father_Name', 'Last_Name', 'birthday', 'Email_id', 'Mobile', 'Gender', 'Addres', 'City', 'Pin_Code', 'Country', 'X_board', 'X_Perc', 'X_YearOP', 'XII_board', 'XII_Perc', 'XII_YearOP', 'Branch') VALUES ('$First_Name','$Father_Name', '$Last_Name', '$birthday', '$Email_id', '$Mobile', '$Gender', '$Addres', '$City', '$Pin_Code', '$Country', '$X_Board', '$X_Perc', '$X_YearOP', '$XII_Board', '$XII_Perc', '$XII_YearOP', '$Branch')";


    if(mysqli_query($db_conn,$sql2)){
        echo "<script>alert('your inquiry submited')</script>";
        header("Location: http://localhost/CMS/admissions.html");
    }else{
        echo "error:". mysqli_error($db_conn);
    }
    
}

?>