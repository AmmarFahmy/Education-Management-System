<?php

$marks_id = $_GET['marksid'];
$edit_marks_info = $ravi->edit_marksid($marks_id);
$edit_marks_display = $edit_marks_info->fetch_assoc();


if (isset($_POST['up_marks'])) {


	$up_fullname = $_POST['up_fullname'];
	$up_grade = $_POST['up_grade'];
	$up_math = $_POST['up_math'];
	$up_computer = $_POST['up_computer'];
	$up_english = $_POST['up_english'];
	$up_science = $_POST['up_science'];
	$up_sinhala = $_POST['up_sinhala'];
	$up_tamil = $_POST['up_tamil'];
	$up_lib = $_POST['up_lib'];

	$update_done = $ravi->update_marks_info($up_fullname, $up_grade, $up_math, $up_computer, $up_english, $up_science, $up_sinhala, $up_tamil, $up_lib, $marks_id);
	if ($update_done == true) {
		echo "<script>window.location='home.php?ravi=marks-information';</script>";
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
					<div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">Student Name</label>
						<div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3" name="up_fullname" value="<?php echo $edit_marks_display['student_name']; ?>"> </div>
					</div>
					<div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">Grade</label>
						<div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3" name="up_grade" value="<?php echo $edit_marks_display['student_grade']; ?>"> </div>
					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Math Marks</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="up_math" value="<?php echo $edit_marks_display['Math']; ?>"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Computer Marks</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="up_computer" value="<?php echo $edit_marks_display['Computer']; ?>"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">English Marks</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="up_english" value="<?php echo $edit_marks_display['English']; ?>"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Science Marks</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="up_science" value="<?php echo $edit_marks_display['Science']; ?>"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Sinhala Marks</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="up_sinhala" value="<?php echo $edit_marks_display['Sinhala']; ?>"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Tamil Marks</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="up_tamil" value="<?php echo $edit_marks_display['Tamil']; ?>"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Lib. Marks</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="up_lib" value="<?php echo $edit_marks_display['Lib']; ?>"> </div>

					</div>
					<div class="col-sm-offset-2">
						<button type="submit" class="btn btn-default" name="up_marks">Update Marks</button>
					</div>
				</form>
			</div>

		</div>


	</div>