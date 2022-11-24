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
      color: blue;
      /* make sure we contain the floats */
      overflow: auto;
      margin-top: 100px;
    }

    .container1 {
      opacity: 0.7;

    }

    .images:hover {

      border: 1px solid red;

    }

    .main-panel {
      width: 100%
    }


  </style>
</head>

<body style=" background:#BECADF;">



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

  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="col" style="margin-top:-8px; margin-bottom:1px;">
	<div class="navbar-header">
		<a class="navbar-logo" href="#">
					<div style='font-size:26px; color: #ffffff;'>
				<img src='images/logo.png'  style="width:60px; height:70px;"> 
				Target Recognition
			</div>
		</a>
	</div>
   </div>
</nav>

 <!-- <nav class="navbar navbar-light bg-dark">
  <a class="navbar-brand" href="http://localhost/horizon/cases.php">
    <div class="row">
      <div class="col-4" style="text-align:center">
    <img src="images/logo.png" width="50" height="50" class="d-inline-block align-top" alt="">

      </div>
      <div class="col-8" style="text-align:center">
      <h3 class=" text-light text-center font-weight-bold lead bg-gradient-light text-white" >Target Recognition</h3>

      </div>
    </div>
  </a>
</nav> -->




  <!--<div class="main-panel" id="main-panel">
    <div class="jumbotron jumbotron-fluid text-light bg-dark">
      <div class="container1">
        <h1 class="display-4 text-light text-center text- font-weight-bold lead bg-gradient-light text-white">Target Recognition</h1>
        <hr class="my-4">

      </div>
    </div>
    <div class="logo" style=" position:fixed; 
  top:30px; 
  left:20px;" id="logo">
      <a href="http://localhost/horizon/cases.php"><img src="images/logo.png"> </a>
    </div>
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- Navbar -->

        <!-- End Navbar -->




        <div class="card display-4 text-dark text-center text- font-weight-bold lead bg-gradient-light text-white">
          <div class="card-header">
            <h5 class="title" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 18px;">Scanned Images</h5>
          </div>
          <div class="card-body">
            <?php
            // include('leafletimg/navbar.php');
            // Check if the user is logged in, if not then redirect him to login page

            $command = escapeshellcmd('D:/Anaconda/envs/torch/python.exe D:/surveillance/fr/person_missing.py');
            $output = shell_exec($command);
            echo '<div class="my_class">' . $output . '</div>';



            ?>


            <?php
            $files = scandir('output_target');
            foreach ($files as $file) {
              if ($file !== "." && $file !== "..") {
                $file = 'output_target/' . $file;
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