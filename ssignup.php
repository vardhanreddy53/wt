<?php
$uname="root";
$pass="";
$server="localhost";
$dbname="wt";
$con=mysqli_connect($server,$uname,$pass,$dbname);
if (!$con){
    die('Could not connect: '.mysqli_connect_error());  
}
    else
    { 
       $studentname=$_POST["student_name"];
       $studentmail=$_POST["student_mail"];
       $studentpass=$_POST["student_pass"];
       $query="insert into student_info values('$studentname','$studentmail','$studentpass')";
       $records=mysqli_query($con,$query);
       if(mysqli_affected_rows($con))
       header("Location: login.html");
       
    }
?>