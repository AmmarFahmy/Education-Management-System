<?php
$del_teacher = $_GET['studentid'];
$del_done = $ravi->delete_teacher($del_teacher);
if ($del_done == true) {
	echo "<script>window.location = 'home.php?student=student-delete'; alert('success delete');</script>";
} else {
	echo "<script>window.location='home.php?student=student-delete'; alert('cant delete');</script>";
}
