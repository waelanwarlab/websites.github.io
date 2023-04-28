
<?php 
  session_start();

  if(!isset($_SESSION['username']))
      {
        header('Location: login.php');
      }
?>


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

  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a href="" class="navbar-brand">PMS</a>
    <a href="#sb" data-toggle="collapse" class="navbar-toggler"></a>
      <span class="navbar-toggler-icon"></span>
    </a>

    <div id="sb" class="collapse navbar-collapse">

      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="#" class="nav-link">Dashboard</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Maintenanace
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="mntrequest.php">Mnt. Request</a></li>
            <li><a class="dropdown-item" href="#">Mnt. Order</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Assets
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Assets Family</a></li>
            <li><a class="dropdown-item" href="#">Assets Category</a></li>
            <li><a class="dropdown-item" href="#">Assets Subcategory</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Departments</a></li>
            <li><a class="dropdown-item" href="#">Sections</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Assets</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Allocations
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Buildings/Areas</a></li>
            <li><a class="dropdown-item" href="#">Blocks</a></li>
            <li><a class="dropdown-item" href="#">Assets Allocation</a></li>
            <li><a class="dropdown-item" href="#">Assets Assignment</a></li>
            <li><a class="dropdown-item" href="#">Report</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">Settings</a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">Logout</a>
        </li>

      </ul>

      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

    </div>
  </nav>
  
  <h4>Welcome 
    <?php echo $_SESSION['username']; ?> 
  </h4>

  <div class="container">
    <a href="logout.php" class="btn btn-primary mt-5">Logout</a>
  </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  </body>
</html>