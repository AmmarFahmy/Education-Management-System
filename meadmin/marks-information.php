	<div class="outter-wp">
		<!--sub-heard-part-->
		<div class="sub-heard-part">
			<ol class="breadcrumb m-b-0">
				<li><a href="index.html">Home</a></li>
				<li class="active"><?php if (isset($_GET['ravi'])) {
										echo strtoupper($page = $_GET['ravi']);
									} ?></li>
			</ol>
		</div>
		<!--//sub-heard-part-->
		<div class="graph-visual tables-main">
			<h2 class="inner-tittle"><?php echo strtoupper($_GET['ravi']); ?></h2>

			<div class="graph">
				<div class="tables">

					<table class="table table-bordered ">

						<thead>
							<tr>
								<th>#</th>
								<th>Student Name</th>
								<th>Grade</th>
								<th>Math Marks</th>
								<th>Computer Marks</th>
								<th>English Marks</th>
								<th>Science Marks</th>
								<th>Sinhala Marks</th>
								<th>Tamil Marks</th>
								<th>Lib. Marks</th>
							</tr>
						</thead>
						<tbody>

							<?php $marks_dis_admin = $ravi->marks_info_display_admin();
							$t_sn = 1;
							while ($marks_info_admin = $marks_dis_admin->fetch_assoc()) {
							?>


								<tr>
									<th scope="row"><?php echo $t_sn; ?></th>
									<td><?php echo $marks_info_admin['student_name']; ?></td>
									<td><?php echo $marks_info_admin['student_grade']; ?></td>
									<td><?php echo $marks_info_admin['Math']; ?></td>
									<td><?php echo $marks_info_admin['Computer']; ?></td>
									<td><?php echo $marks_info_admin['English']; ?></td>
									<td><?php echo $marks_info_admin['Science']; ?></td>
									<td><?php echo $marks_info_admin['Sinhala']; ?></td>
									<td><?php echo $marks_info_admin['Tamil']; ?></td>
									<td><?php echo $marks_info_admin['Lib']; ?></td>

								</tr>
							<?php $t_sn++;
							} ?>
						</tbody>

					</table>
				</div>
			</div>


		</div>
		<!--//graph-visual-->
	</div>