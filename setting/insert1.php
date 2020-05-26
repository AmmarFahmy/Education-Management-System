<?php

$conn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($conn, "project2");

$sql1 = "insert into contact_form (name,phone,email,subject,message) values ('$_POST[name]','$_POST[phone]','$_POST[email]','$_POST[subject]','$_POST[message]')";

$run1 = mysqli_query($conn, $sql1);



if ($run1 == true) {
    echo "<script>window.location='../index.php';</script>";
} else {
    echo "<script>alert('Faild to Add!!');</script>";
}

mysqli_close($conn);
