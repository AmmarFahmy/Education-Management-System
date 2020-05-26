<?php

$conn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($conn, "project2");

$sql = "insert into admission_form (name,dob,fname,gender,mobile,address,district,state) values ('$_POST[name]','$_POST[dob]','$_POST[fname]','$_POST[gender]','$_POST[mobile]','$_POST[address]','$_POST[district]','$_POST[state]')";

$run = mysqli_query($conn, $sql);

if ($run == true) {
    echo "<script>window.location='../index.php';</script>";
} else {
    echo "<script>alert('Faild to Add!!');</script>";
}

mysqli_close($conn);
