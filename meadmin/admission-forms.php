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
                            <th>Name of The Applicant</th>
                            <th>DOB</th>
                            <th>Father's Name</th>
                            <th>Gender</th>
                            <th>Mobile No.</th>
                            <th>Address</th>
                            <th>District</th>
                            <th>Province</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $admission_dis_admin = $ravi->admission_info_display_admin();
                        $t_sn = 1;
                        while ($admission_info_admin = $admission_dis_admin->fetch_assoc()) {
                        ?>


                            <tr>
                                <th scope="row"><?php echo $t_sn; ?></th>
                                <td><?php echo $admission_info_admin['name']; ?></td>
                                <td><?php echo $admission_info_admin['dob']; ?></td>
                                <td><?php echo $admission_info_admin['fname']; ?></td>
                                <td><?php echo $admission_info_admin['gender']; ?></td>
                                <td><?php echo $admission_info_admin['mobile']; ?></td>
                                <td><?php echo $admission_info_admin['address']; ?></td>
                                <td><?php echo $admission_info_admin['district']; ?></td>
                                <td><?php echo $admission_info_admin['state']; ?></td>
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