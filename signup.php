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
       $teachername=$_POST["teacher_name"];
       $teachermail=$_POST["teacher_mail"];
       $teacherpass=$_POST["teacher_pass"];
       $tp=$_POST["logpass"];
       if($teacherpass===$tp){
       $query="insert into teacher_info values('$teachername','$teachermail','$teacherpass')";
       $records=mysqli_query($con,$query);
       if(mysqli_affected_rows($con))
       header("Location: success.html");
       }
       else{
       echo "<footer><h4 align='center'>password miss match</h4></footer>";
       header("Refresh:3,Location: newuser.html");
       }
    }
?>