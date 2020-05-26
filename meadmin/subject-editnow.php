<?php

$sub_id = $_GET['subjectid'];
$edit_sub_info = $ravi->edit_subid($sub_id);
$edit_sub_display = $edit_sub_info->fetch_assoc();


if (isset($_POST['up_sub'])) {


	$up_subname = $_POST['up_subname'];
	$up_t_fullname = $_POST['up_t_fullname'];
	$up_t_email = $_POST['up_t_email'];
	$up_grade = $_POST['up_grade'];
	$up_time = $_POST['up_time'];

	$update_done = $ravi->update_sub_info($up_subname, $up_t_fullname, $up_t_email, $up_grade, $up_time, $sub_id);
	if ($update_done == true) {
		echo "<script>window.location='home.php?ravi=subjects-information';</script>";
	} else {
		echo "<script>alert('Cant update Information');</script>";
	}
}

?>
<div class="outter-wp">
	<!--sub-heard-part-->
	<div class="sub-heard-part">
		<ol class="breadcrumb m-b-0">
			<li><a href="index.html">Home</a></li>
			<li class="active">
				<?php if (isset($_GET['ravi'])) {
					echo strtoupper($page = $_GET['ravi']);
				} ?>
			</li>
		</ol>
	</div>
	<!--//sub-heard-part-->
	<div class="graph-visual tables-main">
		<h2 class="inner-tittle">
			<?php echo strtoupper($_GET['ravi']); ?>
		</h2>

		<div class="grid-1">
			<div class="form-body">
				<form class="form-horizontal" method="post">
					<div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">Subject Name</label>
						<div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3" name="up_subname" value="<?php echo $edit_sub_display['subject_name']; ?>"> </div>
					</div>
					<div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">Teacher's Name</label>
						<div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3" name="up_t_fullname" value="<?php echo $edit_sub_display['t_fullname']; ?>"> </div>
					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Teacher's Email</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="up_t_email" value="<?php echo $edit_sub_display['t_email']; ?>"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Grade</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="up_grade" value="<?php echo $edit_sub_display['grade']; ?>"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Time</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="up_time" value="<?php echo $edit_sub_display['time']; ?>"> </div>

					</div>
					<div class="col-sm-offset-2">
						<button type="submit" class="btn btn-default" name="up_sub">Update Subject</button>
					</div>
				</form>
			</div>

		</div>


	</div>