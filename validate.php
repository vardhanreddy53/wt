<?php
$uname="root";
$pass="Naveen@123";
$server="localhost";
$dbname="wt";
$con=mysqli_connect($server,$uname,$pass,$dbname);
if (!$con){
    die('Could not connect: '.mysqli_connect_error());  
}
    else
    { 
       $studentmail=$_POST["student_mail"];
       $studentpass=$_POST["student_pass"];
       $query="select *from student_info where student_mail='".$studentmail."' and student_password='".$studentpass."'";
       $records=mysqli_query($con,$query);
       if(mysqli_num_rows($records)>=1)
       header("Location: success.html");
       else
       header("Location: failure.php");
    }
?>