<?php


if (isset($_POST['add_subjects'])) {
	$subject_name = $_POST['subject_name'];
	$t_fullname = $_POST['t_fullname'];
	$t_email = $_POST['t_email'];
	$grade = $_POST['grade'];
	$time = $_POST['time'];
	if ($subject_name == "" or $t_fullname == "" or $t_email == "" or $grade == "" or $time == "") {
		echo "<script>alert('Some Fields are missing....');</script>";
	} else {


		$done = $ravi->add_subjects($subject_name, $t_fullname, $t_email, $grade, $time);
		if ($done == true) {
			echo "<script>window.location='home.php?teacher=teacher-information';</script>";
		} else {
			echo "<script>alert('unsuccess add student marks');</script>";
		}
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
						<div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3" name="subject_name" placeholder="Name of the subject"> </div>
					</div>
					<div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">Full Name</label>
						<div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3" name="t_fullname" placeholder="Teacher's Full Name"> </div>
					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="t_email" placeholder="Teacher's Email"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Grade</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="grade" placeholder="Grade"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Time</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="time" placeholder="time"> </div>

					</div>


					<!-- <div class="form-group"><label for="address" class="col-sm-2 control-label">Gender</label>
						<select id="selector1" class="form-control1" name="add_t_gender">
						   <option>Select Gender</option>
						  <option value="Male">Male</option>
						   <option value="Female">Female</option>
						</select>
					</div> -->


					<div class="col-sm-offset-2">
						<input type="submit" class="btn btn-default" name="add_subjects" value="Add Subject">
					</div>
				</form>
			</div>

		</div>


	</div>