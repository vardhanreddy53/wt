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
    {  $teachername=$_POST["teacher_name"];
       $teachermail=$_POST["teacher_mail"];
       $teacherpass=$_POST["teacher_pass"];
       $query="select *from teacher_info where teacher_mail='".$teachermail."'teacher_name='".$teachername."' and teacher_password='".$teacherpass."'";
       $records=mysqli_query($con,$query);
       if(mysqli_num_rows($records)>=1)
       header("Location: success.html");
       else
       header("Location: failure.php");
    }
?>