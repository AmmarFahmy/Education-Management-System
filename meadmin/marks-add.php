<?php


if (isset($_POST['add_marks'])) {
	$student_name = $_POST['student_name'];
	$student_grade = $_POST['student_grade'];
	$Math = $_POST['Math'];
	$Computer = $_POST['Computer'];
	$English = $_POST['English'];
	$Science = $_POST['Science'];
	$Sinhala = $_POST['Sinhala'];
	$Tamil = $_POST['Tamil'];
	$Lib = $_POST['Lib'];
	if ($student_name == "" or $student_grade == "" or $Math == "" or $Computer == "" or $English == "" or $Science == "" or $Sinhala == "" or $Tamil == "" or $Lib == "") {
		echo "<script>alert('Some Fields are missing....');</script>";
	} else {


		$add_done = $ravi->add_marks($student_name, $student_grade, $Math, $Computer, $English, $Science, $Sinhala, $Tamil, $Lib);
		if ($add_done == true) {
			echo "<script>window.location='home.php';</script>";
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
					<div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">Full Name</label>
						<div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3" name="add_t_fullname" placeholder="Full Name"> </div>
					</div>
					<div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">Address</label>
						<div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3" name="add_t_address" placeholder="Teacher Current Address"> </div>
					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_email" placeholder="Email"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Username</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_username" placeholder="Username"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-9"> <input type="password" class="form-control" name="add_t_pass" placeholder="Password"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Father</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_father" placeholder="Father Name"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Mother</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_mother" placeholder="Mother Name"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">DOB</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_dob" placeholder="Date Of Birth"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Qualification</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_qualification" placeholder="Qualification"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Contact</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_contact" Placeholder="Contact Number"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Staff Type</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_staff" placeholder="Staff Type"> </div>

					</div>
					<div class="form-group">


						<select id="selector1" class="form-control1" name="add_t_gender">
							<option>Select Gender</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
					</div>


					<div class="col-sm-offset-2">
						<input type="submit" class="btn btn-default" name="add_marks" value="Add Marks">
					</div>
				</form>
			</div>

		</div>


	</div>