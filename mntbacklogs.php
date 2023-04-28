


<?php 
session_start();
require 'dbconn.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <?php include('navbar.php'); ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- system functions using javascript-->
    <script type="text/javascript" src="sys_scripts.js"></script>

    <!-- JQuery Online -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>  -->

    <!--Jquery - Local file-->
    <script src="jquery.main.js"></script>
    <title>PMS - Maintenanace</title>
  </head>


  <body>

  <!-- MODAL#1 : Solved -->

  <!-- Button trigger modal -->

<div class="modal fade" id="SolvedModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Request Resolved.</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="mntbacklogs_actions.php" method="POST">
      <div class="modal-body">
      <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Request No.</label>
                <input type="text" name="reqid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">This Request is gonna be Closed as its "Solved".</div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Request State</label>
                <input type="text" name="reqstate" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="Done" disabled> 
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Work Order No.</label>
                <input type="text" name="woid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Technical Action(s)</label>
                <input type="text" name="techactions" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Comments</label>
                <input type="text" name="comment" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Work Order State</label>
                <input type="text" name="wostate" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="Done" disabled>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Request is Maintained Using Local Resources</label>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit_solved" class="btn btn-primary">Submit</button>
      </div>

    </form> 

    </div>
  </div>
</div>



<!-- MODAL#2 : Archive -->

  <!-- Button trigger modal -->

  <div class="modal fade" id="ArchiveModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Archive Request </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="mntbacklogs_actions.php" method="POST">
      <div class="modal-body">
     
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Request No.</label>
                <input type="text" name="reqid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">This Request is gonna be Closed as its "Solved".</div>
            </div>


            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Request State</label>
                <input type="text" name="reqstate" class="form-control" id="exampleInputPassword1" value="Archive" disabled>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Request will be Archived, for possible Future Use!</label>
            </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit_archive" class="btn btn-primary">Submit</button>
      </div>

      </form>

    </div>
  </div>
</div>







<!-- MODAL# 3 : Requisition -->

  <!-- Button trigger modal -->

  <div class="modal fade" id="RequisitionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Request Resolved.</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="mntbacklogs_actions.php" method="POST">
      <div class="modal-body">
      <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Request No.</label>
                <input type="text" name="reqid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Work Order No.</label>
                <input type="text" name="woid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Purchase Request No.</label>
                <input type="text" name="prno" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Work Order Status</label>
                <input type="text" name="wostate" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Estimated Cost</label>
                <input type="text" name="wobudget" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Spare parts/Consumables or Materials are required</label>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit_requisition" class="btn btn-primary">Submit</button>
      </div>

      </form>

    </div>
  </div>
</div>





<!-- MODAL# 4 : Outsourcing -->

  <!-- Button trigger modal -->

  <div class="modal fade" id="OutsourcingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Request Resolved.</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="mntbacklogs_actions.php" method="POST">
      <div class="modal-body">
      <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Request No.</label>
                <input type="text" name="reqid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">This Request is gonna be Closed as its "Solved".</div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Work Order No.</label>
                <input type="text" name="woid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

      
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Purchase Request No.</label>
                <input type="text" name="prno" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

          
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Reason</label>
                <input type="text" name="reason" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Estimated Cost</label>
                <input type="text" name="wostatus" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>


            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Requested Maintenanace is Out-of-Scope</label>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit_outsourcing" class="btn btn-primary">Submit</button>
      </div>

      </form>
    </div>
  </div>
</div>








    <div class="container">
        <?php include('message.php'); ?>
        
        <div class="row">
            <div class="col-md-12">
                <div class="card" >
                    <div class="card-header">
                        <h4>Maintenanace Backlogs
                        <a href="mntrequest.php" class="btn btn-primary float-end">Work Orders</a>
                        </h4>
                    </div>

                    <div>
                        <select id="department" class="form-select" aria-label="Default select example" onchange="selectdept()">
                        <option selected>Select Department</option>
                          <?php 
                            $query7="select DISTINCT dept_name from departments";
                            $result7=mysqli_query($conn,$query7);
                            
                            while($rows=mysqli_fetch_array($result7))
                            {
                              ?>
                              <option value="<?=$rows['dept_name']?>"><?=$rows['dept_name']?></option>
                              <?php 
                            }
                          ?>
                        </select>
                    </div>

                    <div class="card-body" >
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Req#</th>
                                    <th>Department</th>
                                    <th>Request Date</th>
                                    <th>Request Type</th>
                                    <th>Equipment Name</th>
                                    <th>Serving</th>
                                    <th>Problem</th>
                                    <th>Severity</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>

                            <tbody id="req_list">
                                    


                            
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

   <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Jquery CDN Link-->
    <script src="https://code.jquery.com/jquery-3.6.3.js" ></script>
    
</body>

</html>