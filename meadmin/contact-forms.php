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
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $contact_dis_admin = $ravi->contact_info_display_admin();
                        $t_sn = 1;
                        while ($contact_info_admin = $contact_dis_admin->fetch_assoc()) {
                        ?>


                            <tr>
                                <th scope="row"><?php echo $t_sn; ?></th>
                                <td><?php echo $contact_info_admin['name']; ?></td>
                                <td><?php echo $contact_info_admin['phone']; ?></td>
                                <td><?php echo $contact_info_admin['email']; ?></td>
                                <td><?php echo $contact_info_admin['subject']; ?></td>
                                <td><?php echo $contact_info_admin['message']; ?></td>
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