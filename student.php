<?php
    $title = 'Student';
    require_once 'includes/header.php';
    require_once 'db/config.php';

    $sql_student = "SELECT * FROM student";
    $result = mysqli_query($connection_string, $sql_student);
?>
<?php require_once 'includes/side_nav.php'; ?>

<!-- Modal -->
<div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Student Data </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form action="insertcode.php" method="POST">

            <div class="modal-body">
                <div class="form-group">
                    <label> Name </label>
                    <input type="text" name="name" class="form-control" placeholder="Enter First Name">
                </div>

                <div class="form-group">
                    <label> Email </label>
                    <input type="text" name="email" class="form-control" placeholder="Enter Email">
                </div>

                <div class="form-group">
                    <label> Address </label>
                    <input type="text" name="address" class="form-control" placeholder="Enter Address">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="insertdata" class="btn btn-primary">Save Data</button>
            </div>
        </form>

    </div>
  </div>
</div>



<!-- ####################################################################################################################### -->

<!-- EDIT POP UP FORM (Bootstrap MODAL) -->

<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Edit Student Data </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form action="updatecode.php" method="POST">

            <div class="modal-body">

                <input type="hidden" name="update_id" id="update_id">

                <div class="form-group">
                    <label> Name </label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter First Name">
                </div>

                <div class="form-group">
                    <label> Email </label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email">
                </div>

                <div class="form-group">
                    <label> Address </label>
                    <input type="text" name="address" id="address" class="form-control" placeholder="Enter Address">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
            </div>
        </form>

    </div>
  </div>
</div>

<!-- #################################################################################################### -->




<!-- ####################################################################################################################### -->

<!-- DELETE POP UP FORM (Bootstrap MODAL) -->

<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Delete Student Data </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form action="deletecode.php" method="POST">

            <div class="modal-body">

                <input type="hidden" name="delete_id" id="delete_id">

                <h4> Do you want to Delete this Data ??</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">  NO </button>
                <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button>
            </div>
        </form>

    </div>
  </div>
</div>

<!-- #################################################################################################### -->



<div class="container p-2" style="position: relative;  float:left;">
    <div class="jumbotron">
        <div class="card">
            <h2 class="text-center";>Student Record </h2>
        </div>    
        <div class="card">
            <div class="card-body">
            <button type="button" class="btn btn-primary m-2" data-toggle="modal" data-target="#studentaddmodal">
                    ADD DATA
            </button>

                <table id="data_table_id" class="table table-bordered table-dark">
                    <thead>
                        <tr>
                            <th scope="col"> ID</th>
                            <th scope="col">Name</th>
                            <th scope="col"> Email </th>
                            <th scope="col"> Address </th>
                            <th scope="col"> EDIT </th>
                            <th scope="col"> DELETE </th>
                        </tr>
                    </thead>
            <?php
                if($result)
                {
                    foreach($result as $row)
                    {
            ?>
                    <tbody>
                        <tr>
                            <td> <?php echo $row['id']; ?> </td>                            
                            <td> <?php echo $row['name']; ?> </td>                                                      
                            <td> <?php echo $row['email']; ?> </td>                            
                            <td> <?php echo $row['address']; ?> </td>                            
                            <td> 
                                <button type="button" class="btn btn-success editbtn"> EDIT </button>
                            </td> 
                            <td>
                                <button type="button" class="btn btn-danger deletebtn"> DELETE </button>
                            </td>
                        </tr>
                    </tbody>
            <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?>
                </table>
            </div>
        </div>


    </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"> </script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"> </script>

<script>

    $(document).ready(function() {

        $('#data_table_id').DataTable();

    });

</script>



<script>

$(document).ready(function () {

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



<script>

$(document).ready(function () {
    $('.editbtn').on('click', function() {
        
        $('#editmodal').modal('show');

        
            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#update_id').val(data[0]);
            $('#name').val(data[1]);
            $('#email').val(data[2]);
            $('#address').val(data[3]);
    });
});

</script>







<?php require_once 'includes/footer.php'; ?>