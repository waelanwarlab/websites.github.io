


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" bg-light>
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PMS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>


        <!-- Maintenanace Dropdown MENU -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Maintenance
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="mntrequest.php">Maintenance Request</a></li>
            <li><a class="dropdown-item" href="service_request.php">Service Request</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="mntrequest_display.php">My Requests</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="service_recieving.php">Service Recieving</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="mntbacklogs.php">Requests Backlog</a></li>
            <li><a class="dropdown-item" href="mntorder.php">Work Orders</a></li>
            <li><a class="dropdown-item" href="workorders_log.php">Work Log</a></li>
            
          </ul>
        </li>


        <!-- Assets/Services Dropdown MENU -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Assets
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="assets.php">New Asset</a></li>
            <li><a class="dropdown-item" href="assets_details.php">Asset Details</a></li>
            <li><a class="dropdown-item" href="asset_specs.php">Asset Specifications</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="services.php">Services</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="assets_display.php">Assets Display</a></li>
            <li><a class="dropdown-item" href="asset_specs_display.php">Assets Display - Specs.</a></li>

            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="asset_profile.php">Assets Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="asset_assignment.php">Assets Assignments</a></li>
            <li><a class="dropdown-item" href="asset_clearance.php">Assets Clearance</a></li>
            <li><a class="dropdown-item" href="asset_custody.php">Employees Custody</a></li>
          </ul>
        </li>


        <!-- Allocations Dropdown MENU -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Allocation
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="departments.php">Departments</a></li>
            <li><a class="dropdown-item" href="sections.php">Sections</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="areas.php">Areas</a></li>
            <li><a class="dropdown-item" href="blocks.php">Blocks</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="employees.php">Employees</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="asset_allocation.php">Allocation - Assets</a></li>
            <li><a class="dropdown-item" href="#">Asset Transfer</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="assets_exit_permission.php">Exit Permissions</a></li>
            <li><a class="dropdown-item" href="#">Exit Permissions - Tracking</a></li>
            
          </ul>
        </li>









        <!-- Settings Dropdown MENU -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Settings
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="import_data_xls.php">Import Data</a></li>
            <li><a class="dropdown-item" href="#">Import Images</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="user_roles.php">User Roles</a></li>
          </ul>
        </li>

        
        <li class="nav-item">
          <!-- <a class="nav-link disabled" href="logout.php" tabindex="-1" aria-disabled="true">Log out</a>  -->
          <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
        </li>

      </ul>


      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>





  



