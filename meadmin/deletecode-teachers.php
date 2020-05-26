<?php

$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"project2");

if(isset($_POST['deletedata']))
{
$id=$_POST['delete_id'];

$sql="DELETE FROM teacher_info WHERE t_id='$id'";
$run=mysqli_query($connection,$sql);

if($run)
{
    echo'<script> alert("Data Deleted); </script>';
    header("location:teacher-delete.php");
}
else{
    echo'<script> alert("Data Not Deleted); </script>';
}

}
