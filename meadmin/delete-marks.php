<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

<style>
  table {
    width: 100%;
  }

  #example_filter {
    float: right;
  }

  #example_paginate {
    float: right;
  }

  label {
    display: inline-flex;
    margin-bottom: .5rem;
    margin-top: .5rem;

  }
</style>
<div class="pos-f-t">

  <nav class="navbar navbar-dark bg-dark">
    <a href="home.php" class="btn btn-success"> <i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back </a>
    <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Delete Student Marks Record </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="deletecode-marks.php" method="POST">

        <div class="modal-body">

          <input type="hidden" name="delete_id" id="delete_id">

          <h4> Do you want to Delete this Data ??</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal"> NO </button>
          <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button>
        </div>
      </form>

    </div>
  </div>
</div>
<br><br>
<h3 align="center">Manage Marks Information </h3>

<div class="container">
  <div class="row">
    <?php

    $con = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($con, "project2");


    $sql = "SELECT * FROM result";

    $run = mysqli_query($con, $sql);

    ?>

    <table id="example" class="table table-striped table-bordered">
      <thead class="thead-dark">
        <tr>

          <th>Student Name</th>
          <th>Grade</th>
          <th>Math</th>
          <th>Computer</th>
          <th>English</th>
          <th>Science</th>
          <th>Sinhala</th>
          <th>Tamil</th>
          <th>Lib</th>
          <th>Action</th>
        </tr>
      </thead>

      <?php

      if ($run) {

        foreach ($run as $row) {

      ?>

          <tbody>
            <tr>

              <td><?php echo $row['student_name']; ?></td>
              <td><?php echo $row['student_grade']; ?></td>
              <td><?php echo $row['Math']; ?></td>
              <td><?php echo $row['Computer']; ?></td>
              <td><?php echo $row['English']; ?></td>
              <td><?php echo $row['Science']; ?></td>
              <td><?php echo $row['Sinhala']; ?></td>
              <td><?php echo $row['Tamil']; ?></td>
              <td><?php echo $row['Lib']; ?></td>
              <td>

                <button type="button" class="btn btn-danger deletebtn">DELETE </button>

              </td>

            </tr>

          </tbody>
      <?php
        }
      } else {

        echo "No Record Found";
      }
      ?>
    </table>
  </div>
</div>

<footer class="page-footer font-small bg-blue">

  <!-- Copyright 
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> Mr.Devil Fighter</a>
  </div>
   Copyright -->

</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    $('#example').DataTable(

      {

        "aLengthMenu": [
          [5, 10, 25, -1],
          [5, 10, 25, "All"]
        ],
        "iDisplayLength": 5
      }
    );
  });


  function checkAll(bx) {
    var cbs = document.getElementsByTagName('input');
    for (var i = 0; i < cbs.length; i++) {
      if (cbs[i].type == 'checkbox') {
        cbs[i].checked = bx.checked;
      }
    }
  }
</script>


<script>
  $(document).ready(function() {

    $('.deletebtn').on('click', function() {

      $('#deletemodal').modal('show');

      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function() {
        return $(this).text();
      }).get();

      console.log(data);

      $('#delete_id').val(data[0]);

    });
  });
</script>