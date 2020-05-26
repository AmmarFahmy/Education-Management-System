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


		$done = $ravi->add_marks($student_name, $student_grade, $Math, $Computer, $English, $Science, $Sinhala, $Tamil, $Lib);
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
					<div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">Student Name</label>
						<div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3" name="student_name" placeholder="Student Name"> </div>
					</div>
					<div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">Grade</label>
						<div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3" name="student_grade" placeholder="Grade"> </div>
					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Math</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="Math" placeholder="Marks for Maths"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Computer</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="Computer" placeholder="Marks for Computer"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">English</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="English" placeholder="Marks for English"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Science</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="Science" placeholder="Marks for Science"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Sinhala</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="Sinhala" placeholder="Marks for Sinhala"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Tamil</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="Tamil" placeholder="Marks for Tamil"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Lib</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="Lib" placeholder="Marks for Lib"> </div>

					</div>

					<!-- <div class="form-group"><label for="address" class="col-sm-2 control-label">Gender</label>
						<select id="selector1" class="form-control1" name="add_t_gender">
						   <option>Select Gender</option>
						  <option value="Male">Male</option>
						   <option value="Female">Female</option>
						</select>
					</div> -->


					<div class="col-sm-offset-2">
						<input type="submit" class="btn btn-default" name="add_marks" value="Add Marks">
					</div>
				</form>
			</div>

		</div>


	</div>