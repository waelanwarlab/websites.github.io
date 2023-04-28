





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PMS - ZAD</title>
  </head>


  <body>
        <div class="container">
            <div class="row">
                <div class="col-md-13">
                    <div class="card">
                        <div class="card-header">
                        <h4> Maintenanace Order</h4>
                        </div>

                        <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label>Order No.</label>
                                <input type="text" name="orderid" class="form-control">                                
                            </div>
                            
                            <div class="mb-3">
                                <label>Response time </label>
                                <input type="time" name="restime" class="form-control">                                
                            </div>

                            <div class="mb-3">
                                <label>Action Taken</label>
                                <input type="text" name="moreactions" class="form-control">                                
                            </div>

                            <div class="mb-3">
                                <label>Remarks</label>
                                <input type="text" name="remarks" class="form-control">                                
                            </div>

                            <div class="mb-3">
                                <label>Status</label>
                                <input type="text" name="status" class="form-control">                                
                            </div>
                                                                                                           
                            <div class="mb-3">
                                <button type="submit" name="save_mntorder" class="btn btn-primary">Save</button>
                            </div>
                        </form>

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
