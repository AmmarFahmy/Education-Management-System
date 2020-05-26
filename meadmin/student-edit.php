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


		<div class="tables">


			<table class="table table-bordered ">

				<thead>
					<tr>
						<th>#</th>
						<th>Full Name</th>
						<th>Grade</th>
						<th>Section</th>
						<th>Roll No</th>
						<th>DOB</th>
						<th>Address</th>
						<th>District</th>
						<th>Gender</th>
						<th>Father</th>
						<th>Mother</th>
						<th>Parents' Contact</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>

					<?php $teacher_dis_admin = $ravi->st_info_display_admin();
					$t_sn = 1;
					while ($st_info_admin = $teacher_dis_admin->fetch_assoc()) {


					?>


						<tr>
							<th scope="row">
								<?php echo $t_sn; ?>
							</th>
							<td>
								<?php echo $st_info_admin['st_fullname']; ?>
							</td>
							<td>
								<?php echo $st_info_admin['st_grade']; ?>
							</td>
							<td>
								<?php echo $st_info_admin['st_section']; ?>
							</td>
							<td>
								<?php echo $st_info_admin['roll_no']; ?>
							</td>
							<td>
								<?php echo $st_info_admin['st_dob']; ?>
							</td>
							<td>
								<?php echo $st_info_admin['st_address']; ?>
							</td>
							<td>
								<?php echo $st_info_admin['st_district']; ?>
							</td>
							<td>
								<?php echo $st_info_admin['st_gender']; ?>
							</td>
							<td>
								<?php echo $st_info_admin['st_father']; ?>
							</td>
							<td>
								<?php echo $st_info_admin['st_mother']; ?>
							</td>
							<td>
								<?php echo $st_info_admin['st_parents_contact']; ?>
							</td>
							<td>
								<a href="home.php?ravi=student-editnow&st_id=<?php echo $st_info_admin['st_id']; ?>" class="btn red">Edit</a>
							</td>
						</tr>
					<?php $t_sn++;
					} ?>
				</tbody>

			</table>

		</div>
	</div>


</div>
<!--//graph-visual-->