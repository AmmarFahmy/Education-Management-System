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
						<th>Subject Name</th>
						<th>Teacher's Name</th>
						<th>Teacher's Email</th>
						<th>Grade</th>
						<th>Time</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>

					<?php $subjects_dis_admin = $ravi->subjects_info_display_admin();
					$t_sn = 1;
					while ($subjects_info_admin = $subjects_dis_admin->fetch_assoc()) {
					?>


						<tr>
							<th scope="row"><?php echo $t_sn; ?></th>
							<td><?php echo $subjects_info_admin['subject_name']; ?></td>
							<td><?php echo $subjects_info_admin['t_fullname']; ?></td>
							<td><?php echo $subjects_info_admin['t_email']; ?></td>
							<td><?php echo $subjects_info_admin['grade']; ?></td>
							<td><?php echo $subjects_info_admin['time']; ?></td>
							<td>
								<a href="home.php?ravi=subject-editnow&subjectid=<?php echo $subjects_info_admin['id']; ?>" class="btn red">Edit</a>
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