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
       echo "<footer><h4 align='center'>Password Miss Match You will be redirected to previous page in 3 seconds</h4></footer>";
    echo "<script>
    setTimeout(going,3000);
    function going(){
        window.history.back(-1);
    }
    </script>";
       }
    }
?>