<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['userlogin'])==0):
header('location:index.php');
else:
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <title>Admin-ZITE DATA</title>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-callout.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
  <?php include_once('includes/header.php');?>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
   <?php include_once('includes/leftbar.php');?>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">ZITE DATA</h3>
          <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a>
                </li>
                
                <li class="breadcrumb-item active">ZITE DATA
                </li>
              </ol>
            </div>
          </div>
        </div>
     
      </div>
      <div class="content-body">
        <!-- Basic Tables start -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
             
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                  
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                 
                  </ul>
                </div>
              </div>
              <div class="card-content collapse show">
                
                <p class="px-1">
                
                <div class="table-responsive">
                  <table class="table mb-0">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>NAMES</th>
                      </tr>
                    </thead>
                    <tbody>
<?php 

$sql ="SELECT * from zite";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0):
foreach($results as $result):
       ?>

                      <tr>
                  <th scope="row"><?php echo htmlentities($cnt);?></th>
                  <td><?php echo htmlentities($result->names);?></td>
                  <?php
                      $cnt++;
endforeach;
else: 
?>           
           <tr>
<td colspan="5" style="color:red; font-size:22px;" align="center">No Record found</td>
</tr>
<?php  
endif;
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Basic Tables end -->

             
                 
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Responsive tables end -->
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
<?php include('includes/footer.php');?>
  <!-- BEGIN VENDOR JS-->
  <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>

  <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="app-assets/js/scripts/customizer.js" type="text/javascript"></script>
</body>
</html>
<?php endif;?>