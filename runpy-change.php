

<html>
<head>
	      <meta charset="utf-8" />
 
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
	<style type="text/css">


	  canvas {
  /* for display purposes */
              /*border: 1px solid red;*/
              display: block;
              float: left;
            }

    .container {
              /* for display purposes */
              border: 1px solid red;
              /* make sure we contain the floats */
              overflow: auto;
              margin-top: 100px;
            }

		.images:hover{

      border: 1px solid red;

}

	</style>
</head>
<body>
<div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://localhost/aircraft/leafletimg/welcome.php" class="simple-text logo-normal">
          Object Detection 
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li >
            <a href="http://localhost/aircraft/leafletimg/welcome.php">
              <i class="now-ui-icons design_app"></i>
              <p>Home</p>
            </a>
          </li>
          <li >
            <a href="http://localhost/aircraft/upload_multiple.php">
              <i class="now-ui-icons design_vector"></i>
              <p>Aircraft Detection</p>
            </a>
          </li>
          <li>
            <a href="http://localhost/ship/upload_ship.php">
              <i class="now-ui-icons design_vector"></i>
              <p>Ships Detection</p>
            </a>
          </li>
            <li class="active ">
            <a href="http://localhost/aircraft/upload_change.php">
              <i class="now-ui-icons design_vector"></i>
              <p>Change Detection</p>
            </a>
          </li>
          <li>
            <a href="http://localhost/aircraft/slider.php">
              <i class="now-ui-icons business_chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="http://localhost/aircraft/generate_report.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>Generate Report</p>
            </a>
          </li>
          <li>
            <a href="http://localhost/aircraft/leafletimg/logout.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>Sign Out</p>
            </a>
          </li>

        </ul>
      </div>
    </div>


 
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
	<!-- ...................PHP MODEL EXECUTION AND STRING OPERATIONS................ -->
 
<?php 
// include('leafletimg/navbar.php');
// Check if the user is logged in, if not then redirect him to login page
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: leafletimg/index.php");
    exit;
} 

$command = escapeshellcmd('python D:\changedetection\change.py');
$output = shell_exec($command);



?>




<div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" style="font-size: 24px;">Change Detection</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>

        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 18px;">Scan Results</h5>
              </div>
              <div class="card-body">
                <div class="alert alert-info">
                  <span>To view scan results, click on image to open it. </span>
                </div>
         
                  </div>
                </div>
              <div class="card">
              <div class="card-header">
                <h5 class="title" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 18px;">Scanned Images</h5>
              </div>
              <div class="card-body">


  	<?php
    $files = scandir('change_tempout');
    foreach($files as $file) {
        if($file !== "." && $file !== "..") {
        	  $file = 'change_tempout/'.$file;
            echo "<img class='images' src='$file' style='width:30%; margin-top: 10px; margin-left:1%' onclick='window.open(this.src)'/>";
        }
    }
?>

  
  </div>

</div>
</div>

 
         
                  </div>
                </div>
              </div>

  
   
              




 

              </div>
          </div>
        </div>



</body>
</html>
