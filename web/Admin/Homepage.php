<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="../Assets/Templates/Admin/img/logo/logo.png" rel="icon">
  <title>ScrapHunt - Dashboard</title>
  <link href="../Assets/Templates/Admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../Assets/Templates/Admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../Assets/Templates/Admin/css/ruang-admin.min.css" rel="stylesheet">
</head>
<?php
include("../Assets/Connection/Connection.php");
include("SessionValidator.php");
?>
<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
         
        </div>
        <div class="sidebar-brand-text mx-3">ScrapHunt</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="Homepage.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Datas
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="far fa-fw fa-map"></i>
          <span>Location</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Location</h6>
            <a class="collapse-item" href="District.php">District</a>
            <a class="collapse-item" href="Place.php">Place</a>
           
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Basic Data</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Basic Data</h6>
            <a class="collapse-item" href="Category.php">Category</a>
            <a class="collapse-item" href="Subcategory.php">Subcategory</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-check"></i>
          <span>Verification</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Verification</h6>
            <a class="collapse-item" href="shopverification.php">Shopverification</a>
            <a class="collapse-item" href="shopaccepted.php">Accepted</a>
            <a class="collapse-item" href="Shoprejected.php">Rejected</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFC" aria-expanded="true"
          aria-controls="collapseFC">
          <i class="fab fa-fw fa-comments"></i>
          <span>F&C</span>
        </a>
        <div id="collapseFC" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">F&C</h6>
            <a class="collapse-item" href="ViewuserComplaint.php">View Complaint</a>
            <a class="collapse-item" href="ViewuserFeedback.php">View Feedback</a>
          </div>
        </div>
      </li>
      
      <hr class="sidebar-divider">
      <div class="version" id="version-ScrapHunt"></div>
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
           
            
            
            
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                
                <span class="ml-2 d-none d-lg-inline text-white small"><?php echo $_SESSION["aname"] ?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
               
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="Logout.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>

          <div class="row mb-3">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Total Earnings</div>
                      <?php
                        $selamnt="SELECT COALESCE(SUM(request_amount),0) as amnt from tbl_request";
                        $rowamnt=$Conn->query($selamnt);
                        $dataamnt=$rowamnt->fetch_assoc();
                      ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Rs.<?php echo $dataamnt["amnt"] ?></div>
                     
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-money-bill fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Total Sales</div>
                      <?php
                        $selsale="SELECT COALESCE(count(request_id),0) as sale from tbl_request";
                        $rowsale=$Conn->query($selsale);
                        $datasale=$rowsale->fetch_assoc();
                      ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $datasale["sale"] ?></div>
                     
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-shopping-cart fa-2x text-success"></i>
                    </div>
                  </div>
                </div>  
              </div>
            </div>
            <!-- New User Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Total User</div>
                      <?php
                        $selu="SELECT COALESCE(count(user_id),0) as user from tbl_user";
                        $rowu=$Conn->query($selu);
                        $datau=$rowu->fetch_assoc();
                      ?>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $datau["user"] ?>
                      </div>
                     
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Scrap Shops</div>
                      <?php
                        $sels="SELECT COALESCE(count(shop_id),0) as shop from tbl_shop";
                        $rows=$Conn->query($sels);
                        $datas=$rows->fetch_assoc();
                      ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $datas["shop"] ?></div>
                      
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-building fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
        </div>
        <!---Container Fluid-->
      </div>
     
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="../Assets/Templates/Admin/vendor/jquery/jquery.min.js"></script>
  <script src="../Assets/Templates/Admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../Assets/Templates/Admin/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../Assets/Templates/Admin/js/ruang-admin.min.js"></script>
  <script src="../Assets/Templates/Admin/vendor/chart.js/Chart.min.js"></script>
  <script src="../Assets/Templates/Admin/js/demo/chart-area-demo.js"></script>  
</body>

</html>